<?php 

namespace App\Controller;
use Fw\BaseController;
use Fw\View;


class IndexController extends BaseController
{
	public function indexAction()
	{
		$view = new View('index/index.phtml');
		return $view->renderThis(array(
			'pacior' => 'patryk',
				
		));
		
	}
}

?>