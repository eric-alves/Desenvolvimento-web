<?php
session_start();
//unset($_SESSION['NOME_SESSAO']);
session_destroy();
header('Location: index.php');
exit();
?>