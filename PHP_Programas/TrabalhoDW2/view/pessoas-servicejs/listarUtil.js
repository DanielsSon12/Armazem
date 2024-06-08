// Função para montar a tabela na hora de listar os logins
function montarTabela(pessoas){
    const corpoTabela = document.querySelector('tbody');
    // foreach para percorrer o array logins(onde vai conter todos os logins) 
    pessoas.forEach(pessoa =>{
        const linha = criarLinha(pessoa);
        corpoTabela.appendChild(linha);
    })
}

// Função para criar a linha da tabelas
function criarLinha(pessoa){
    const tr = document.createElement('tr');
    // Para cada pessoa, a função map cria 5 colunas
    const [CId, CNome,CDataN, CCpf , CEndereco ] = ['td', 'td', 'td', 'td', 'td'].map(coluna => document.createElement(coluna));

    // Aqui penduramos os atributos do pessoa para as 5 variáveis
    tr.append(CId, CNome,CDataN,CCpf,CEndereco);

    // Maneira mais "preguiçosa de atribuir os valores do pessoa para váriaveis"
    let {id, nome_pessoa, dataN_pessoa,cpf_pessoa,endereco_pessoa} = pessoa;

    // Preenchendo cada coluna com seu valor
    CId.textContent = id;
    CNome.textContent = nome_pessoa;
    CDataN.textContent = dataN_pessoa;
    CCpf.textContent = cpf_pessoa;
    CEndereco.textContent = endereco_pessoa;

    return tr;
}

// Funções que tratam da resposta
function fcSucessoListarPessoa(resposta){
    let dados = resposta.dados;
    montarTabela(dados);
}

function fcErroListarPessoa(msg){
    exibirMensagemDeErro(msg);
}

function exibirMensagemDeErro(msg){
    document.querySelector('#msgErro').textContent = msg;
    return;
}

export{fcSucessoListarPessoa,fcErroListarPessoa};