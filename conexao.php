<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = 'deskserve';
$db_banco = 'db_noticias';


$cnn = mysqli_connect($servidor, $usuario, $senha, $db_banco);

if (!$cnn) {

    echo "Erro na conexão!!!";
}
