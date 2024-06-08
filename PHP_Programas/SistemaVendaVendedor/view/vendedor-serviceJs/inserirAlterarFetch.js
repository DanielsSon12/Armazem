import { fcSucessoInserirVendedor, fcErroInserirVendedor } from "./inserirUtil.js";
import { fcSucessoAlterarVendedor, fcErroAlterarVendedor } from "./alterarUtil.js";
import { meuFetch2 } from "../utiljs/obtemFetch.js";
//Recupera o elemento (Também poderíamos usar o form e o evento submit)        
const formEnviar = document.querySelector('#modalForm');
formEnviar.addEventListener('submit', function(event){
    //Evita o comportamento default de submeter o formulário
    event.preventDefault();
    //Monta um objeto venda recuperando os elementos do DOM
    let id = parseInt(document.querySelector('#id').value);
    let nome = document.querySelector('#nome').value;
    let percentual = parseInt(document.querySelector('#percentual').value);
    let vendedor = {
        "id": id,
        "nome": nome,
        "percentual" : percentual
    };
    //Faz o fetch
    if(vendedor.id>0)
        meuFetch2("PUT","../controller/vendedorAlterar.php",fcSucessoAlterarVendedor,fcErroAlterarVendedor,vendedor);
    else
        meuFetch2("POST","../controller/vendedorInserir.php",fcSucessoInserirVendedor,fcErroInserirVendedor,vendedor); 
})



