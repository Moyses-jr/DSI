<?php

    require('./models/Model.php');
    require('./models/Produto.php');

    require('./twig.inc.php');
    // require('./models/Usuario.php');

    $prod = new Produto();
    $resultado = $prod->getAll();

    echo $twig->render('produtos.html',[
        'produtos' => $resultado
    ]);

    // var_dump($resultado);

    // $usu = new Usuario();
    // $usuario = $prod->getById(1);
    // var_dump($usuario);

?>