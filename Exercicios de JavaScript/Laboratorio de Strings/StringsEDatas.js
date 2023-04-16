//EXERCICIOS DE FORA DO PDF DO LABORATÓRIO DE STRINGS LETRA A, B, C, D, E.

let texto = document.getElementById('frase').value;
function numeroPTotalN(){// (A)
    let result = document.getElementById('nTresult');
    let texto = document.getElementById('frase').value;
    let quantLetra = texto.replace(/\s/g, '').length; // o replace() retorna uma nova string com algumas ou todas as correspondências de um padrão substituídas por um determinado caractere(s), e o (/\s/g, '') junto com o length é pra ver o comprimento da string desprezando os espaços entre as palavras, ou seja, vai trocar os espaços por '' (vazio)
    let quantPalavra = texto.split(' ').length; // o split() divide uma string em uma lista ordenada de substrings, coloca essas substrings em um array e retorna o array
    result.innerHTML = "O texto digitado tem " + quantLetra + " letras, e " + quantPalavra + " palavras.";
}


function ocorrencia(){// (B)
    let result2 = document.getElementById('ocoresult');
    let texto = document.getElementById('frase').value;

    let ocorrencias = texto.split(/\W+/); //W+ significa que vamos considerar tudo que não é letra como separador
    let contagemPalavra = {}; //Cria um objeto para armazenar a contagem de palavras

    for(let i = 0; i < ocorrencias.length; i++) //Percorre o array de palavras e atualiza a contagem de palavras
    {
        let ocorren = ocorrencias[i];

        if (contagemPalavra[ocorren]) {
            contagemPalavra[ocorren]++; //Se a palavra ja existe na frase, adiciona mais um na contagem de palavras
            
        }else{
            contagemPalavra[ocorren] = 1; //Se a palavra ainda não existe na frase, se cria uma nova entrada no array com contagem 1
        }
    }
    
    result2.textContent = JSON.stringify(contagemPalavra, null, 2);
}

function marcar(){// (C)
    let result3 = document.getElementById('marqueresult');
    let texto = document.getElementById('frase').value;
    let Marcacao = document.getElementById('procure').value;

    let encontraOcoPala = new RegExp(Marcacao, "gi"); // Cria uma expressão regular para encontrar todas as ocorrências da palavra no texto
    let Marcado = texto.replace(encontraOcoPala, `<b> ${Marcacao} </b>`); // Substitui cada ocorrência da palavra por uma versão em negrito da mesma palavra

    result3.innerHTML = Marcado;
}

function substituicao(){// (D)
    let result4 = document.getElementById('substituiresult');
    let texto = document.getElementById('frase').value;
    let substi = document.getElementById('substitui').value;
    let novaPa = document.getElementById('novaPalavra').value;

    let novoTexto = texto.replace(new RegExp(substi, 'g'), novaPa);

    result4.innerHTML = novoTexto;
}

//EXERCICIOS DO PDF : LABORATÓRIO DE JAVASCRIPT - STRINGS E DATAS

function inverte(){// (1)
    let result5 = document.getElementById('inverteresult');
    let texto = document.getElementById('frase').value;

    let inverter = texto.split("").reverse().join("");

    result5.innerHTML = inverter;
}

function vogaisnegrito(){// (2)
    let result6 = document.getElementById('vogaisresult');
    let texto = document.getElementById('frase').value;

    let encontraVogal = texto.replace(/[aeiou]/gi, `<b>$&</b>`)// O $& vai pegar todas as vogais do texto encontradas e colocar em negrito; O modificador 'g' significa que a expressão regular deve ser aplicada globalmente (ou seja, para todas as ocorrências no texto) e o modificador 'i' faz a busca ser case insensitive.

    result6.innerHTML = encontraVogal;
}

function numeroOcorrencia(){// (3)
    let result7 = document.getElementById('numeroresult');
    let texto = document.getElementById('frase').value;

    let ocorrenciaPalavra = texto.split(/\W+/);
    let armazenaPalavra = {};

    for(let i = 0; i<ocorrenciaPalavra.length; i++)
    {
        let ocorrenPalavra = ocorrenciaPalavra[i];
        
        if(armazenaPalavra[ocorrenPalavra])
        {
            armazenaPalavra[ocorrenPalavra]++;
        }else armazenaPalavra[ocorrenPalavra] = 1;
    }
    
    result7.textContent = JSON.stringify(armazenaPalavra, null, 2);
}

function palavraOcorrencia(){// (4)
    let result8 = document.getElementById('palavraresult');
    let texto = document.getElementById('frase').value;

    let palavras = texto.split(/\W+/);
    let contagem = {};

    for(let i = 0; i < palavras.length; i++ )
    {
        let palavra = palavras[i];
        
        if(contagem[palavra])
        {
            contagem[palavra]++;
        }else contagem[palavra] = 1;
    }

    let palavrafrequente = "";
    let ocorrencia = 0;

    for(let palavra in contagem)
    {
        if(contagem[palavra] > ocorrencia)
        {
            palavrafrequente = palavra;
            ocorrencia = contagem[palavra];
        }
    }

    //result8.innerHTML = "A palavra mais frequente é " + palavrafrequente + " se repetindo " + ocorrencia + " vez(es)";
    result8.innerHTML = `A palavra mais frequente é <b>${palavrafrequente}</b> se repetindo <b>${ocorrencia}</b> vez(es)`;
}

function substi(){// (5)
    let result9 = document.getElementById('subsresult');
    let texto = document.getElementById('frase').value;
    let subs = document.getElementById('subs').value;
    let newPala = document.getElementById('newPalavra').value;

    let newTexto = texto.replace(new RegExp(subs, 'g'), newPala);

    result4.innerHTML = newTexto;
}