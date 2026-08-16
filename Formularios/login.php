<?php
require "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];


    $sql = $conn->prepare("SELECT * FROM user WHERE email = ? AND senha = ?");
    $sql->bind_param("ss",$email,$senha);
    $sql->execute();

    $resultado = $sql->get_result();

    if (mysqli_num_rows($resultado) > 0) {
        echo "Login realizado com sucesso!";
    } else {
        echo "Email ou senha incorretos!";
    }

} else {
    header("Location: cadastro.html");
}
header("Location: ../index.html");

?>