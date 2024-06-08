import { fcSucessoListarPessoa, fcErroListarPessoa } from "./inserirUtil.js";

function verificarInformacoes(nome, dataN, cpf, endereco) {
    // Verifica se algum dos campos está vazio
    if (!nome || !dataN || !cpf || !endereco) {
        // Chama a função fcErroListarPessoa do módulo inserirUtil.js
        // com a mensagem "Por favor, preencha todos os campos."
        fcErroListarPessoa("Por favor, preencha todos os campos.");
        limparMensagem(); // Limpar mensagem de erro após 2 segundos
        return false; // Retorna falso indicando que as informações não estão válidas
    }
    // Verifica se o mês na data de nascimento é válido
    // Divide a string da dataN em partes separadas pelo caractere '-'
    const partesData = dataN.split('-');

    // Converte o segundo elemento do array (que representa o mês) em um número inteiro
    const mes = parseInt(partesData[2], 10);

    if (mes < 1 || mes > 12) {
        // Chama a função fcErroListarPessoa do módulo inserirUtil.js
        // com a mensagem "Por favor, insira um mês válido."
        fcErroListarPessoa("Por favor, insira um mês válido.");
        limparMensagem(); // Limpar mensagem de erro após 2 segundos
        return false; // Retorna falso indicando que as informações não estão válidas
    }
    return true; // Retorna verdadeiro indicando que as informações estão válidas
}

function limparMensagem() {
     // Define um temporizador para remover a mensagem de erro após 2 segundos
    setTimeout(() => {
        const mensagemErro = document.querySelector('#msgErro');
        if (mensagemErro) {
            mensagemErro.remove();// Remove a mensagem de erro
        }
    }, 2000); // 2 segundos
}

const btnEnviar = document.querySelector('#inserir');
btnEnviar.addEventListener('click', async function(evento) {
    evento.preventDefault();// Impede o comportamento padrão do clique em um link
    const nome_pessoa = document.querySelector('#nomePessoa').value;
    const dataN_pessoa = document.querySelector('#dataNPessoa').value;
    const cpf_pessoa = document.querySelector('#cpfPessoa').value;
    const endereco_pessoa = document.querySelector('#enderecoPessoa').value;

    // Verifica se as informações estão válidas
    if (!verificarInformacoes(nome_pessoa, dataN_pessoa, cpf_pessoa, endereco_pessoa)) {
        return; // Retorna se as informações não estiverem válidas
    }
    
     // Cria um objeto pessoa com os dados obtidos
    const pessoa = {
        "nome": nome_pessoa,
        "dataN_pessoa": dataN_pessoa,
        "cpf_pessoa": cpf_pessoa,
        "endereco_pessoa": endereco_pessoa
    };

    try {
         // Faz uma requisição para inserir os dados no servidor
        const resposta = await fetch("../controller/pessoaInserir.php", {
            method: "POST",
            body: JSON.stringify(pessoa),
            headers: {
                "Content-Type": "application/json;charset=UTF-8"
            }
        });
        // Lança um erro se a resposta não estiver OK
        if (!resposta.ok)
            throw new Error(resposta.status + " - " + resposta.statusText);
        // Converte a resposta para JSON
        const data = await resposta.json();
        // Verifica se houve sucesso na inserção ou não e exibe a mensagem apropriada
        if (data.erro === false)
            fcSucessoListarPessoa(data);
        else
            fcErroListarPessoa(data);

        limparMensagem(); // Limpar mensagem após 2 segundos
    } catch (erro) {
          // Em caso de erro na requisição, exibe a mensagem de erro
        fcErroListarPessoa(erro);
        limparMensagem(); // Limpar mensagem após 2 segundos
    }
});
