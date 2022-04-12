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
        if
    <?php    
    echo '<.!DOCTYPE html><br>
                                <.html lang="pt-br"><br>
                                <.head><br>
                                    <.meta charset="UTF-8"><br>
                                    <.meta http-equiv="X-UA-Compatible" content="IE=edge"><br>
                                    <.meta name="viewport" content="width=device-width, initial-scale=1.0"><br>
                                    <.title><input type="text" name="title"><./title><br>
                                    
                                <./head><br>
                                <.body><br><br><br>
                                    <label>Titulo</label>
                                    <h1><input type="text" name="h1"><br><br></h1>
                                <./body>
                                <./html>';
        ?>
        
        
        <input onclick="update()" type="submit" value="Criar" name="submit">
    </form>

    <iframe id="frame" style="border:1px solid black;" src="novophp.php" frameborder="0"></iframe>
    <script src="js/script.js"></script>
</body>
</html>