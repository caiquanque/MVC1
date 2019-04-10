<?php
 class Database{
 	public static $db;
 	private static $dsn = 'mysql:host=localhost;dbname=mvc';
 	private static $username = 'root';
 	private $passwd = 'root';

 	public static function connect () {
 		if (!isset(self::$db)) {
 			try {
 				self::$db = new PDO(self::$dsn, delf::$username, self::$passwd);
 				self::$db->exec('set names utf8');
 			} catch (PDOExcetion $e){
 				echo $e->getMessage();
 			}

 			return self::$db;
 		}
 	}
 }