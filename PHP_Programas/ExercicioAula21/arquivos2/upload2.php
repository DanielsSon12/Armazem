<?php
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";
    echo "<hr>";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    echo $_POST["autor"]."<br><hr>";
    $dirUpload = "up/";
    
    //$nomes está recebendo um array com a propriedade name de todos os arquivos enviados
    $nomes = $_FILES['arquivos']['name'];
    
    //$nomesTmp está recebendo um array com a propriedade tmp_name de todos os arquivos enviados.
    $nomesTmp = $_FILES['arquivos']['tmp_name'];
    
    //A cada iteração (a cada arquivo) $arqOrigem recebe o nome temporário do arquivo a ser movido e $arqDestino recebe
    //o nome do arquivo destino precedido pelo diretório de upload
    for($i = 0; $i < count($nomes); $i++){
        $arqOrigem = $nomesTmp[$i];
        $arqDestino = $dirUpload.$nomes[$i];
        if(move_uploaded_file($arqOrigem, $arqDestino)){
            echo "Upload bem sucedido. Caminho: {$arqDestino} <br>";
        } else {
            echo "Erro ao fazer upload de arquivo {$nomes[$i]} <br>";
        }
    }
?>