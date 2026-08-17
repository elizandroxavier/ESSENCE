<?php
session_start();
require_once 'conexao.php';

$erro = "";
$sucesso = "";

if($_SERVER["REQUEST_METHOD"] === "POST"){

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = $pdo->prepare("SELECT * FROM user WHERE email=?");
    $sql->execute([$email]);
    $usuario = $sql->fetch(PDO::FETCH_ASSOC);

    if($usuario && password_verify($senha, $usuario["senha"])){
        $_SESSION['usuario_id'] = $usuario['id'];
        $_SESSION['usuario_nome'] = $usuario['nome'];
        $_SESSION['usuario_nivel'] = $usuario['nivel'];

        $sucesso = "Logado com sucesso!";

        header("Location: ../index.php");
        exit;
    } else{
        $erro = "E-mail ou senha errada!";
    }
}
?>