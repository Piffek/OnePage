<?php 
namespace fw;

class View
{
	protected $template = null;
	
	public function __contruct($template)
	{
		$this->template = $template;
	}
	
	public function renderThis($data)
	{
		foreach($data as $key=>$value) 
		{
			$this->{$key} = $value;
		}
	
		ob_start();
		include('APP_PATH' . 'DIRECTORY_SEPARATOR' . 'View' . 'DIRECTORY_SEPARATOR' . $this->template);
		return ob_get_clean();
	}
}

?>