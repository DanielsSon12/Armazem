function fcSucessoListarPessoa(resposta){
    // Vai exibir a mensagem por 2 segundos e redirecionar para usuariosListar.html
    document.querySelector('#msgSucesso').textContent = resposta.msg;
    setTimeout(function(){
        window.location.href = "../view/pessoaListar.html";
    }, 2000);
}

function fcErroListarPessoa(msg){
    exibirMensagemDeErro(msg);
}

function exibirMensagemDeErro(msg){
    document.querySelector('#msgErro').textContent = msg;
    return;
}

export{fcSucessoListarPessoa, fcErroListarPessoa}