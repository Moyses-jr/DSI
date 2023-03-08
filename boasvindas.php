<?php

    session_start();
    if (!isset($_SESSION['usuario'])) {
        header('location:form.php?erro=2');
        die();

    }

    echo 'Seja bem-vindo ao site <br>';
?>

<p>
    <a href="logout.php">Sair</a>
</p>