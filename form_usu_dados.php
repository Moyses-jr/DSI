<?php

    require('pdo.inc.php');

    $usuario = $_POST['nome'] ?? false;
    $senha = $_POST['senha'] ?? false;
    $ativo = isSet($_POST['ativo']) ?? false;
    $adm = isSet($_POST['adm']) ?? false;

    $sql = $pdo->prepare('INSERT INTO usuarios VALUES ("", ? , ?, ? , ?)');

    $sql -> bindParam(1, $usuario);
    $sql -> bindParam(2, $senha );
    $sql -> bindParam(3, $ativo );
    $sql -> bindParam(4, $adm );

    $sql -> execute();


?>