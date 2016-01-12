<?php
include("../model/Connection.php");
include("../model/Categorie.php");
$categorie=new Categorie();
$categorie->id=$_GET['id'];
$categorie->libelle=$_GET['libelle'];
$u=Categorie::modifier_categorie_by_id($bd,$categorie);
header('location: ../view/categorie.php');
?>
