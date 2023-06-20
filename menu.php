<!doctype html>

<html lang="pt-br">

<head>
    <title> pagina de exemplo de DOM </title>
    <meta charset="utf-8">
    <meta name="author" content="Jonathan">
    <meta name="description" content="descrição bacanuda">
    <meta name="keywords" content="html5, tecnologia">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>

    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
            <img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            Bootstrap
            </a>
        </div>
        </nav>

    <div id="principal" class="container">

        

        <header class="hero" >
            <div class="top-bar">
                <p id="paragrafo">olá, </p>
                
            </div>          
           
            
            <div id="card" class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Programador web</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                
            </div>
            </div>
                 

        </header>

        <main>

            <section class="content-section">
                <div class="card card-1">
                    <img src="imagens/card_01.png" alt="">
                    <p>Seletores</p>
                </div>

                <div class="card card-2">
                    <img src="imagens/card_02.jpg" alt="">
                    <p>Posicionamento</p>
                </div>

                <div class="card card-3">
                    <img src="imagens/card_03.jpg" alt="">
                    <p>Fontes</p>
                </div>
            </section>

            <section class="content-section">
                <article>
                    <header class="content-header">
                        <h2>Titulo do article</h2>
                    </header>
                    <p>Paragrafo 1</p>
                    <p>Paragrafo 2</p>
                </article>
            </section>

        </main>

        <footer class="rodape">

            <p>Copyright &copy; 2023</p>

        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
   
     

</body>

</html>