<?php
    //Essa parte serve pra indicar que o código PHP é tipado;
    declare(stric_type = 1);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes</title>
</head>
<body>
    <?php
        require_once("conexao.php");

        $con = null;
        try{
            $con = getConexao();
        }catch (PDOException $e){
            die("Erro ao tentar se conectar. {$e -> getMessage()}");
        }

        //Pro sql funcionar temos que fazer os comandos em letra maiúscula;
        $sql = "SELECT * FROM filmes ORDER BY titulo";

        $filmes = null;

        try{
            //A variavel $ps vai armazenar a conexão ($con), que dentro dessa conexão vai ser preparado o sql ($sql);
            //E depois a variavel $ps vai ser executada;
            $ps = $con -> prepare($sql);
            $ps -> execute();
            //A variavel $filmes vai guardar todos os filmes do banco de dados em pedaços por causa do (fetchALL);
            //E depois essa variavel vai virar uma matriz associativa com o (FETCH_ASSOC);
            $filmes = $ps->fetchAll(PDO::FETCH_ASSOC);
        }catch (PDOException $e){
            die("Erro ao tentar consultar o filme. {$e -> getMessage()}");
        }
    ?>
    <table>
        <thead>
            <th>ID</th>
            <th>Título</th>
            <th>Avaliação</th>
            <th>AÇÕES</th>
        </thead>
        <tbody>
            <?php
                foreach($filmes as $filme){
                    echo "<tr>";
                    echo "
                        <td>{$filme['id']}</td>
                        <td>{$filme['titulo']}</td>
                        <td>{$filme['nota']}</td>
                    ";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>