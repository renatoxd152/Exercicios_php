<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Recebimento de arquivos</title>
</head>
<body>
    <form method = "POST" action = "processar.php" enctype="multipart/form-data">
        <input type="file" name="arquivo[]" accept=".pdf,.jpeg,.png,.txt" multiple>
        <br><br>
        <button>Enviar</button>
    </form>
</body>
</html>