<?php

include("../M/utilisateur.php");
if(isset($_POST['email'])&& isset($_POST['password']))
{
if(!empty($_POST['email']) && !empty($_POST['password']))
 {
$email=$_POST['email'];
$password=$_POST['password'];
$nom=$_POST['nom'];
$cin=$_POST['cin'];

$role=$_POST['role'];

$use=new Utilisateur($email,$password,$nom,$cin,$date,$role);
$s = $use::connect($email,$password);
if ($s == true){
session_start();
$_SESSION["login"] = $login;
if ($s->role==1)

// setcookie("log",$login,time()+86400);
// setcookie("pass",$password,time()+86400);
header('Location:../V/administration.php');
else
header('Location:../V/accueil.php');
 }else
    header('Location:../V/authentification.php');

    


 }
}
?>