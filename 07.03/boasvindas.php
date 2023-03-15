<?php

    session_start();
    if (!isset($_SESSION['usuario'])) {
        header('location:form.php?erro=2');
        die();

    }

    echo 'Seja bem-vindo ao site <br>';
?>

<p>
    <?php
        if ($_SESSION['admin']) {
            ?>
            <a href="../usuario.php">Usuários</a>
            <?php
        }
    ?>
    <br>
    <a href="logout.php">Sair</a>
</p>