<?php
    session_start();

    $validation = $_SESSION["login"];

    if($validation !== true){
        header("Location: ../../back-end/logout.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Privada</title>
</head>
<body>
    Logado!
</body>
<script src="script.js"></script>
</html>