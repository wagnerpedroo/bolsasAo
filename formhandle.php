<?php

if (isset($_POST['submit'])) {

    include_once('database-conection.php');

    $email = $_POST['emailtxt'];
    $senha = $_POST['senhatxt'];
    $telefone = $_POST['numerotxt'];

    $query = mysqli_query($conexao, "INSERT INTO usuarios(email, senha, telefone) VALUES ('$email', '$senha', '$telefone')");

    echo "cadastro efectuado com sucesso";
}
 