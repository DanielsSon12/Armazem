// Função para montar a tabela na hora de listar os logins
function montarTabela(logins){
    const corpoTabela = document.querySelector('tbody');
    // foreach para percorrer o array logins(onde vai conter todos os logins) 
    logins.forEach(login =>{
        const linha = criarLinha(login);
        corpoTabela.appendChild(linha);
    })
}

// Função para criar a linha da tabela
function criarLinha(login){
    const tr = document.createElement('tr');
    // Para cada login, a função map cria 4 colunas
    const [lId, lNome,lSenha, lEmail ] = ['td', 'td', 'td', 'td'].map(coluna => document.createElement(coluna));

    // Aqui penduramos os atributos do login para as 4 variáveis
    tr.append(lId, lNome,lSenha, lEmail);

    // Maneira mais "preguiçosa de atribuir os valores do login para váriaveis"
    let {id, nome_usuario, email_usuario, senha_usuario} = login;

    // Preenchendo cada coluna com seu valor
    lId.textContent = id;
    lNome.textContent = nome_usuario;
    lEmail.textContent = senha_usuario;
    lSenha.textContent = email_usuario;

    return tr;
}

// Funções que tratam da resposta
function fcSucessoListarLogin(resposta){
    let dados = resposta.dados;
    montarTabela(dados);
}

function fcErroListarLogin(msg){
    exibirMensagemDeErro(msg);
}

function exibirMensagemDeErro(msg){
    document.querySelector('#msgErro').textContent = msg;
    return;
}

export{fcSucessoListarLogin, fcErroListarLogin}