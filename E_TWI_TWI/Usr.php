<?php
 class Usr
{
	public $email;
	public $password;
	public static function recherche($bd,$u)
		{			
			$sql="SELECT * FROM user WHERE email='".$u->email."' and password='".$u->password."'";
			$res=$bd->getAll($sql);
			return count($res);		
		}
	}
?>