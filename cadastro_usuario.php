<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Cadastro</title>
</head>

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

<body>

<div class="container" style="width: 400px; margin-top: 100px">
<form action="_insert_usuario.php" method="post" id="formulario">
      <h1 class="">Cadastro</h1>
      <div class="mb-3">
        <label class="form-label">Nome do usuario</label>
        <input type="text" class="form-control" placeholder="Nome do usuario" name="nomeUsuario" required autocomplete="off">
        </div>
      <div class="mb-3">
       <div class="mb-3">
         <label for="" class="form-label">Email</label>
         <input type="email" class="form-control" name="email" placeholder="abc@mail.com" required autocomplete="off">
        </div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Senha</label>
        <input type="text" class="form-control" placeholder="Senha" name="Senha" required autocomplete="off" id="senha">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Repita a senha</label>
        <input type="text" class="form-control" placeholder="Senha" name="RepetirSenha" required autocomplete="off" id="RepetirSenha"oninput="validarSenha(this)" >
      </div>
      <div style="text-align: right; " id="botao" class="d-flex justify-content-between">
      <button type="submit" class="btn btn-success sm">Cadastrar</button>
      <button type="" class="btn btn-danger sm"><a href="login.php" style="text-decoration: none; color: white;">Voltar ao Login</a></button>
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

<script>
   

    function validarSenha(input){
    if(input.value != document.getElementById("senha").value){
        input.setCustomValidity('Senha não é igual, favor repita!');
    }else{
        input.setCustomValidity('');
    }
}    
</script>


</body>
</html>