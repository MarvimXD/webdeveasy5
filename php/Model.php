<?php


    Class Model {
        private $host = "localhost";
        private $user = "root";
        private $pass = "";
        private $db = "webdev";
        private $conexao;

        public function __construc() {
            try {

                $this->conexao = mysqli_connect($this->host, $this->user, $this->pass, $this->db);

            } catch (Exception $e) {
                echo "Nao conectou!";
            }
        }


        public function teste() {
            if(isset($_POST['submit'])) {
                $conteudo = '<!DOCTYPE html>
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
                                    <h1>Teste</h1>
                                </body>
                                </html>';
                                
                file_put_contents('novophp.php', $conteudo);
                header('Location: novophp.php');
                
            }
        }
    }