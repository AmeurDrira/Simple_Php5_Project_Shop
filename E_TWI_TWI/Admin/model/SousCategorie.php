<?php
 class SousCategorie
{
	
	public $id;
	public $libelle;
	public $image;
	public $categorie_id;
	
	public static function ajouter_souscategorie($bd,$souscategorie)
		{			
			$sql="INSERT INTO `souscategorie`(`libelle`, `image`, `categorie_id`)
			 VALUES ('".$souscategorie->libelle."','".$souscategorie->image."','".$souscategorie->categorie_id."')";			
			$res=$bd->cnx->exec($sql);
			return $res;				
		}
	public static function lister_souscategorie($bd)
	{			
		$sql="select * from souscategorie";
		$res=$bd->getAll($sql);
			return $res;					
	}
	public static function supprimer_souscategorie_by_id($bd,$souscategorie)
	
	{
		$sql="DELETE FROM `souscategorie` WHERE id='".$souscategorie->id."'";
			$res=$bd->cnx->exec($sql);
			return $res;	
	}
	
	public static function modifier_categorie_by_id($bd,$souscategorie)
	
	{
		$sql="UPDATE `categorie` SET `libelle`='".$souscategorie->libelle."'";
			$res=$bd->cnx->exec($sql);
			return $res;	
	}
	
	
	}
?>