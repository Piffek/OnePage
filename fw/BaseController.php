<?php 
namespace fw;

class BaseController
{
	protected $request;
	public function __contruct($request)
	{
		$this->request = $request;
	}
}

?>