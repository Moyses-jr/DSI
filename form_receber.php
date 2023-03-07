<?php

    # form_receber.php
    $usuario = $_POST['usuario'] ?? false;
    $senha = $_POST['senha'] ?? false;

    if ($usuario == 'moyses' && $senha == '123') {
        session_start();
        $_SESSION['usuario'] = $usuario;
        header('location:boasvindas.php');
        die;
    } else {
        header('location:form.php?erro=1');
        // echo '<p>Autenticado com sucesso</p>';
        die;   
    }

?>