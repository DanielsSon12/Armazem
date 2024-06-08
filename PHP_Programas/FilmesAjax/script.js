// Obtendo um objeto do tipo XMLHttpRequest
let xhr = new XMLHttpRequest();

// Pegando os itens que vamos usar do HTML
const $divFilmes = document.querySelector('#divFilmes');
const $btnCarregar = document.querySelector('#btnCarregar');

// Execução do botão $btnCarregar
$btnCarregar.addEventListener("click", function(){
    // Abrindo a requisição Ajax por meio do método GET e solicitando o arquivo/recurso filmes.json
    xhr.open("GET", 'filmes.json');
    // Definindo um cabeçalho
    xhr.setRequestHeader("Content-Type", "application/json");

    $divFilmes.innerHTML = '';

    // Função para monitorar o estado da requisição e consequentemente executar ou não seu código
    xhr.onreadystatechange = function() {
        // Caso o recurso não seja encontrado
        if(xhr.readyState === 4 && xhr.status === 404){
            console.log('Recurso não encontrado');
        }

        // Caso o recurso for encontrado
        if(xhr.status === 200 || xhr.status === 304){
            // Passando o que esta escrito em text para o formato JSON
            let objJSON = JSON.parse(xhr.responseText);

            // Pegando o objeto filmes(uma lista de objetos do tipo filme) do objeto obtido acima
            let filmes = objJSON.filmes;

            // For para percorrer a lista filmes que sera pendurada da div que recuperamos($divFilmes), e criar uma lista que ira exibir as informações de cada filme
            for(let i in filmes){
                //Pegando um filme a cada iteração
                let filme = filmes[i];
                console.log(filme);

                // Criando uma ul que ira conter todos os filmes
                const $ulFilme = document.createElement('ul');
                $divFilmes.appendChild($ulFilme);

                // Montando uma li para cada propriedade dos filmes e colocando dentro da ul criada
                // ID
                const $liId = document.createElement('li');
                $liId.innerHTML = "<strong>Id: </strong>" + filme.id;
                $ulFilme.appendChild($liId);
            
                // Título
                const $liTitulo = document.createElement('li');
                $liTitulo.innerHTML = "<strong>Título: </strong>" + filme.titulo;
                $ulFilme.appendChild($liTitulo);

                // Resumo
                const $liResumo = document.createElement('li');
                $liResumo.innerHTML = "<strong>Resumo: </strong>" + filme.resumo;
                $ulFilme.appendChild($liResumo);

                // Gênero
                const $liGenero = document.createElement('li');
                $liGenero.innerHTML = "<strong>Gêneros: </strong>" + filme.generos;
                $ulFilme.appendChild($liGenero);

                // Data de lançamento
                const $liLancamento = document.createElement('li');
                $liLancamento.innerHTML = "<strong>Lançamento: </strong>" + filme.dataLancamento.pais + " - " + filme.dataLancamento.dia;
                $ulFilme.appendChild($liLancamento);

                // Criando uma linha para separar os filmes
                const $linhaHr = document.createElement('hr');
                $divFilmes.appendChild($linhaHr);
            }
        }
    }
    // Enviando a requisição Ajax
    xhr.send();
});