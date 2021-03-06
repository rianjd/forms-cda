<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">

        <script src="js/core.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/jquery.js"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">



        <title>Formulario</title>

    </head>
<body >
    <nav class="navbar navbar-dark navbar-expand-lg" style="margin-bottom: 1em;">
        <a class="navbar-brand" href="#">
            <img class="logomarca" src="images/logo-branco.png" width="130">
            <a class="navbar-brand" href="#"></a>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav ">
              <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/core">Usuario Core </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/chat">Chat</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="/dj">DJ PDV</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/email">Email</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/chamado">Chamados</a>
              </li>
            </ul>

        </div>

    </nav>

    @yield('conteudo')
    <!--CONTEUDO-->


</body>
</html>
