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
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
</head>
<body>
    <img src="../assets/woman-8848365_1280-removebg (1).png" alt="Future" class="img">
    
    <div class="content center">
        <!-- <button type="button" id="to_login"> Ir </button> -->
        <h2 class="register_user white"> Cadastro de Usuários </h2>
        <hr class="line-s">
        <form action="../../back-end/form_page/form_B.php" method="POST" class="form cad" id="cad_form">
            
            <input type="text" name="name" id="name_cad" placeholder="Nome" maxlength="255" autocomplete="off" required>

            <input type="email" name="email" id="email_cad" placeholder="E-mail" maxlength="255" required>
        
            <div class="collection">
                <input type="text" name="unique_cod" id="cod_cad" class="duo-l" placeholder="Código Único" maxlength="150" autocomplete="off" required>
            
                <input type="text" name="title" id="title_cad" class="duo-r" placeholder="Título" maxlength="150" required>
            </div>
            
                <input type="password" name="password" id="pass_cad" placeholder="Senha" maxlength="255" required>

            <button type="submit" class="btn-cad">Enviar</button>
            <a class="page" href="./../login_page/index.php">Realizar o Login</a>
        </form>
    </div>
</body>
<script src="./form.script.js"></script>
</html>