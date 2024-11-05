<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
</head>
<body>
    <img src="../assets/woman-8848365_1280-removebg (1).png" alt="Future" class="img">
    
    <div class="content center">
        <!-- <button type="button" id="to_login"> Ir </button> -->
        <h2 class="register_user white"> Cadastro de Usuários </h2>
        <hr class="line-s">
        <form action="../../back-end/form_page/form_B.php" method="POST" class="form">
            <fieldset>
                <legend>Name</legend>
                <input type="text" name="name" placeholder="Teste">
            </fieldset>
            
            <fieldset >
                <legend>E-mail</legend>
                <input type="text" name="email">
            </fieldset>
        
            <div class="collection">
                <fieldset>
                    <legend>Código</legend>
                    <input type="number" name="unique_cod">
                </fieldset>
                
                <fieldset>
                    <legend>Titulo</legend>
                    <input type="text" name="title">
                </fieldset>
            </div>
            
            <fieldset>
                <legend>Senha</legend>
                <input type="password" name="password">
            </fieldset>

            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
<script src="form.script.js"></script>
</html>