<?php
require ("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $senha2 = $_POST["senha2"];

   

    $sql = $conexao->prepare("INSERT INTO user (nome,email,senha,senha2) VALUES (?,?,?,?);");
    $sql->bind_param("ssss", $nome,$email,$senha,$senha2);
    $sql->execute();


    if ($conexao->query($sql) === TRUE) {
        echo "<h2>Cadastro realizado com sucesso!</h2>";
        echo "<p>Redirecionando...</p>";
        header("refresh:2;url=cadastro.html");
    } else {
        echo "<h2 style='color: red;'>Erro ao cadastrar!</h2>";
        echo "<p>" . $conexao->error . "</p>";
        echo "<a href='cadastro.html'>Voltar</a>";
    }
} else {
    header("Location: cadastro.html");
}
?>