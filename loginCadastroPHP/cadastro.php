<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Usuários</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/util.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/05c9ea944b.js" crossorigin="anonymous"></script>
</head>
<body>
    
    <?php include("header.php") ?>

    <section class="container">
        <form class="" method="POST" action="cadastroController.php">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for=" ">Nome Completo:</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="">
                </div>
                <div class="form-group col-md-6">
                    <label for=" ">Apelido:</label>
                    <input type="text" name="nickname" class="form-control" id="nickname" placeholder="">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for=" ">CPF:</label>
                    <input type="text" name="cpf" class="form-control" id="cpf" maxlength="14" placeholder="">
                </div>
                <div class="form-group col-md-6">
                    <label for=" ">Sexo:</label>
                    <select id="sexo" class="form-control" name="gender">
                        <option value="">Selecione</option>
                        <option value="M">Masculino</option>
                        <option value="F">Feminino</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for=" ">Data de Nascimento:</label>
                    <input type="date" name="birth" class="form-control" id="dt_nasc" placeholder="">
                </div>
                <div class="form-group col-md-6">
                    <label for=" ">Estado:</label>
                    <select id="estado" name="country" class="form-control">
                        <option value="">Selecione</option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espirito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for=" ">E-mail:</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for=" ">Cidade:</label>
                    <input type="text" name="city" class="form-control" id="city" placeholder="">
                </div>
                <div class="form-group col-md-6">
                    <label for=" ">CEP:</label>
                    <input type="text" name="zip" class="form-control" id="cep" placeholder="">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for=" ">Telefone:</label>
                    <input type="text" name="tel" class="form-control" id="tel" placeholder="">
                </div>
                <div class="form-group col-md-6">
                    <label for=" ">Celular:</label>
                    <input type="text" name="cel" class="form-control" id="cel" placeholder="">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for=" ">Usuário:</label>
                    <input type="text" name="username" class="form-control" id="usuario" placeholder="">
                </div>
                <div class="form-group col-md-6">
                    <label for=" ">Senha:</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="">
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn" onclick="">Cadastrar</button>
            </div>
            
        </form>
    </section>

    <?php include("footer.php"); ?>

</body>
</html>