//Tela da Pokedex (Pokemon GIF, Número e Nome)
const nomePokemon = document.querySelector('.pokemon-nome');
const numeroPokemon = document.querySelector('.pokemon-id');
const imgPokemon = document.querySelector('.pokemon-img');

//Formulario (Caixa de pesquisa)
const formPesquisa = document.querySelector('.form-pesquisa');
const inputPesquisa = document.querySelector('.input-pesquisa');

//Botões (Próximo e Voltar)
const buttonProximo = document.querySelector('.botao-proximo');
const buttonVoltar = document.querySelector('.botao-voltar');

let procuraPokemon = 1;

//Essa função vai pescar os dados do pokemon da API
const pegaPokemon = async (pokemon) => {
    const APIResposta = await fetch(`https://pokeapi.co/api/v2/pokemon/${pokemon}`); 

    if (APIResposta.status == 200) {
        const dados = await APIResposta.json();
        return dados;   
    }
}

//Essa função carrega o nome, o id, e o gif do pokemon
const renderizaPokemon = async (pokemon) => {
    nomePokemon.innerHTML = 'Carregando...';
    numeroPokemon.innerHTML = '';

    const dado = await pegaPokemon(pokemon);

    if (dado) {
        imgPokemon.style.display = 'block';
        nomePokemon.innerHTML = dado.name;
        numeroPokemon.innerHTML = dado.id;
        imgPokemon.src = dado['sprites']['versions']['generation-v']['black-white']['animated']['front_default'];
        inputPesquisa.value = '';
        procuraPokemon = dado.id;
    } else {
        imgPokemon.style.display = 'none';
        nomePokemon.innerHTML = 'Não encontrado :(';
        numeroPokemon.innerHTML = '';
    }
}

//Barra de pesquisa
formPesquisa.addEventListener('submit', (event) => {
    event.preventDefault();

    renderizaPokemon(inputPesquisa.value.toLowerCase()); //toLowerCase() vai passar todas as letras da palavra para minúsculo na hora de fazer a busca pelo pokemon
})

buttonVoltar.addEventListener('click', () => {
    if (procuraPokemon > 1){
        procuraPokemon -= 1;
        renderizaPokemon(procuraPokemon);
    }
});

buttonProximo.addEventListener('click', () => {
    procuraPokemon += 1;
    renderizaPokemon(procuraPokemon);
});

renderizaPokemon(procuraPokemon);