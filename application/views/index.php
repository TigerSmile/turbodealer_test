<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <meta name="description" content="Тестовое задание для Турбодилера">
    <meta name="author" content="TigerSmile">
    <title>Тестовое задание для Турбодилера</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <style type="text/css">
        div.wrapper{
            padding: 30px;
        }

        form.add-form{
            padding: 30px 0;
            text-align: right;
        }

        form.search-form{
            padding: 30px 0;
            text-align: right;
        }

        button.refresh{
            width: 100%;
        }
    </style>

</head>
<body>

<div class="wrapper">

    <form class="form-inline add-form">
        <fieldset>
            <legend>Добавление пользователя</legend>
            <div class="form-group">
                <label for="new_name">Имя</label>
                <input type="text" class="form-control" id="new_name" placeholder="Фёдор">
            </div>
            <div class="form-group">
                <label for="new_surname">Фамилия</label>
                <input type="email" class="form-control" id="new_surname" placeholder="Тютчев">
            </div>
            <button type="submit" class="btn btn-success adduser"><i class="glyphicon glyphicon-plus"></i> Добавить нового</button>
        </fieldset>
    </form>

    <fieldset>
        <legend style="text-align: right;">Список пользователей</legend>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th width="5%">#</th>
                    <th width="45%">Имя</th>
                    <th width="45%">Фамилия</th>
                    <th colspan="2" width="5%"><button type="button" class="btn btn-primary refresh" rel="#id#"><i class="glyphicon glyphicon-refresh"></i> Обновить</button></th>
                </tr>
                </thead>
                <tbody id="users">
                
                </tbody>
            </table>
        </div>
    </fieldset>

    <form class="form-inline search-form">
        <fieldset>
            <legend>Получение информации о конкретном пользователе</legend>
            <div class="form-group">
                <label for="new_name">ID пользователя</label>
                <input type="text" class="form-control" id="user_id" placeholder="Например: 15">
            </div>
            <button type="submit" class="btn btn-default userinfo"><i class="glyphicon glyphicon-info-sign"></i> Получить данные</button>
        </fieldset>
    </form>




</div>

<script src="/j/jquery.rest.js"></script>
<script src="/j/jcode.js"></script>

</body>
</html>