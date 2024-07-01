<html>
    <head></head>
<body> 
   
   <header>
   <div class="divv">
   <a href="../V/accueil.php"><img class="hom" src="../image/download5.png" alt="" title="Home"></a>&nbsp;&nbsp;&nbsp;&nbsp;
   <a href=""><img class="hom" src="../image/download1.png" alt=""title="Compte" ></a>&nbsp;&nbsp;&nbsp;&nbsp;
   <a href="controlePanier.php"><img class="hom" src="../image/download2.png" alt="" title="Panier"></a>&nbsp;&nbsp;&nbsp;&nbsp;
   <a href=""><img class="hom" src="../image/download3.png" alt=""title="deconnection" ></a>&nbsp;&nbsp;&nbsp;&nbsp;
   </div>
   <img class="log1" src="../image/l.png" alt="" ><br><img class="log2" src="../image/l2.png" alt=""></header>
   <img class="p1" src="../image/44.png" alt=""><br><br>
       
   
   <br><br><br><?php
include("../M/pan.php");
include("connexion.php");
session_start();

if (isset($_POST['submit'])) {
   
	$id = $_POST['id'];
	$qte = $_POST['qte'];


	$sql = $conn->query("SELECT * FROM composants where id='$id'");
	$sql->setFetchMode(PDO::FETCH_OBJ);
	$l = $sql->fetch();
	if (!isset($_SESSION['panier'])) {
		$pan = new panier();
		$pan->addPanier($id, $qte);
		$_SESSION['panier'] = $pan;
		echo $pan;
	} else {
		$pan = $_SESSION['panier'];
		$pan->addPanier($id, $qte);
		$_SESSION['panier'] = $pan;
		echo $pan;
	}
}?>

<?php

//consulter panier
if (isset($_GET['consulte'])) {
	if (!isset($_SESSION['panier'])) {
		echo "Votre panier est vide";
	} else {
		$p = $_SESSION['panier'];
		echo $p;
	}
}
if (isset($_POST['annuler'])) {
	unset($_SESSION['panier']);
	header('Location:../V/accueil.php');
}

if (isset($_POST['ajout'])) {
	header('Location:../V/accueil.php');
}

if (isset($_POST['commade'])) {
	if (!isset($_SESSION['panier'])) {
		echo '<script> alert("votre panier est vide") </script>';
	} else {
		$_SESSION['panier']->updateBD();
	 echo '<script> alert("votre commande est bien confirmée") </script>';
		unset($_SESSION['panier']);
		header('Location:../V/accueil.php');
	}
}
?>
<br><br>
<form name="form1" action="controlepan.php" method="POST">

    <span>
    <input type="submit" name="ajout" value="Ajouter un Composant" class="sub">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="submit" name="commade" value="Valider commande" class="sub">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="submit" name="annuler" value="Annuler commande" class="sub">
    </span>
</form>
<style>
                      *{
                             margin: 0;
                             padding: 0;
                             box-sizing: border-box;
                             font-family: var(--font);
                             letter-spacing: 1px;
                             -webkit-user-select: none;
                             -moz-user-select: none;
                             -ms-user-select: none;
                             user-select: none;
                             scroll-behavior: smooth;
                 }
                 a{
                           text-decoration: none;
                 }
                 ul{
                           list-style: none;
                 }
                 html{
                           position: relative;
                           height: 100%;
                 }
                 body{
                           position: relative;
                           width: 100vw;
                           height: 100%;
                           overflow-x: hidden;
                           scroll-behavior: smooth;
                           background-color: #e9e9e9;
                 }
                  .container{
                  max-width: 1450px;
                  margin: auto;
                  padding: 0 30px;
                  }
                  ::-webkit-scrollbar {
                  width: 10px;
                  }
                  ::-webkit-scrollbar-track {
                  background: #efeded; 
                  }
                  ::-webkit-scrollbar-thumb {
                  background: var(--black); 
                  }
                  ::-webkit-scrollbar-thumb:hover {
                  background: #00EC9B ; 
                  }
                  
                  :root{
                  --font: 'DM Sans', sans-serif;
                  --gray: #797777;
                  --blue: #007aff;
                  --red: #FF0032;
                  --black: #191919;
                  --black-origin: #000;
                  --white: #fff9f9;
                  --white: #fff;
                  --shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
                  }
                  
                  header{ 
                  background-image: url("../image/1.png");
                  background-size: 118%;
                  background-repeat: no-repeat;
                  background-attachment: fixed;
                  font-size: large;
                  line-height: 40px;
                  padding: 25px,25px,25px;
                  }
                  img{
                  height: 20%;
                  width: 30%;
                  }
                      .p1{ 
                  line-height: 40px;
                  width: 100%;
                  height: 20%;
                  
                  font-size: large;
                  background-size: 118%;
                  }
                  .im{
                  width: 50%;
                  height: 100%;
                     
                  border: 2px  black;
                  
                  }
                  .log1{
                  margin-left: 10%;
                  }
                  .log2{
                    
                  width: 20%;
                  height: 20%;
                  margin-left: 0%;
                  margin-top: -29mm;
                  }
                  
                  td{ 
                  border-radius: 11%;
                  padding-left: 10%;
                  }
                  th{
                  /* margin-left: 55%; */
                  padding-left: 55%;
                  padding-top: 4%;
                  
                  }
                  
                  h4{
                  color: green;
                  margin-top: -4.5mm; 
                  margin-left: 34%;
                  
                  }
                  h3{
                  color: var(--red);
                  margin-top: -5.5mm; 
                  margin-left: 42%;
                  
                  }
                  
                  tr{
                  border-bottom: 70mm;
                  background-color: var(--white);
                  border-radius: 50%;
                  padding-bottom: -20mm;
                  }
                  .imcomp{
                  width: 0%;
                  height: 0%;
                  margin-left: 60%;
                  padding-left: 20%;
                  }
                  .tab{
                  margin-left: 15%;
                  }
                  .p11{
                     
                  font-weight: bold;
                  margin-top: -33mm; 
                  margin-left: 25%;
                      
                  }
                  .ii{
                  width: 20%;
                  height: 20%; 
                  margin-bottom: 5mm; 
                  }
                  
                      .di1{
                  width: 40%;  
                  border: #797777 3px solid ;
                  margin-left: 30%;
                  }
                  
                  
                  .sub{
                  width: 18%;
                  height: 7%;
                  color: white;
                  background-color: #000;
                  margin-left: 1%;
                  font-weight: bold;
                      
                  }
                  b{
                  margin-left: 30%;
                  
                  }
                  .sub:hover{
                  background-color: #00EC9B;
                  border:2px solid black;
                  color:#000 ;
                  }
                  span{
                  margin-left: 20%;
                  
                  }
                  .divv{
                    
                  margin-left: 80%; 
                  }
                  .hom{
                  width:13.5% ;
                  height: 5%;
                  margin-bottom: -26%;
                     
                  }

</style>

</body></html>