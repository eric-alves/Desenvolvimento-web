<?php
    session_start();
    include('verifica_login.php');
    include('conexao.php');

    $string_sql = "SELECT * FROM user";
    $users = mysqli_query($conexao, $string_sql);

    //fecha conexão com banco de dados
    mysqli_close($conexao); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Usuários</title>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/util.js"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/05c9ea944b.js" crossorigin="anonymous"></script>
</head>
<body>
    
    <?php include("header.php"); ?>

    <section class="container" id="div-users">

        <?php while($user = mysqli_fetch_array($users)){ ?>
            <table class="table tb-user table-sm">
                <thead class="thead-light">
                    <tr>
                        <th scope="col" class="">Nome:</th>
                        <th scope="col" class="text-uppercase"><?php echo $user['user_name']; ?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                            <th scope="row" class="tb-col-20">Apelido:</th>
                            <td class="tb-col-30 text-uppercase"><?php echo $user['user_nickname']; ?></td>
                            <th scope="row" class="tb-col-20">CPF:</th>
                            <td class="tb-col-30"><?php echo $user['user_cpf']; ?></td>
                    </tr>
                        <tr>
                            <th scope="row">Sexo::</th>
                            <td class="text-uppercase"><?php echo $user['user_gender']; ?></td>
                            <th scope="row">Data de Nascimento:</th>
                            <td ><?php echo $user['user_birth']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">E-mail:</th>
                            <td class="text-uppercase"><?php echo $user['user_email']; ?></td>
                            <th scope="row">Estado:</th>
                            <td class="text-uppercase"><?php echo $user['user_country']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Cidade:</th>
                            <td class="text-uppercase"><?php echo $user['user_city']; ?></td>
                            <th scope="row">CEP:</th>
                            <td><?php echo $user['user_cep']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Telefone:</th>
                            <td><?php echo $user['user_tel']; ?></td>
                            <th scope="row">Celular:</th>
                            <td><?php echo $user['user_cel']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Usuário:</th>
                            <td><?php echo $user['user_username']; ?></td>
                            <th scope="row">Senha:</th>
                            <td><?php echo $user['user_password']; ?></td>
                    </tr>
                </tbody>
            </table>
        <?php }; ?>
    </section>
    
    <?php include("footer.php"); ?>

</body>
</html>