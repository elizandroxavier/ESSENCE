<?php
require ("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome_login"];
    $email = $_POST["email_login"];
    $senha = $_POST["senha_login"];


    $sql = "SELECT * FROM user WHERE email='$email' AND senha='$senha'";

    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        echo "Login realizado com sucesso!";
    } else {
        echo "Email ou senha incorretos!";
    }

} else {
    header("Location: cadastro.html");
}
?>