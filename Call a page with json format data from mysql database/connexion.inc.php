<?php
define("chaine","mysql:host=localhost;dbname=membre");
define("user","root");
define("password","");
$bdd=new PDO(chaine,user,password,array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8'));//Le array c'est pour convertir les caracteres en utf-8
$bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>
