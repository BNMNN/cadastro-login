<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>CRUD</title>
    </head>
    <body>
        <h1>Cadastrar</h1>
        <?php
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
        ?>
        <form method="POST" action="config.php">
            <label>Nome: </label>
            <input type="text" name="nome">
            <br><br>
            <label>E-mail: </label>
            <input type="email" name="email">
            <br><br>
            <label>Senha: </label>
            <input type="password" name="senha">
            <br><br>
            <input type="submit" value="Cadastrar">
        </form>
    </body>
</html>