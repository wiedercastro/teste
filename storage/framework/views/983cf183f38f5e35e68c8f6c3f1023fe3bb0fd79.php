<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Wieder Teste</title>
</head>
<body>
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light mb-2 d-flex justify-content-between" style="background-color: #e9ecef;">
        <a class="navbar-brand" href="<?php echo e(route('listar_veiculos')); ?>">Home</a>
        <?php if(auth()->guard()->check()): ?>
        <a href="/sair" class="text-danger">Sair</a>
        <?php endif; ?>

        <?php if(auth()->guard()->guest()): ?>
        <a href="/entrar">Entrar</a>
        <?php endif; ?>
    </nav>
        <div>
            <h1><?php echo $__env->yieldContent('cabecalho'); ?></h1>
        </div>

        <?php echo $__env->yieldContent('conteudo'); ?>

    </div>

    </body>
</html><?php /**PATH /home/wieder/wieder/resources/views/layout.blade.php ENDPATH**/ ?>