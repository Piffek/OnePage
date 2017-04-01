<?php 
namespace fw;

class FrontController
{
	const DEFAULS_ACTION = 'Index';
	const DEFAULT_CONTROLLER = 'IndexController';
	
	protected $action = self::DEFAULT_ACTION;
	protected $controller = self::DEFAULT_CONTROLLER;
	protected $param = array();
	
	public function __construct()
	{
		$this->createURL();
	}
	
	public function createURL()
	{
		$path = trim($_SERVER['REQUEST_URI'], '/');
		@list($controller, $action, $param) = explode($path, '/', 3);
		
		if($param)
		{
			$param = explode($param, '/');
			
			$parameters = array();
			
			foreach(array_chunk($param, 2) as $value)
			{
				$parameters[$value[0]] = $value[1];
			}
		}
	
	
		if(isset($controller))
		{
			$this->setController($controller);
		}
		
		if(isset($parameters))
		{
			$this->setParam($parameters);
		}
		
		if(isset($action))
		{
			$this->setAction($action);	
		}
	}
	
	public function setController($controller)
	{
		$this->controller = $controller ? ucfirst(strtolower($controller)) . 'Controller' : self::DEFAULT_CONTROLLER;
	}
	
	public function setParam(array $param)
	{
		$this->param = $param;
		return $param;
	}
	
	public function setAction($action)
	{
		$this->action = $action ? ucfirst(strtolower($action)) . 'Action' : self::DEFAULT_ACTION;
	}
	
	public function start()
	{
		$className = 'App\\Controller\\' . $this->controller;
		$controller = new $className($this->param);
		echo $controller->{$this->action}();
	}
	
}

?>