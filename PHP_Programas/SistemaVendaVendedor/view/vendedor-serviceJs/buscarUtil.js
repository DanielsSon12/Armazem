import { exibirMensagemDeErro, preencherHtml } from "../utiljs/sistemaUtil.js";

function fcSucessoBuscarVendedor(resposta){
    let vendedor = resposta.dados;
    //Usando IIFE para criar um bloco de código assíncrono
    (async ()=>{
        //Carregar formulário no modal
        await preencherHtml("formVendedor.html", document.querySelector("#modalForm"));
        //preencher formulário
        document.querySelector('#id').value = vendedor.id;
        document.querySelector('#nome').value = vendedor.nome;
        document.querySelector('#percentual').value = vendedor.percentual;
        //Abrir modal
        document.querySelector(".meuModal").showModal();
    })();
}

function fcErroBuscarVendedor(msg){
    exibirMensagemDeErro(document.querySelector(".msgErro"),msg)
}

export {fcSucessoBuscarVendedor, fcErroBuscarVendedor}