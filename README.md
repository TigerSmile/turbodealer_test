# Тестовое задание для TurboDealer

[Действующий пример](http://turbodealer.eltigro.ru/) поднял у себя на сервере.

REST API тут - [/users/](http://turbodealer.eltigro.ru/users/), реализованы стандартные GET, POST, PUT, DELETE. По умолчанию, без параметра возвращается полный список пользователей. Ограничения по выдаче (limit) делать не стал, так как пример совсем простой и в таблице много записей не планируется. Да и не было в задаче пагинации при выводе. )

## Что использовал
- Kohana (<http://kohanaframework.org/>) - для MVC и роутинга.
- Bootstrap (<http://getbootstrap.com/>) - чтобы не возиться с вёрсткой.
- jQuery REST-плагин (https://github.com/jpillora/jquery.rest) - для удобства и компактности обращения к REST API.

## Установка
- 1) Клонировать репозиторий в папку отдельного домена в корень.
- 2) Создать базу данных (например: `turbodealer_test`).
- 3) Развернуть в неё дамп `turbodealer_test.sql` (находится в корне).
- 4) Поправить конфиг `/application/config/database.php` (он же и часть задания - хранилище данных можно изменить).

## Использование API
Способ обращения и использования API стандартен для REST. Путь обращения - `/users/`.
- `GET` `/users/` возращает JSON-массив со всеми существующими пользователями в порядке их добавления в БД.
- `GET` `/users/<id>` возращает JSON-массив с информацией о пользователе с идентификатором `id`.
- `POST` `/users/` с параметрами `{user_name : 'Ivan', user_surname : 'Petrov'}` добавляет нового пользователя.
- `PUT` `/users/<id>` с параметрами `{user_name : 'Ivan', user_surname : 'Petrov'}` обновляет данные пользователя с идентификатором `id`.
- `DELETE` `/users/<id>` удаляет пользователя с идентификатором `id`.

## Что смотреть
Чтобы не тратить лишнее время на поиск нужного во фреймворке:
- Роутинг: `/application/bootstrap.php`
- Контроллер: `/application/classes/Controller/Users.php`
- Модель: `/application/classes/Model/Users.php`
- Основная вьюшка: `/application/view/index.php`
- JS-логика: `/j/jcode.js`
