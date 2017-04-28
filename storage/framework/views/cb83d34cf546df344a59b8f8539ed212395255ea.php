<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">
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
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

</head>
<body>
<nav>
    <div class="nav-wrapper blue-grey">
        <ul id="nav-mobile" class="right">
            <li><a href="/sair">Deslogar</a></li>
        </ul>
    </div>
</nav>
<div class="row">
    <div class="col s12 m12 l2"><br/><br/></div>
    <div class="col s12 m8 l8" >
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        <form method="post" action="/newEvento">

            <input type="text"  required="true" placeholder="nome" name="name"/>
            <textarea required="true" placeholder="Descrição" name="descricao"></textarea>
            <input type="date" required="true" placeholder="Dia do evento aaaa-mm-dd" name="data"/>
            <input type="time" required="true" placeholder="Hora do evento h:m:s" name="horas"/>
            <input type="hidden" name="owner" value="<?php echo e($dono); ?>"/>
            <input type="submit" class="btn green waves-effect waves-light" value="Criar"/>
        </form>
    </div>
</div>
</div>
</div>

</body>
</html>

