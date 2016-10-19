<?php defined('SYSPATH') or die('No direct script access.');

class Model_Users extends Model
{
    /**
     * Получение списка всех существующих пользователей
     * @return mixed
     */
    public function getUsers()
    {
        $results = DB::select()
            ->from("users")
            ->order_by('id', 'Asc');

        return $results->execute()->as_array();
    }

    /**
     * Полуение информации о конкретном пользователе
     * @param $id ID пользователя
     * @return mixed
     */
    public function getUser($id)
    {
        $results = DB::select()
            ->from("users")
            ->where('id', '=', $id);

        return $results->execute()->as_array();
    }

    /**
     * Добавление нового пользователя
     * @param $post Массив с $_POST
     * @return object
     */
    public function addUser($post)
    {
        $results = DB::insert("users", array('id', 'name', 'surname'))
            ->values(array('', $post["user_name"], $post["user_surname"]));

        return $results->execute();
    }

    /**
     * Редактирование информации о пользователе
     * @param $id
     * @param $put Массив с данными пользователя вида { user_name : 'Иван', user_surname : 'Петров' }
     * @return object|boolean
     */
    public function editUser($id, $put)
    {
        if ($id == "") return "Пустой id.";

        $results = DB::update("users")
            ->set(array(
                    'name' => $put["user_name"],
                    'surname' => $put["user_surname"],
                )
            )
            ->where("id", "=", $id);

        return $results->execute();
    }

    /**
     * Удаление пользователя
     * @param $id ID удаляемого пользователя
     * @return object|boolean
     */
    public function deleteUser($id)
    {
        if ($id == "") return "Пустой id .";

        $results = DB::delete("users")
            ->where('id', '=', $id);

        return $results->execute();
    }
}