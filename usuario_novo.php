<?php

    require('./twig.inc.php');
    require('./pdo.inc.php');

    $sql = $pdo->query('SELECT * FROM usuarios 
                         WHERE active = 1');
    $usuarios = $sql->fetchAll(PDO::FETCH_ASSOC);

    // print_r($usuarios);

    echo $twig->render('_usuarios.html', [
        'usu' => $usuarios,
    ]);
?>