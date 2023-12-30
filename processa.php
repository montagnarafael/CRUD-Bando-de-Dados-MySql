<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

$result_usuarios = "INSERT INTO usuarios (nome, email, created) VALUE('$nome', '$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuarios);

if (mysqli_insert_id($conn)) {
    $_SESSION['msg'] = "<p style='color:green;'>Usuário Cadastrado com Sucesso</p>";
    header("Location: index.php");
}else {
    $_SESSION['msg'] = "<p style='color:red;'>Usuário Não Foi Cadastrado</p>";
    header("Location: index.php");
}