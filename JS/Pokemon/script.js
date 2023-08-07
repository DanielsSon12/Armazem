const nomePokemon = document.querySelector('.pokemon-nome');
const numeroPokemon = document.querySelector('.pokemon-id');
const imgPokemon = document.querySelector('.pokemon-img');

const formPesquisa = document.querySelector('.form-pesquisa');
const inputPesquisa = document.querySelector('.input-pesquisa');

const buttonProximo = document.querySelector('.botao-proximo');
const buttonVoltar = document.querySelector('.botao-voltar');

//Essa função vai pescar os dados do pokemon da API
const pegaPokemon = async (pokemon) => {
    const APIResposta = await fetch(`https://pokeapi.co/api/v2/pokemon/${pokemon.toLowerCase()}`);
    
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
        nomePokemon.innerHTML = dado.name;
        numeroPokemon.innerHTML = dado.id;
        imgPokemon.src = dado['sprites']['versions']['generation-v']['black-white']['animated']['front_default'];
        
        inputPesquisa.value = '';
    } else {
        nomePokemon.innerHTML = 'Não encontrado :(';
        numeroPokemon.innerHTML = '';
    }
}

//Barra de pesquisa
formPesquisa.addEventListener('submit', (event) => {
    event.preventDefault();

    renderizaPokemon(inputPesquisa.value);
})

renderizaPokemon('1');