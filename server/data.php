<?php
// Inicialize as variáveis
$name = $email = $sexo = $phone = "";
$nameErr = $emailErr = $phoneErr = $sexoErr = "";

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validação do nome
    if (empty($_POST["name"])) {
        $nameErr = "Nome é obrigatório";
    } else {
        $name = test_input($_POST["name"]);
    }

    // Validação do email
    if (empty($_POST["email"])) {
        $emailErr = "Email é obrigatório";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Formato de email inválido";
        }
    }

    // Validação do telefone
    if (empty($_POST["phone"])) {
        $phoneErr = "Telefone é obrigatório";
    } else {
        $phone = $_POST["phone"];
        if (!is_numeric($phone)) {
            $phoneErr = "Telefone deve conter apenas números";
        }
    }

    // Validação do sexo
    if (empty($_POST["sexo"])) {
        $sexoErr = "Sexo é obrigatório";
    } else {
        $sexo = test_input($_POST["sexo"]);
    }
}

// Função para limpar e validar dados
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Exibir os resultados
echo "Nome: " . $name . "<br>";
echo "Email: " . $email . "<br>";
echo "Telefone: " . $phone . "<br>";
echo "Sexo: " . $sexo . "<br>";

// Exibir mensagens de erro, se houver
echo "Mensagens de erro:<br>";
echo $nameErr . "<br>";
echo $emailErr . "<br>";
echo $phoneErr . "<br>";
echo $sexoErr . "<br>";
?>
