<?php
echo "<pre>";
print_r($_FILES);
echo "</pre>";
echo "<hr>";
echo "<pre>";
print_r($_POST);
echo "</pre>";
echo "<hr>";
//declaração do diretório padrão de upload
$dirUpload = "up/";

//Por meio desse foreach percorremos os arquivos enviados movendo-os para
//o diretório de upload, por meio da função nativa move_uploaded_files
foreach ($_FILES as $arquivo){
    $arquivoOrigem = $arquivo['tmp_name'];
    $arquivoDestino = $dirUpload.$arquivo['name'];
    if(move_uploaded_file($arquivoOrigem, $arquivoDestino)){
        echo "Arquivo salvo com o caminho {$arquivoDestino} <br>";
    } else{
        echo "Erro ao fazer upload de arquivo <br>";
    }
}
?>