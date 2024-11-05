<?php
// Destroi a session do login
session_start();
session_destroy();
header("Location: ../front-end/login_page/");
?>