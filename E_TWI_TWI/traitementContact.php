<?php
include("Connection.php");
include("Contact.php");
$contact=new Contact();
$contact->email=$_POST['email'];
$contact->nom=$_POST['nom'];
$contact->telephone=$_POST['tel'];
$contact->sujet=$_POST['sujet'];
$contact->message=$_POST['message'];
//var_dump($contact); 
$p=Contact::AjouterContact($bd,$contact);
if($p==1)
header('location: contactconfirmer.php');
?>
