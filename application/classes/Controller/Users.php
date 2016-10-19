<?php defined('SYSPATH') or die('No direct script access.');

/**
 * API-контролер для обработки REST-запросов к сущности "Пользователи".
 * Формат ответов - JSON.
 * Class Controller_Users
 */

class Controller_Users extends Controller {

	public $users_model;

    /**
     * Чтобы не создавать экземпляр в каждом action'е
     */
	public function before()
	{
		parent::before();
		$this->users_model = new Model_Users();
	}

	/**
	 * Получение информации об пользователе
     * GET method
     */

	public function action_get_user ()
	{
		$result = array(
			'users' => $this->users_model->getUser($this->request->param("id"))
		);
		echo json_encode($result);
	}

	/**
	 * Добавление нового пользователя
     * POST метод
	 */

	public function action_post_user ()
	{
		// POST method
		$result = array(
			'result' => $this->users_model->addUser($this->request->post())
		);
		echo json_encode($result);
	}

	/**
	 * Редактирование информации о пользователе
     * PUT метод
	 */

	public function action_put_user ()
	{
		parse_str($this->request->body(), $put_data);
		$result = array(
			'result' => $this->users_model->editUser($this->request->param("id"), $put_data)
		);

		echo json_encode($result);
	}

	/**
	 * Удаление юзера
     * DELETE метод
	 */

	public function action_delete_user ()
	{
		$result = array(
			'result' => $this->users_model->deleteUser($this->request->param("id"))
		);
		echo json_encode($result);
	}


	/**
	 * Получение списка пользователей
	 */

	public function action_list ()
	{
		$result = array(
			'users' => $this->users_model->getUsers()
		);

		echo json_encode($result);
	}

}
