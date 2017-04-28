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
</head>
<body>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

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
  <h1>Painel Administrativo</h1>
        <table class="responsive-table highlight bordered">
            <thead>
            <tr><td>Nome do Evento</td><td>Descrição</td><td>Data Evento </td></tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $eventos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $events): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($events->name); ?></td>
                    <td><?php echo e($events->descricao); ?></td>
                    <td><?php echo e($events->data); ?></td>
                    <td><a href="/<?php echo e($events->id); ?>/del/<?php echo e($events->owner); ?>" class="btn green waves-effect waves-light">Excluir</a></td>
                    <td><a href="/<?php echo e($events->id); ?>/gerar/<?php echo e($events->owner); ?>" class="btn green waves-effect waves-light">Gerar Lista</a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>

        <form method="get" action="/cadastre/<?php echo e($dono); ?>">
            <input type="submit" value="Cadastre" class="btn green waves-effect waves-light">
        </form>
    </div>
</div>

</div>
</div>

</body>
</html>

