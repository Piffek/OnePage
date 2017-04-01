<?php 
namespace App\DB;
require_once dirname(__FILE__) . '/../config.php';
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
				$this->pdo = new PDO('mysql:host='.DATABASE_HOST .';dbname='.DATABASE_NAME.'', ''.DATABASE_USER.'', ''.DATABASE_PASS.'', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
		}catch (PDOException $e)
		{
			echo $e->getMessage();
		}
	}
}




?>