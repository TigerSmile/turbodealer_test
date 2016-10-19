# Тестовое задание для TurboDealer

[Действующий пример](http://turbodealer.eltigro.ru/) поднял у себя на сервере.

REST API тут - [/users/](http://turbodealer.eltigro.ru/users/), реализованы стандартные GET, POST, PUT, DELETE. По умолчанию, без параметра возвращается полный список пользователей. Ограничения по выдаче (limit) делать не стал, так как пример совсем простой и в таблице много записей не планируется. Да и не было в задаче пагинации при выводе. )

## Что использовал
- Kohana (<http://kohanaframework.org/>) - для MVC и роутинга.
- Bootstrap (<http://getbootstrap.com/>) - чтобы не возиться с вёрсткой.
- jQuery REST-плагин (https://github.com/jpillora/jquery.rest) - для удобства и компактности обращения к REST API.

