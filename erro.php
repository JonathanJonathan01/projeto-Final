<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Erro</title>
</head>

<style>
    div{
        margin-top: 100px;
        border-radius: 15px;
        text-align: center;
    }
    #interna{
        width: 300px;
        height: 200px;
        margin-left: 40%;
    }
</style>

<body>
    <div class="container">
        <div id="interna">
        <p>Usuario ou senha incorretos</p>
         <a href="index.php">Volte a tela de login!</a>
        </div>
       
    </div>
    
    
</body>
</html>