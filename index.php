<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>CRUD Bando de Dados</title>
    </head>
    <body>
        <h1>Cadastrar Usuário</h1>
        
        <?php
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset ($_SESSION['msg']);
            }
        
        ?>
        <form action="processa.php" method="POST">
            <label>Nome:</label>
            <input type="text" name="nome" placeholder="Digite o Nome Completo"><br><br>

            <label>Email:</label>
            <input type="email" name="email" placeholder="Digite Seu Email"><br><br>

            <input type="submit" value="Cadastrar">
        </form>
    </body>

</html>