<?php
    # form_receber.php

    $senha_crypto = '$2y$11$0wzKnss2K4zSpn75Azv8R.be6zBD5o9M78gfHZ8aXg81k8U8gIzDa';

    $usuario = $_POST['usuario'] ?? false;
    $senha = $_POST['senha'] ?? false;

    if ($usuario == 'moyses' && password_verify($senha, $senha_crypto)) {
        session_start();
        $_SESSION['usuario'] = $usuario;
        header('location:boasvindas.php');
        die();
    } else {
        header('location:form.php?erro=1');
        // echo '<p>Autenticado com sucesso</p>';
        die();   
    }

?>