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

            .botao{
                width:30%;
                margin-left:140px;
                color:#fff;
                background-color: #3498db;
                border: 2px solid #3498db;
                border-radius:5px;
                cursor:pointer;
            }

            .botao:hover{
                background-color:#1E90FF;
            }

            p{
                position: absolute;
                color:green;
                margin-top:330px;
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

            <input type="submit" value="Cadastrar" class="botao">
        </form>
    </body>

</html>