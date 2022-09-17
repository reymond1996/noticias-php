<?php
include_once 'conexao.php';
header('context-type:text/html;charset=utf-8');

if (isset($_POST['cadastrar'])) {
    $nome =  $_POST['txt_nome'];
    $email = $_POST['txt_email'];
    $mensagem = $_POST['txt_mensagem'];


    //echo $nome, $email, $mensagem;

    $sql =  "INSERT INTO tb_mensagem(id,nome,email,dtcad,mensagem)
  VALUES(null,'$nome','$email',now(),'$mensagem')";

    $resultado = mysqli_query($cnn, $sql);

    if ($resultado) {
        header('location:index.php');
    } else {
        echo "error ao cadastrar";
    }
}
