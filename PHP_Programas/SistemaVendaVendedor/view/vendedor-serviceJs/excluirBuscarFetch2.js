import { fcSucessoExcluirVendedor, fcErroExcluirVendedor } from "./excluirUtil.js";
import { fcSucessoBuscarVendedor, fcErroBuscarVendedor } from "./buscarUtil.js";
import { respostaFetch } from "../utiljs/obtemFetch.js";
(()=>{
    const corpoTabela = document.querySelector('tbody');
    corpoTabela.onclick = async function(evento){
        const link = evento.target;
        let idVendedor = parseInt(link.getAttribute("idVendedor"));
        if(link.tagName === 'A' && link.textContent === '[EXCLUIR]'){
            if(confirm(`Deseja realmente excluir o vendedor(a) de id ${idVendedor}?`)){
                let vendedor = {id:idVendedor};
                try{
                    console.log('inicio excluir')
                    let resposta = await respostaFetch("DELETE","../controller/vendedorExcluir.php",vendedor); 
                    resposta = await resposta.json();
                    if(resposta.erro==false)
                        fcSucessoExcluirVendedor(resposta);
                    else
                        fcErroExcluirVendedor(resposta.msg);
                    console.log('fim')
                }catch(erro){
                    fcErroExcluirVendedor(erro);
                }       
            }      
        }else if(link.tagName === 'A' && link.textContent === '[ALTERAR]'){
            try{
                console.log('inicio alterar')
                let resposta = await respostaFetch("GET",`../controller/vendedorBuscar.php?id=${idVendedor}`); 
                resposta = await resposta.json();
                if(resposta.erro==false)
                    fcSucessoBuscarVendedor(resposta);
                else
                    fcErroBuscarVendedor(resposta.msg);
                console.log('fim')
            }catch(erro){
                fcErroBuscarVendedor(erro);
            }       
        }      
    }
})();
