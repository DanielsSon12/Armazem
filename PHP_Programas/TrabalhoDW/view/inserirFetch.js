import {fcSucessoInserirLogin, fcErroInserirLogin} from "./inserirUtil.js";
// Recupera o elemento (Também poderíamos usar o form e o evento submit)
const btnEnviar = document.querySelector('#login');
btnEnviar.addEventListener('click',function(evento){
    //Evita o comportamento default de submeter o formulário
    evento.preventDefault();
    //Monta um objeto venda recuperado os elementos do DOM
    let nome_usuario = document.querySelector('#nomeUsuario').value;
    let email_usuario = document.querySelector('#emailUsuario').value;
    let senha_usuario = document.querySelector('#senhaUsuario').value;
    let login = {
        "nome":nome_usuario,
        "senha_usuario":senha_usuario,
        "email_usuario":email_usuario
    };
    fetch("../controller/usuarioInserir.php",{
        method : "POST",
        body : JSON.stringify(login),
        headers : {
            "Content-Type" : "application/json;charset=UTF-8"
        }
        
    })
    .then(resposta => {
        if(!resposta.ok)
            throw new Error(resposta.status + " - " + resposta.statusText);
        return resposta;
    })
    .then(resposta => resposta.json())
    .then(resposta => {
        if(resposta.erro==false)
            fcSucessoInserirLogin(resposta);
        else    
            fcErroInserirLogin
    })
    .catch(erro => fcErroInserirLogin(erro));
})