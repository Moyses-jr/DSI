<?php

    require('pdo.inc.php');

    $sql = $pdo -> prepare('select * 
                             from usuarios');
    $sql -> execute();

    $dados = $sql->fetchAll(PDO::FETCH_ASSOC);

    while ( $dados = $sql -> fetch(PDO::FETCH_ASSOC)){
        echo "<p>{$dados['username']}</p>";
    };

    // $usuarios = $sql->fetchAll(PDO::FETCH_ASSOC);
    // foreach ($usuarios as $dados) {
    //     echo "<p>{$dados['username']}</p>";
    // };

?>

<form action="./form_usu_dados.php" method="post">
    <p><input type="text" name="nome" id=""></p>
    <p><input type="password" name="senha" id=""></p>
    <p>
        <label for="">
            <input type="checkbox" name="ativo" id=""> Ativo
        </label>
        <label for="">
            <input type="checkbox" name="adm" id=""> Admin
        </label>
    </p>
    <p><input type="submit" value="Gravar"></p>
</form>