<?php 

namespace App\Controller;
use Fw\BaseController;
use Fw\View;
use App\Models\Lang;


class ShowController extends BaseController
{

	
	public function indexAction()
	{
		$view = new View('show/index.phtml');
		$db = new Lang('lang');
	
		return $view->renderThis(array(
				'show' => $db->getWhere('lang', $this->request['name']))
				);
	}
}

?>
