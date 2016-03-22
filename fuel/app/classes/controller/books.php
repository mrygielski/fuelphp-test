<?php
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.7
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2015 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Books extends Controller
{
	/**
	 * Strona główna
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
		return Response::forge(View::forge('books/index'));
	}

	/**
	 * Obsługa dodawania ksiązki
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_add()
	{
		$val = Validation::forge();

		if (Input::method() == 'POST')
		{
			$val = Validation::forge('my_validation');
			$val->add('bookname', 'Tytuł ksiązki')->add_rule('required');
			$val->add('bookauthor', 'Autor ksiązki')->add_rule('required');
			$val->set_message('required', ':label is required.');

			if($val->run()) {

				$post = new Model_Post();
				$post->bookname = Input::post('bookname');
				$post->bookauthor = Input::post('bookauthor');
				$post->save();

				Response::redirect('success');

			} else {

				Response::redirect('error');

			}

        }
	}

	/**
	 * Komunikat o sukcesie dodania ksiązki
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_success()
	{
		return Response::forge(View::forge('books/success'));
	}

	/**
	 * Komunikat błędu podczas dodania ksiązki
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_error()
	{
		return Response::forge(View::forge('books/error'));
	}

	/**
	 * Lista ksiązek
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_list()
	{
		$list = array();
		$list = Model_Post::query()->get();

		return Response::forge(View::forge('books/list', array('list' => $list)));
	}
}
