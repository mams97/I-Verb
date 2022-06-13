<?php 
namespace mydico\Model;
use \PDO;
/*
*
*/
class ConnectDb
{
	private static $bdd;

	public static function getDB()
	{
		if (self::$bdd == null)
		{
			self::$bdd = new PDO('mysql:host=localhost;dbname=mydico','root','');
		}
		return self::$bdd;
	}
}