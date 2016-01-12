<?php
 class Contact
{
	public $nom;
	public $email;
	public $telephone;
	public $sujet;	
	public $message;
	public static function AjouterContact($bd,$contact)
		{			
			$sql="INSERT INTO `contact`(`nom`, `sujet`, `telehphone`, `mail`, `message`)
			 VALUES ('".$contact->nom."','".$contact->email."','".$contact->telephone."','".$contact->sujet."','".$contact->message."')";
			$res=$bd->cnx->exec($sql);
			return $res;				
		}
	}
?>