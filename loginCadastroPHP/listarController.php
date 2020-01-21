<?php
session_start();
include('verifica_login.php');
include('conexao.php');

$string_sql = "SELECT * FROM user";
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