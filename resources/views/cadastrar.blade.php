<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Cadastre novo evento</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

    <link rel="shortcut icon" href="img/ycevents.png">
</head>
<body>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

<nav>
    <div class="nav-wrapper blue-grey">
        <img src="img/ycevents.png" class="brand-logo img-circle" height="60" width="60"/>
        <ul id="nav-mobile" class="right">
            <li><a href="/sair">Deslogar</a></li>
        </ul>
    </div>
</nav>
<div class="row">
    <div class="col s12 m12 l2"><br/><br/></div>
    <div class="col s12 m8 l8" >
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <form method="post" action="/newEvento">

            <input type="text"  required="true" placeholder="nome" name="name"/>
            <textarea required="true" placeholder="Descrição" name="descricao"></textarea>
            <input type="date" required="true" placeholder="Dia do evento aaaa-mm-dd" name="data"/>
            <input type="time" required="true" placeholder="Hora do evento h:m:s" name="horas"/>
            <input type="hidden" name="owner" value="{{$dono}}"/>
            <input type="submit" class="btn green waves-effect waves-light" value="Criar"/>
        </form>
    </div>
</div>
</div>
</div>
<footer class="page-footer blue-grey">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Desenvolvido por:</h5>
                <p class="grey-text text-lighten-4">Yan Christoffer. Full stack developer em Yan Christoffer Programações inc.</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Para saber mais sobre acesse</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="ycprogramacoes.herokuapp.com">Nosso site</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright blue darken-4">
        <div class="container">
            © 2017 Copyright Text

        </div>
    </div>
</footer>
</body>
</html>

