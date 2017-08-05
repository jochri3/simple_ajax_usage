<?php 
require_once "connexion.inc.php";

$rq=$bdd->query("SELECT * FROM user");
$user=array();
while($res=$rq->fetch())
{
	array_push($user, 
		array("nom"=>$res["nom"],
			  "prenom"=>$res["prenom"],
			  "postnom"=>$res["postnom"],
			  "adresse"=>$res["adresse"],
			  "telephone"=>$res["tel"],
			  "mail"=>$res["mail"]
		));	
}
echo(json_encode($user));
?>