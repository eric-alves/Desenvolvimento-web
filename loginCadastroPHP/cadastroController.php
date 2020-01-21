<?php
session_start();
include('verifica_login.php');
include('conexao.php');

//O comando EMPTY verifica se uma variavel esta vazia
if(empty($_POST['name'])) {
    header('Location: form.php');
    exit();
}

//Abaixo atribuímos os valores provenientes do 
//formulário pelo método POST
$nome = $_POST['name']; 
$apelido = $_POST['nickname'];
$cpf = $_POST['cpf'];
$sexo = $_POST['gender'];
$aniversario = $_POST['birth'];
$email = $_POST['email'];
$estado = $_POST['country'];
$cidade = $_POST['city'];
$cep = $_POST['zip'];
$tel = $_POST['tel'];
$cel = $_POST['cel'];
$usuario = $_POST['username'];
$senha = $_POST['password'];
//$cep = 12312312;
//$senha = 123123;

$string_sql = "INSERT INTO user(user_id, user_name, user_nickname, user_cpf, user_gender, 
                user_birth, user_country, user_email, user_city, user_cep, user_tel, 
                user_cel, user_username, user_password)
                VALUES (null,'{$nome}', '{$apelido}', '{$cpf}','{$sexo}','{$aniversario}',
                '{$estado}','{$email}','{$cidade}','{$cep}','{$tel}','{$cel}',
                '{$usuario}','{$senha}')";
$insert_member_res = mysqli_query($conexao, $string_sql);

//verifica se foi afetada alguma linha, 
//nesse caso inserida alguma linha
if(mysqli_affected_rows($conexao)>0){ 
    echo "<p>Usuário Registrado</p>";
    //Apenas um link para retornar para o formulário de cadastro
    echo '<a href="listar.php">Voltar para formulário de cadastro</a>'; 
} else {
    echo "Erro, não foi possível inserir no banco de dados";
}
    //fecha conexão com banco de dados
    mysqli_close($conexao); 
?>