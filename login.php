<?php 

include 'conexao.php';

if(isset($_POST['Usuario']) || isset($_POST['senha'])){

    if(strlen($_POST['Usuario']) == 0){
        echo 'Preencha seu usuario!';
    }elseif(strlen($_POST['senha']) == 0){
        echo 'preencha sua senha!';
    }else{
        $nome = $conexao->real_escape_string($_POST['Usuario']);
        $senha = $conexao->real_escape_string($_POST['senha']);

        $senhaCodi = sha1($senha);
       
        $sql_code = "SELECT * FROM usuarios WHERE nome='$nome' AND senha= '$senhaCodi'";

        $sql_query = $conexao->query($sql_code) or die("falha na conexão do código SQL: ".$mysqli->error);

        $quantidade = $sql_query->num_rows;
     
        if($quantidade == 1){
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['id_usuarios'] = $usuario['id_usuario'];
            $_SESSION['nome'] = $usuario['nome'];

            header("location: painel_usuario.php");

        }else{
            //header("location: erro.php");
            echo '<script>alert(\'usuario ou senha incorretos!\')</script>';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
     <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Login
    </title>
    <style>
        #formulario{
            width: 400px;
            align-items: center;
            justify-content: center;
            margin-top: 100px;
            border-radius: 15px;
            border: 2px solid #f3f3f3;
            padding: 10px;
            -webkit-box-shadow: 10px 10px 25px -4px rgba(0,0,0,0.68);
            -moz-box-shadow: 10px 10px 25px -4px rgba(0,0,0,0.68);
            box-shadow: 10px 10px 25px -4px rgba(0,0,0,0.68);
        }
    </style>
</head>
<body>
<div class="container" id="formulario">
<form action="" method="post">
    <h2>Login Usuario</h2>
    <div class="mb-3">
      <label for="" class="form-label">Nome</label>
      <input type="text" name="Usuario" id="" class="form-control" placeholder="Usuario" autocomplete="off" required>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Senha</label>
      <input type="Password" name="senha" id="" class="form-control" placeholder="Senha" autocomplete="off" required>
    </div>
    <div style="text-align: right;" class="mb-3 d-flex justify-content-between">
        <p>Ainda não é cadastrado? <br>
        <button class="btn btn-sm bg-primary"><a href="cadastro_usuario.php" style="text-decoration: none; color:aliceblue">Cadastre-se</a></button></p>

        <button type="submit" class="btn btn-sm btn-success" style="margin-top:5px; height: 50px;" >Entrar</button>
    </div>
    
</form>
</div>



<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>
</html>