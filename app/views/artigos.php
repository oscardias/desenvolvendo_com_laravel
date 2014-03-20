<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lista de Artigos</title>
</head>
<body>
    <h1>Artigos</h1>
    
    <?php if($artigos->count()) : ?>
        <?php foreach ($artigos as $artigo) : ?>
            <h2><?php echo $artigo->titulo; ?></h2>
            <p><?php echo $artigo->conteudo; ?></p>
        <?php endforeach; ?>
    <?php else : ?>    
        <h2>Nenhum artigo encontrado.</h2>
    <?php endif; ?>
        
</body>
</html>
