<?php
include("php/Model.php");
$model = new Model();
$model->teste();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebDev Easy Creator 5 - PHP Site IDE</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
</head>
<body>
    <form method="post">
        <input type="submit" value="Criar" name="submit">
    </form>
</body>
</html>