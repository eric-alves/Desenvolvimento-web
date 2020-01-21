const users = '{ "users": [ { "name": "Eric dos Reis Alves", "nickname": "Alves", "cpf": "000.000.000-00", "gender": "Masculino", ' +
            '"birth": "10/10/2000", "country": "MG", "email": "eralves01@hotmail.com", "city": "Belo Horizonte", "zip_code": "30160-010", ' +
            '"tel": "(45) 9855-2603", "cel": "(45) 99855-2603", "username": "alves", "password": "*********"},' +
        '{ "name": "Anakin Skywalker", "nickname": "Darth Vader", "cpf": "111.111.111-11", "gender": "Masculino",' +
            '"birth": "01/01/1977", "country": "SP", "email": "anakin-vader@skywalker.com", "city": "Tatooine", "zip_code": "12345-000",' +
            '"tel": "(31) 3333-3333", "cel": "(31) 33333-3333", "username": "darth", "password": "*******"},' +
        '{ "name": "Obi-Wan Kenobi", "nickname": "Obi", "cpf": "222.222.222-22", "gender": "Masculino",' +
            '"birth": "01/01/1950", "country": "RJ", "email": "obi@kenobi.com", "city": "Almenara", "zip_code": "39900-000",' +
            '"tel": "(33) 3333-3333", "cel": "(33) 33333-3333", "username": "wan", "password": "***************" }]}';

const obj = JSON.parse(users);

    for (i in obj.users) {

        let user = '<table class="table tb-user table-sm">' +
        '<thead class="thead-light">' +
          '<tr>' +
            '<th scope="col" class="">Nome:</th>' +
            '<th scope="col">' + obj.users[i].name +'</th>' +
          '</tr>' +
        '</thead>' +
        '<tbody>' +
           '<tr>' +
                '<th scope="row" class="tb-col-20">Apelido:</th>' +
                '<td class="tb-col-30">' + obj.users[i].nickname + '</td>' +
                '<th scope="row" class="tb-col-20">CPF:</th>' +
                '<td class="tb-col-30">' + obj.users[i].cpf + '</td>' +
           ' </tr>' +
            '<tr>' +
                '<th scope="row">Sexo::</th>' +
                '<td>' + obj.users[i].gender + '</td>' +
                '<th scope="row">Data de Nascimento:</th>' +
                '<td>' + obj.users[i].birth + '</td>' +
            '</tr>' +
            '<tr>' +
                '<th scope="row">E-mail:</th>' +
                '<td>' + obj.users[i].email + '</td>' +
                '<th scope="row">Estado:</th>' +
                '<td>' + obj.users[i].country + '</td>' +
            '</tr>' +
            '<tr>' +
                '<th scope="row">Cidade:</th>' +
                '<td>' + obj.users[i].city + '</td>' +
                '<th scope="row">CEP:</th>' +
                '<td>' + obj.users[i].zip_code + '</td>' +
            '</tr>' +
            '<tr>' +
                '<th scope="row">Telefone:</th>' +
                '<td>' + obj.users[i].tel + '</td>' +
                '<th scope="row">Celular:</th>' +
                '<td>' + obj.users[i].cel + '</td>' +
            '</tr>' +
            '<tr>' +
                '<th scope="row">Usuário:</th>' +
                '<td>' + obj.users[i].username + '</td>' +
                '<th scope="row">Senha:</th>' +
                '<td>' + obj.users[i].password + '</td>' +
           ' </tr>' +
        '</tbody>' +
      '</table>';

        $("#div-users").append(user);
        console.log('func!!!!!!');
        
    }
