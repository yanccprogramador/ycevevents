<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Login</title>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="shortcut icon" href="img/ycevents.png">
    </head>
    <body>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
       <div class="row">
           <div class="container">
               <div class="col s12 m4 l3"></div>
               <div class="col s12 m7 l6">
                   <img src="img/ycevents.png" class="brand-logo img-circle" height="60" width="60"/>
                   <form method="post" action="/entrar">
                       <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                       <input type="text" placeholder="Login" name="login">
                       <input type="password" placeholder="senha" name="senha">
                       <input type="submit" name="logar" value="logar" class="btn waves-effect waves-green">
                   </form>
                   Se você não tem cadastro e deseja ter, nos mande um em <a href="ycprogramacoes.herokuapp.com/contato.jsf">nosso site</a>
               </div>
           </div>

       </div>

    </body>
</html>
