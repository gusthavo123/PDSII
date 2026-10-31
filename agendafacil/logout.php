<?php
require __DIR__ . '/app/bootstrap.php';

if (!LOGIN_OBRIGATORIO) {
    redirecionar('index.php');
}

if (eh_post()) {
    csrf_validar();
    $_SESSION = [];
    session_destroy();
}

redirecionar('login.php');
