<?php
    # form_receber.php
    require('pdo.inc.php');

    $senha_crypto = '$2y$11$0wzKnss2K4zSpn75Azv8R.be6zBD5o9M78gfHZ8aXg81k8U8gIzDa';

    $usuario = $_POST['usuario'] ?? false;
    $senha = $_POST['senha'] ?? false;

    // Prepara a consulta de maniera robusta para evitar InjectSQL
    $sql = $pdo->prepare('select * 
                            from usuarios 
                           where username = ?
                             and active = 1');

    // Anexa a variável $usuario no parametro 1 = '?'                           
    $sql -> bindParam(1, $usuario, PDO::PARAM_STR);

    $sql -> execute();

    $dados = $sql->fetch(PDO::FETCH_ASSOC);


    if ($sql -> rowCount() == 1 && 
       password_verify($senha, $dados['password'])) {
        session_start();
        $_SESSION['usuario'] = $usuario;
        $_SESSION['admin'] = $dados['admin'];
        header('location:07.03/boasvindas.php');
        die();
    } else {
        header('location:07.03/form.php?erro=1');
        // echo '<p>Autenticado com sucesso</p>';
        die();   
    }
?>