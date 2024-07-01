<?php
    include("../M/composant.php");


    $id = $designation = "";
    $quantite = "";
    $prix = "";
    $image="";
   
    if (isset($_POST["id"])) $id = $_POST["id"];
    if (isset($_POST["designation"])) $designation = $_POST["designation"];
    if (isset($_POST["quantite"]))    $quantite = $_POST["quantite"];
    if (isset($_POST["prix"]))    $prix = $_POST["prix"];
    if (isset($_POST["image"]))    $image = $_POST["image"];

      
       

    // Ajout d'un composant
    if (isset($_POST['submit'])) {
        $id = $_POST["id"];
    $allowed_file_types=array('jpeg','png','jpg');
 
    $file_info=pathinfo($_FILES['image']['name']);
    if(!in_array(strtolower($file_info['extension']), $allowed_file_types)) {
    // echo 'alert(Type d image non autorisé.)';
    echo '<script>alert("Type d image non autorisé")</script>';
  
    exit;
    header('Location:../V/administration.php');
    } header('Location:../V/administration.php');
        if ($id != null && $designation != null && $prix != null && $quantite != null) {
            $co = new Composant($id, $designation, $quantite, $prix,$image);
            $nb = Composant::ajouterComposant($co);
            if ($nb > 0) {
                echo '<script>alert("composant ajouté")</script>';
            } else {
                echo '<script>alert("composant non ajouté")</script>';
            }
            header('Location:../V/administration.php');
        }
    }
    
     if (isset($_POST['update'])) {
        $comp = new Composant($id, $designation, $quantite, $prix,$image);
        $nb = Composant::modifierComposant($comp);
        if ($nb > 0) {
            echo '<script>alert("compsant' . $id . ' modifié")</script>';
            header('Location:../V/administration.php');
        }
     else {
        echo '<script>alert("il faut remplir tous les champs")</script>';
        header('Location:../V/administration.php');
    }}


    if (isset($_POST['delete']) || isset($_GET['idsup'])) {
        if (isset($_GET['idsup']))
        $id =$_GET['idsup'];

        if ($id != null) {
            $nb = composant::supprimerComposant($id);
            if ($nb > 0) {
                echo '<script>alert("composant supprimé")</script>';
                header('Location:../V/administration.php');
            }
        }
    }
?>