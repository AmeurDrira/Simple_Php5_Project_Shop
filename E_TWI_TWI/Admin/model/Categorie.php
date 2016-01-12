<?php
 class Categorie
{
	
	public $id;
	public $libelle;
	
	public static function ajouter_categorie($bd,$categorie)
		{			
			$sql="INSERT INTO `categorie`(`libelle`)VALUES ('".$categorie->libelle."')";
			$res=$bd->cnx->exec($sql);
			return $res;				
		}
	public static function lister_categorie($bd)
	{			
		$sql="select * from categorie";
		$res=$bd->getAll($sql);
		return $res;					
	}
	public static function supprimer_categorie_by_id($bd,$categorie)
	
	{
		$sql="DELETE  FROM `categorie` WHERE id=".$categorie->id."";
			$res=$bd->cnx->exec($sql);
			return $res;	
	}
	public static function get_categorie_by_id($bd,$categorie)
	
	{
		$sql="DELETE * FROM `categorie` WHERE libelle='".$categorie->libelle."'";
			$res=$bd->cnx->exec($sql);
			return $res;	
	}
	
	public static function modifier_categorie_by_id($bd,$categorie)
	
	{
		$sql="UPDATE `categorie` SET `libelle`='".$categorie->libelle."' where id='".$categorie->id."'";
			$res=$bd->cnx->exec($sql);
			return $res;	
	}
	
	
	}
?>