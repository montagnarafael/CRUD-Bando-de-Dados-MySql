<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <title>CRUD Bando de Dados</title>  
    </head>
    <body>

        <style>

            body{
                margin:0;
                padding:0;
            }

            h1{
                color: black;
                display:flex;
                justify-content:center;
                font-family: arial, sans-serif;
                
            }

            .form{
                position:absolute;
                display:flex;
                flex-direction:column;
                width:30%;
                justify-content:center;
                z-index: 1;
                margin-top:-315px;
                margin-left:460px;
                font-family: arial, sans-serif;
            }

            .fundoFormulario{
                background-color:#d3d3d3;
                width:450px;
                height:400px;
                z-index: 0;
                margin-left:440px;
                border-radius:8px;
            }

          
            p{
                position: absolute;
                color:green;
                margin-top:350px;
                margin-left:560px;
                z-index: 2;
                
            }

        </style>

            
        <h1>Cadastrar Usuário</h1>
        
        <?php
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset ($_SESSION['msg']);
            }
        
        ?>

            <div class="fundoFormulario"></div>

        <form action="processa.php" method="POST" class="form">
            <label>Nome:</label> <br>
            <input type="text" name="nome" placeholder="Digite o Nome Completo"><br><br>

            <label>Email:</label> <br>
            <input type="email" name="email" placeholder="Digite Seu Email"><br><br>

            <input type="submit" value="Cadastrar" class="btn btn-success">
        </form>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    </body>

</html>