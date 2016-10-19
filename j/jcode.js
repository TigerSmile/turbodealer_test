$(document).ready(function (e) {

    var client = new $.RestClient('/');

    client.add('users');

    $('button.refresh').click(function(e) {
        e.preventDefault();
        client.users.read().done(function (data){
            $('tbody#users').html('');
            $.each(data.users, function (key, item) {
                write_user(item, client);
            });
        });
    });

    $('button.userinfo').click(function(e) {
        e.preventDefault();
        var user_id = $('input#user_id').val();
        if (user_id != ""){
            client.users.read(user_id).done(function (data){
                if (data.users.length > 0){
                    $.each(data.users, function (key, item) {
                        alert("Пользователя зовут " + item.name + ' ' + item.surname);
                    });
                }
                else{
                    alert("Не найдено такого пользователя.");
                }

            });

        }
        else{
            alert("Укажите ID пользователя.");
        }
    });

    $('button.adduser').click(function(e) {
        e.preventDefault();
        var user_name = $('input#new_name').val();
        var user_surname = $('input#new_surname').val();
        if (user_name != "" || user_surname != ""){
            client.users.create({
                user_name: user_name,
                user_surname: user_surname,
            });
            alert("Добавлено.");
            $('button.refresh').click();
        }
        else{
            alert("Укажите хотя бы имя или хотя бы фамилию.");
        }
    });

    $('button.refresh').click();
});

function write_user(user, client){
    var row = '<tr><td>' + user["id"] + '</td>';
    row += '<td><input class="form-control" id="name' + user["id"] + '" value="' + user["name"] + '" /></td><td>';
    row += '<input class="form-control" id="surname' + user["id"] + '" value="' + user["surname"] + '"/></td><td>';
    row += '<button type="button" class="btn btn-primary" id="edituser' + user["id"] + '"><i class="glyphicon glyphicon-ok"></i> Сохранить</button> </td> <td>';
    row += '<button type="button" class="btn btn-danger" id="removeuser' + user["id"] + '"><i class="glyphicon glyphicon-remove"></i>Удалить</button> </td> </tr>';
    $('tbody#users').append(row);

    $('button#edituser' + user["id"]).unbind("click");
    $('button#removeuser' + user["id"]).unbind("click");

    $('button#edituser' + user["id"]).click(function (e) {
        e.preventDefault();
        var user_id = user["id"];
        console.log(user_id);
        var user_name = $('input#name' + user["id"]).val();
        var user_surname = $('input#surname' + user["id"]).val();
        console.log({
            user_name: user_name,
            user_surname: user_surname
        });
        if (user_id != ""){
            client.users.update(user_id, {
                user_name: user_name,
                user_surname: user_surname
            });
            alert("Обновлено.");
        }
        else{
            alert("Не указан ID пользователя.");
        }
    });

    $('button#removeuser' + user["id"]).click(function (e) {
        e.preventDefault();
        var user_id = user["id"];
        if (user_id != ""){
            client.users.del(user_id);
            alert("Удалено.");
            $('button.refresh').click();
        }
        else{
            alert("Укажите ID пользователя.");
        }
    });
}