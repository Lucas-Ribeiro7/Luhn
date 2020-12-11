<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Luhn</title>
</head>
<body>
    <form action="verificar.php" method="POST">
        <label>Numero para verificação do cartão de crédito:</label>
        <input type="text" name="numero">
        
        <input type="submit" value="Verificar">
    </form>
</body>
</html>