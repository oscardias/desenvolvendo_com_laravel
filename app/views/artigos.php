<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lista de Artigos</title>
</head>
<body>
    <h1>Artigos</h1>
    <a href="artigos/inserir" title="Novo">Novo artigo</a>
    <hr>
    
    <?php if($artigos->count()) : ?>
        <?php foreach ($artigos as $artigo) : ?>
            <h2><?php echo $artigo->titulo; ?></h2>
            <small>
                <a href="artigos/editar/<?php echo $artigo->id; ?>" title="Editar">Editar</a>
                |
                <a href="artigos/remover/<?php echo $artigo->id; ?>" title="Remover">Remover</a>
            </small>
            <p><?php echo $artigo->conteudo; ?></p>
            <hr>
        <?php endforeach; ?>
    <?php else : ?>    
        <h2>Nenhum artigo encontrado.</h2>
    <?php endif; ?>
        
</body>
</html>
