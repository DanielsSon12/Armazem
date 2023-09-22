//ATIVIDADE 1
const produtos = [
    {nome: 'Laptop', preco: 1000, quantidade: 5},
    {nome: 'Mouse', preco: 20, quantidade: 10},
    {nome: 'Teclado', preco: 30, quantidade: 8}
];

const calcularValorTotalEstoque = produtos => {
    let qtd = 0;
    produtos.forEach(element => {
        qtd += element.preco * element.quantidade;
    });
    return (qtd);
}

const valorTotal = calcularValorTotalEstoque(produtos);
document.querySelector('#produtoResposta').innerHTML = "Valor total do estoque: "+valorTotal;

//ATIVIDADE 2
const buscarPrevisaoTempo = async cidade => {
    const api = await fetch('https://github.com/adinan-cenci/climatempo-api');
}

buscarPrevisaoTempo('São Paulo').then((dados) => {
    document.querySelector('#resultado').innerHTML = "Dados da previsão do tempo: "+dados;
})
.catch((erro) => {
    HTMLFormControlsCollection.error('Erro ao buscar previsão do tempo:'+erro);
});

document.addEventListener('DOMContentLoaded', function(){
    //Código aqui
});