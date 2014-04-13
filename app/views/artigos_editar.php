<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar artigo</title>
</head>
<body>
    <h1>Editar artigo</h1>
    
    <form method="post">
        <div>
            <input name="titulo" type="text" placeholder="Título" value="<?php echo $artigo->titulo; ?>">
        </div>
        <div>
            <textarea name="conteudo"><?php echo $artigo->conteudo; ?></textarea>
        </div>
        <input type="hidden" name="id" value="<?php echo $artigo->id; ?>">
        <input type="submit" value="Salvar">
    </form>
        
</body>
</html>
