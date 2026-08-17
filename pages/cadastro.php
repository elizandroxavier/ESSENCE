<?php
require_once 'conexao.php';

$erro = "";
$sucesso = "";

if($_SERVER["REQUEST_METHOD"] === "POST"){

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirmar_senha = $_POST['confirmar_senha'];

    if($senha !== $confirmar_senha){
        $erro = "As senhas não coincidem!";
    } else {
        $sql = $pdo->prepare("SELECT id FROM user WHERE email=?");
        $sql->execute([$email]);

        if($sql->rowCount() > 0){
            $erro = "Esse e-mail já existe";
        } else {
            $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

            $sql = $pdo->prepare("INSERT INTO user (nome, email, senha, nivel) VALUES(?,?,?,'comum')");
            $sql->execute([$nome, $email, $senha_hash]);

            $sucesso = "Cadastrado com sucesso!";

            header("Location: ../index.php");
            exit;
        }
    }
}
?>