<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Enviar Imagem</h1>
<form action="processo_upload.php" method="post" enctype="multipart/form-data">
    <label>Selcione uma imagem:</label>
    <input type="file" name="arquivo" required><br><br>
    <input type="submit" value="Enviar">
</form>
<br>
<a href="index.php">Voltar para a galeria</a>
</body>
</html>