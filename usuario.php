<?php

    require('pdo.inc.php');

    $sql = $pdo -> query('SELECT * FROM usuarios');


    // $dados = $sql->fetchAll(PDO::FETCH_ASSOC);

    while ( $dados = $sql -> fetch(PDO::FETCH_ASSOC)){
        echo "<p>{$dados['username']}</p>";
    };

    // $usuarios = $sql->fetchAll(PDO::FETCH_ASSOC);
    // foreach ($usuarios as $dados) {
    //     echo "<p>{$dados['username']}</p>";
    // };

?>

<form action="./usuario_adicionar.php" method="post">
    <p><input type="text" name="username" id=""></p>
    <p><input type="password" name="password" id=""></p>
    <p>
        <label for="">
            <input type="checkbox" name="admin" id=""> Admin
        </label>
    </p>
    <p><input type="submit" value="Gravar"></p>
</form>