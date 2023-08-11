const tableJogo = document.querySelector (".tabela-jogo")
const linha = document.querySelector (".linha")
const element = document.querySelector (".elemento")

let jogadorDaVez = "X";
let jogo = [];

function jogar (jogo){
//    let numero = 9
    
//    while (jogo[numero] == "")
//    {
        let numero = Math.floor((Math.random()*9))
//        if (jogo[numero] == "")
//        {
            jogo[numero] = "O"
//        }
//    }
let seletor ="#"+numero
    document.getElementById(numero).innerHTML = "O"
    console.log("bunda")
}

tableJogo.addEventListener("click", (event) => {
    console.log(event);
    if(event.target.nodeName == "TD"){
        event.target.innerHTML = jogadorDaVez;
        jogo[event.target.id] = jogadorDaVez; 
        /*jogadorDaVez = jogadorDaVez == "X" ? "O" : "X"
        console.log (jogo)*/
        jogar(jogo)
    }
})
