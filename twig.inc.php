<?php

    require('./vendor/autoload.php');


    $loader = new \Twig\Loader\FilesystemLoader('views');

    $twig = new \Twig\Environment($loader);

    // echo $twig->render('_base.html');
    // var_dump($loader)

?>