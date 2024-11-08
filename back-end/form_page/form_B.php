<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){

    require "../db.connect.php";

    // Variáveis de requisição
    $name =         $_POST['name'];
    $email =        $_POST['email'];
    $code =         $_POST['unique_cod'];
    $title =        $_POST['title'];
    $password =     $_POST['password'];


    // Consome a API de busca do campo "title"
    $api = "https://jsonplaceholder.typicode.com/posts/1";

    try {
        $result = file_get_contents($api);
        $data = json_decode($result, true);
    } catch (Error $error) {
        throw new Error("Erro de requisição da API");
        die();
    }

    // Validação de usuário existente no banco
    $query = $pdo->prepare("SELECT in_user FROM users WHERE email_user = :mail;");
    $query->bindParam(':mail', $email);
    $query->execute();
    $copy = $query->fetchAll();

    if(!empty($copy[0])){

        header("Location: ../../front-end/form_page/index.php?duplicate");
        die();
    }
    
    // Insert no banco de usuários
    $insert = $pdo->prepare("INSERT INTO users (name_user, email_user, code_user, title_user, password_user) VALUES (:name, :email, :code, :title, :pass);");
    $insert->bindParam('name', $name);
    $insert->bindParam('email', $email);
    $insert->bindParam('code', $code);
    $insert->bindParam('title', $data["title"]);
    $insert->bindParam('pass', $password);
    $insert->execute();
    
    header("Location: ../../front-end/form_page/index.php?cad=true");

}
else {
    header("Location: ../../front-end/form_page/");
}

?>