<?php
include("../model/Connection.php");
include("../model/Categorie.php");
$categorie=new Categorie();
$categorie->libelle=$_GET['libelle'];
$u=Categorie::ajouter_categorie($bd,$categorie);
header('location: ../view/categorie.php');
?>
