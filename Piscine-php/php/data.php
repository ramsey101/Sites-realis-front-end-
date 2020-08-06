<?php 
try{
 $base=new PDO("mysql:host=localhost;dbname=abonnement","root","");
 }
 catch(exception $e){
 die("Erreur : ".$e->getMessage()) ;
 }
$ernom=$erprenom=$eremail=$ercontact="";
 if($_SERVER["REQUEST_METHOD"]=="POST"){
 $email = $_POST["mail"];
 $ville = $_POST["ville"];
 $isvalidate=true;
 if(empty($email)){
$eremail="Veuillez bien remplir ce champs svp" ;
$isvalidate=false;
 }
 if(empty($ville)){
$erville="Veuillez bien remplir ce champs svp" ;
$isvalidate=false;
 }
 if($isvalidate==true){
 $req=$base->prepare(
 	"INSERT INTO abonne (email,ville)
 	VALUES(?,?)");
 $req->execute(array($email,$ville));
 }

}

?>