<?php
 include("../M/utilisateur.php");
 

 $email ="";
 $password = "";
 $cin="";
 $nom = "";
 $dat = "";
 $role="0";

 if (isset($_POST["email"])) $email = $_POST["email"];
 if (isset($_POST["password"])) $password = $_POST["password"];
 if (isset($_POST["nom"]))    $nom = $_POST["nom"];
 if (isset($_POST["cin"]))    $cin = $_POST["cin"];
  if (isset($_POST["dat"]))    $dat = $_POST["dat"];
 if (isset($_POST["role"]))    $role = $_POST["role"];

 // Ajout d'un utilisateur
 if (isset($_POST['submit'])) {
     if ($email != null && $password !=null && $nom != null && $cin != null && $role!=null)  {
         $Ar = new Utilisateur($email, $password, $nom, $cin, $dat, $role);
         $nb = Utilisateur::ajouterUtilisateur($Ar);
         if ($nb > 0) {
             echo '<script>alert("utilisateur ajouté")</script>';
             
         } else {
             echo '<script>alert("utilisateur non ajouté")</script>';
         }
         header('Location:../V/inscription.php');
     }
     header('Location:../V/inscription.php');
 }
 ?>
 <?php
 if (isset($_POST['update'])) {
    $util = new Utilisateur($email, $password, $nom, $cin, $dat, $role);
    $nb = Utilisateur::modifierUtilisateur($util);
    if ($nb > 0) {
        echo '<script>alert("utilisateur' . $email . ' modifié")</script>';
         header('Location:../V/administration.php');
    }
 else {
    echo '<script>alert("il faut remplir tous les champs")</script>';
     header('Location:../V/administration.php');
}}


if (isset($_POST['del']) || isset($_GET['esupp'])) {
    if (isset($_GET['esupp']))
    $email =$_GET['esupp'];

    if ($email != null) {
        $nb = Utilisateur::supprimerUtilisateur($email);
        if ($nb > 0) {
            echo '<script>alert("utilisateur supprimé")</script>';
         header('Location:../V/administration.php');
        }
    }
}
 
?>
