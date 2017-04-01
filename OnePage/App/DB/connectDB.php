<?php 
namespace App\DB;
require_once APP_PATH . '/../config.php';
use \PDO;
class connectDB
{
	protected $table;
	protected $pdo;
	public function __construct($table)
	{
		$this->table = $table;
		try
		{
			$this->pdo = new PDO('mysql:host='.DATABASE_HOST .';dbname='.DATABASE_NAME.'', ''.DATABASE_USER.'', ''.DATABASE_PASS.'', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'")) or die();
			echo("");
		
		}
		//przechwycamy komunikat o ewentualnym błędzie, zapisany w w PDOException
		catch(PDOException $e)
		{
			echo'Błąd :' . $e->getMessage();
		}
	}
	
	public function getAll()
	{
		$query = $this->pdo->prepare("SELECT * from ".$this->table."");
		$query->execute();
		
		if (isset($query)) {
			return $query;
		} else {
			return null;
		}
	}
}




?>