<?php

// db.connect só pode ser incluso em outros arquvios ao invés de ser requisitado
if(basename($_SERVER["SCRIPT_NAME"]) === "db.connect.php"){
    header("Location: ../front-end/form_page/");
}

// Adicione os valores do seu banco de dados MySQL aqui
// ******************************************************************************
$host = "";
$dbname = "";
$username = "";
$password = "";

// PDO conexão
try {
    return $pdo = new PDO("mysql:host=$host;dbname=$dbname", "$username", "$password");
}
catch (PDOException $error){
    echo "Erro: " . $error->getMessage();
    die();
}
?>
