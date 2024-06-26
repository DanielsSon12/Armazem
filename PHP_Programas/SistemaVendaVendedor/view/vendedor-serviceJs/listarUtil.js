import { exibirMensagemDeErro } from "../utiljs/sistemaUtil.js";
import { meuFetch } from "../utiljs/obtemFetch.js";
function montarTabela(vendedores){
    //Recupera o corpo da tabela
    const corpoTabela = document.querySelector('tbody');
    corpoTabela.innerHTML="";
    //percorre o array de vendas criando uma linha para cada venda e pendurando no corpo da tabela 
    vendedores.forEach(vendedor=>{
        const linha = criarLinha(vendedor);
        corpoTabela.appendChild(linha);
    });
}//Fim da função

function criarLinha(vendedor){
    //Para cada venda, use a função map para criar 4 colunas
    const tr = document.createElement('tr');
    const [ cId, cNome, cPercentual, cAcoes ] = 
    [ 'td', 'td', 'td', 'td' ].map( coluna => document.createElement(coluna) );
    //Pendure de uma única vez as 4 colunas
    tr.append(cId, cNome, cPercentual, cAcoes);
    //Extraia os atributos de venda para 4 variáveis
    let {id,nome, percentual_comissao} = vendedor;
    //Preencha cada coluna com seu valor (conteúdo de sua variável)
    cId.textContent = id;
    cNome.textContent = nome;
    cPercentual.textContent = percentual_comissao;
    cAcoes.innerHTML = `<a href="#" idVendedor=${id}>[EXCLUIR]</a>
    <a href="#" idVendedor=${id}>[ALTERAR]</a>`;
    //Retorne a linha criada
    return tr;
}  

function listar(){
    meuFetch("GET","../controller/vendedorListar.php")
    .then(resposta=>{
        if(resposta.erro === false){
            fcSucessoListarVendedor(resposta);
        }else{
            fcErroListarVendedor(resposta.msg);
        }
    })
    .catch(erro=>fcErroListarVendedor(erro));
}

//Funções que tratam a resposta
function fcSucessoListarVendedor(resposta){
    let dados = resposta.dados;
    montarTabela(dados);
}
function fcErroListarVendedor(msg){
    exibirMensagemDeErro(document.querySelector(".msgErro"),msg)
}

export {fcSucessoListarVendedor,fcErroListarVendedor, listar}