<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Consultas</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="img/ycevents.png">
</head>
<body>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

<nav>
    <div class="nav-wrapper blue-grey">
        <img src="img/ycevents.png" class="brand-logo img-circle" height="60" width="60"/>
             <ul id="nav-mobile" class="right">
                 <li><a href="/logar">Logar</a></li>
             </ul>
         </div>
     </nav>
<div class="row">
    <div class="col s12 m8 l3" ><br/><br/><br/></div>
    <div class="col s12 m8 l6" >

        <table class="responsive-table highlight bordered">
            <thead>
            <tr><td>Nome do Evento</td><td>Descrição</td><td>Data Evento </td></tr>
            </thead>
            <tbody>
             @foreach($eventos as $events)
               <tr>
                   <td>{{$events->name}}</td>
                   <td>{{$events->descricao}}</td>
                   <td>{{$events->data}}</td>
                   <td><a href="/{{$events->id}}/part" class="btn green waves-effect waves-light">Participar</a></td>
               </tr>
             @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="row">
<footer class="page-footer blue-grey" >
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
</div>
</body>
</html>

