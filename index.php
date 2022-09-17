<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Noticias</title>
    <style>
        fieldset {
            width: 300px;
            margin: 5px auto;
        }

        h2 {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 10px;
            color: red;
        }
    </style>
</head>

<body>
    <fieldset>
        <form action="mensagem.php" method="post">
            <table>
                <tr>
                    <td>Nome</td>
                    <td><input type="text" name="txt_nome"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="txt_email"></td>
                </tr>
                <tr>
                    <td>Mensagem</td>
                    <td><textarea name="txt_mensagem" cols="30" rows="10"></textarea></td>
                </tr>

                <td></td><br>
                <td><input type="submit" value="Cadastrar" name="cadastrar"></td>
                </tr>
            </table>
        </form>
    </fieldset>
    <hr>
    <h2>Lista de Comentários</h2>
    <?php
    header('context-type:text/html;charset=utf-8');
    include_once 'conexao.php';
    $sql = mysqli_query($cnn, "SELECT * FROM tb_mensagem ORDER BY dtcad desc ");
    while ($exibir = mysqli_fetch_array($sql)) {
        $nome = $exibir['nome'];
        $email = $exibir['email'];
        $data = $exibir['dtcad'];
        $msg = $exibir['mensagem'];

        echo "<strong>Data:$data</strong><br>";
        echo "<strong>Email :$email</strong><br>";
        echo "<strong>Mensagem :$msg</strong><br><hr>";
    }
    ?>
</body>

</html>