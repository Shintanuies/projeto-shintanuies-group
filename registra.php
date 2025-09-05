<?php
$conexao = mysqli_connect("localhost", "root", "", "shintanuiesgroup");

if (!$conexao) {
    die("Erro de conexão com o Banco de Dados");
}
$usuario = $_POST['usuario'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO usuarios (usuario,nome, email, senha)
        VALUES ('$usuario','$nome', '$email', '$senha')";

$resultado = mysqli_query($conexao, $sql);

mysqli_close($conexao);
