<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('DB', 'bspage');
define('SENHA', '');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Conexão com o banco falhou!!!');
?>