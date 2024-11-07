<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS externo (Fontes Google) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,600;1,600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../global.css">
    <link rel="stylesheet" href="./styles.css">
    <title>Login</title>
</head>
<body>
    <img src="../assets/woman-8848365_1280-removebg (1).png" alt="" class="img">
    <!-- <button type="button" id="to_form"> Voltar </button> -->
     <div class="content center">
        <h2 class="white t-mid">Olá! <br>Bem Vindo</h2>
        <form action="../../back-end/login_page/login_B.php" method="post" class="form login" id="login_form">
     
            <div class="inputs">
                <input type="email" name="email" id="email" placeholder="E-mail" autocomplete="off">
                <img class="svg" src="../assets/svgs/email-svgrepo-com.svg"></img>
            </div>

            <div class="inputs">
                <input type="password" name="pass" id="pass" placeholder="Senha">
                <img id="eye" class="svg" src="../assets/svgs/eye-off-svgrepo-com.svg"></img>
            </div>
     
             <button type="submit" class="btn-login">Login</button>
             <a class="cad" href="./../form_page/index.php">Realizar o Cadastro de Usuário</a>
        </form>
     </div>
</body>
<script src="./login.script.js"></script>
</html>