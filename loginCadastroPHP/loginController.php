<?php
session_start();
include('conexao.php');

//O comando EMPTY verifica se uma variavel esta vazia
if(empty($_POST['username']) || empty($_POST['password'])){
    header('Location: index.php');
    exit();
}

//O comando MYSQLI_REAL_ESCAPE_STRING previne contra
//Ataques de SQL INJECTION
$usuario = mysqli_real_escape_string($conexao, $_POST['username']);
$senha = mysqli_real_escape_string($conexao, $_POST['password']);

//Variavel para armazenar nosso codigo SQL
$query = "select user_id, user_name, user_email from user where user_username = '{$usuario}' and user_password = '{$senha}';";

//O comando MYSQLI_QUERY executa a nossa pesquisa no banco
//A variavel resultado recebe os valores retornados na pesquisa
$result = mysqli_query($conexao, $query) or die ('Erro consulta login!!');

//Contando o numero de tuplas retornadas pela consulta
$row = mysqli_num_rows($result);

if($row == 1){
    while($res = mysqli_fetch_array($result)){
        $id_usuario = $res['user_id'];
        $nome_usuario = $res['user_name'];
        $email_usuario = $res['user_email'];
    }

    $_SESSION['user_id'] = $id_usuario;
    $_SESSION['user_name'] = $nome_usuario;
    $_SESSION['user_email'] = $email_usuario;
    header('Location: listar.php');
    exit();
} else{
    header('Location: index.php');
    exit();
}
?>