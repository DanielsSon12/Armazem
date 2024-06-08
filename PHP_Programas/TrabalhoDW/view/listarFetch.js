// Fazendo os imports
import {fcErroListarLogin, fcSucessoListarLogin} from "./listarUtil.js";

// Utilizando função autoinvocávels
(()=>{
    fetch("../controller/usuarioListar.php")
    .then(resposta => { //Cada then representa uma promise
        if(! resposta.ok) //Lance um erro a ser capturado pelo catch
            throw new Error(resposta.status + " - " + resposta.statusText);
        return resposta;
    })
    .then(resposta => resposta.json())
    .then(resposta => {
        if(resposta.erro === false){
            fcSucessoListarLogin(resposta);
        }else{
            fcErroListarLogin(resposta.msg);
        }
    })
    .catch(erro => fcErroListarLogin(erro));
    // O catch captura qualquer Erro ou falha de comunicação
})();