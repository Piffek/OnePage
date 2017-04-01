<?php 

namespace App\Controller;
use Fw\BaseController;
use Fw\View;
use App\Models\Users;


class IndexController extends BaseController
{
	public function indexAction()
	{
		$view = new View('index/index.phtml');
		$db = new Users('users');
		
		return $view->renderThis(array(
				'users' => $db->getAll())
				);
	}
}

?>