<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){

    require "../db.connect.php";

    $email = $_POST["email"];
    $password = $_POST["pass"];

    if($email == null || $password == null){
        header("Location: ../../front-end/login_page/");
        die();
    }

    // Validação de Login
    $find = $pdo->prepare("SELECT in_user, name_user FROM users WHERE (email_user = :mail AND password_user = :pass);");
    $find->bindParam(':mail', $email);
    $find->bindParam(':pass', $password);
    $find->execute();
    $result = $find->fetchAll();
    
    if(empty($result[0])){
        header("Location: ../../front-end/login_page/index.php?f");
        die();
    }

    // Login validado
    session_start();
    $_SESSION["login"] = true;

    header("Location: ../../front-end/private_page/private.php");

}
else {
    header("Location: ../../front-end/login_page/index.php");
    die();
}


?>