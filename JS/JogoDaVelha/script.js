/*
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
        console.log (jogo)
        jogar(jogo)
    }
})
*/

function verificaVencedor(tabuleiro, jogador) {
    const winCombos = [
        [0, 1, 2], [3, 4, 5], [6, 7, 8], //combos linhas
        [0, 3, 6], [1, 4, 7], [2, 5, 8], //combos coluna
        [0, 4, 8], [2, 4, 6]             //combos diagonais
    ];

    for (const combo of winCombos) { // o of vai fazer com que o array winCombos vire a constante combo, isso permite iterar facilmente sobre os valores de uma coleção(Array)
        //every serve para verificar se uma condição é verdadeira para todos os elementos de um array ou matriz
        //essa condição do if vai verificar se o conteúdo da célula(cell) do tabuleiro é igual ao símbolo do jogador
        if (combo.every(cell => tabuleiro[cell] === jogador)) {
            return true;
        }
    }

    return false;
}

function verificaEmpate(tabuleiro) {
    return tabuleiro.every(cell => cell !== ''); //essa função dentro do every, é uma callback e esta verificando se o conteúdo da célula não esta vazio
}

function computadorJogada(tabuleiro) {
    const cellVazias = tabuleiro.reduce((acumulador, celula, indice) => {
        if (celula === '') {
            acumulador.push(indice); //push serve para adicionar elementos a um array
        }
        return acumulador;
    }, []);

    const randomIndice = Math.floor(Math.random() * cellVazias.length);
    return cellVazias[randomIndice];
}

let currentPlayer = 'X';
const tabuleiro = Array(9).fill('');
