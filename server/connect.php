<?php

include 'data.php';


$servername = "localhost";
$username = "root";
$password = "corrida28";
$database = 'form';

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "INSERT INTO usuario (nome, email, telefone, sexo) VALUES ( '$name', '$email', '$phone', '$sexo')";

if (mysqli_query($conn, $sql)) {
    echo "Dados inseridos com sucesso";
} else {
    echo "Erro na inserção de dados: " . mysqli_error($conn);
}
?>

