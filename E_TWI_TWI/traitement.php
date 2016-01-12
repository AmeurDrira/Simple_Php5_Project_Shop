<?php
include("Connection.php");
include("Usr.php");
$u=new Usr();
$u->email=$_GET['email'];
$u->password=$_GET['password'];
$p=Usr::recherche($bd,$u);
if($p==1)
header('location: cart.html');
else
header("Location: index.php?erreur=2");
?>
