<?php
$name = $email = $sexo = $phone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $phone = $_POST["phone"];
  $phone = intval($phone);
  $sexo = test_input($_POST["sexo"]);

}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo "Nome: " . $name . "<br>";
echo "Email: " . $email . "<br>";
echo "Telefone: " . $phone . "<br>";
echo "Sexo: " . $sexo . "<br>";




?>