<?php

    $erro = $_GET['erro'] ?? false;


    if ($erro == 2) {
        echo 'Usuário não está autenticado';

        // header('location:form.php');
    } else if($erro == 1) {
        echo 'Usuário ou senha incorretos';

        // header('location:from.php');
    }

    // if (isset($_GET['erro'])) {
    //     echo 'Inválido senha';
    // }

?>

<form action="form_receber.php" method="post">
    <div>
        <input type="text" name="usuario" placeholder="Usuário">
    </div>
    <div>
        <input type="password" name="senha" placeholder="Senha">
    </div>
    <div>
        <input type="submit" value="Acessar">
    </div>
</form>