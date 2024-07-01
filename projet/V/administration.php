<html>

<head>
    <title></title>
    <meta charset="utf-8" />

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
                     padding: 25px,25px,25px;}
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
                       margin-left: 32%;
                       margin-top: -87mm;
                 }
                 .log2{
                     
                     width: 28%;
                     height: 28%;
                     margin-left: 33%;
                     margin-top: -15mm;
                  }
                 input{
                     width:12% ;
                     margin-left: 9%;
                     margin-bottom: 1%;
                     outline: none;
                 }
                 
                 label{
                     margin-left: 1%;
                     font-weight: bold;
                     margin-top: -7%;
                     padding-left: 10%;
                     padding-right: 5%;
                 }
                 .retour{
                     margin-right: 15%;
                 }
                 .hot{
                     background-image: url("../image/hot.png");
                     margin-right: 50%;
                     height: 80%;
                     width: 50%;
                     margin-top: -57mm;
                     margin-left: 20%;
                     background-size: 80%;
                     background-repeat: no-repeat;
                 }
                 .imcomp{
                     width: 20%;
                     height: 20%;;
                 }
                 .di1{
                     /* background-color:var(--white); */
                     border-radius: 0%;
                     border:3px var(--black-origin) bold;
                     width: 40%;  
                     margin-left: 30%;
                     border: #797777 3px solid;
                 
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
                 b{
                     color: green;
                 }
                 .sub{
                     width: 12%;
                     height: 9%;
                     color: white;
                     background-color: #000;
                     margin-left: 11%;
                     font-weight: bold;
                     
                 }
                 .sub:hover{
                     background-color: #00EC9B;
                     border:2px solid white;
                     color: black;
                 }
                 label{
                         font-weight: bold;
                         font-size: large;
                 }
                 .sub1{
                      width: 10%;
                     height: 4%;
                     font-weight:bold ;
                     padding-left: 0.5%; 
                     font-size: larger;
                     color: black bold;
                     background-color: var(--white);
                     
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


</head>

<body>
   
<header>
<div class="divv">
<a href="accueil.php"><img class="hom" src="../image/download5.png" alt="" title="Home"></a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href=""><img class="hom" src="../image/download1.png" alt=""title="Compte" ></a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="../C/controlePanier.php"><img class="hom" src="../image/download2.png" alt="" title="Panier"></a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="authentification.php"><img class="hom" src="../image/download3.png" alt=""title="deconnection" ></a>&nbsp;&nbsp;&nbsp;&nbsp;
</div><br><img class="log2" src="../image/Hotpot11.png" alt=""></header>
<img class="p1" src="../image/44.png" alt="">
<br><br>
<br><br>
<center><h2>Composant</h2></center><br>
<br>
    <form action="../C/ControlreComposant.php" method="POST"enctype="multipart/form-data">
<label for="">Id Composant :&nbsp;&nbsp;&nbsp;</label>&nbsp;&nbsp;<input type="text"  name="id" class="sub1" required><br><br>
<label for="">Designation Composant :</label><input type="text"  name="designation" class="sub1"><br><br>
<label for="">Quantite Composant :&nbsp;&nbsp;&nbsp;</label>&nbsp;&nbsp;&nbsp;<input type="number" class="sub1" name="quantite"><br><br>
<label for="">Prix Composant :</label><input type="text" name="prix"class="sub1"><br><br>
<label for="">Image Composant :</label><input type="file" name="image"accept="image/*"><br><br><br>

                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="Ajouter Composant "class="sub">
                  
                    <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="submit" name="update" value="Modifier Composant"class="sub"> -->
                    
                     <input type="submit" name="delete" value="Supprimer Composant"
                        onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet Composant ?')"class="sub">
                        <br>
                        <br><br>


    </form>
<?php
//   $image = $_POST["image"];
 
include("../M/composant.php");

$listc= Composant::affichercomposant();
echo "<h3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;La liste de tous les composants</h3>";
echo "<br>";
echo "<br>";


    foreach ($listc as $com) {
      
        echo "<div class=di1> "." <img class=ii src=../image/$com->image ><span class=di><p class=p11>$com->designation<br>Code:$com->id
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='modifier.php?idmod=" . $com->id . "'>Modifier</a>
       <br>Qte stock: <b>$com->quantite</b><br> Prix :<b>$com->prix TND</b>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <a href='../C/ControlreComposant.php?idsup=" . $com->id . "'>Supprimer</a><br><br><br><br></p></span></div>";
}

echo"<br><br>";

?>
<style>   h3{ margin-left: 30%;
color: brown;
font-weight: bolder;}

table{margin-left: 18%;
    height: 35%;
    width: 40%;
    background: none;
    font-size: larger;
 
}
td,th{
    padding-top: -1%;
   
    width:25%;
    margin-left: 12%;
    font-size:large;
    border: #000 3PX solid;   


}
tr{border: #000 2px solid;
    width: 25%;
    
    margin-left: 12%; padding-bottom: -10%;
}

</style>
<br>
<br>
<hr>
<br>
<br><br>
<center><h2>Utilisateur</h2></center><br>
<br>
<form action="../C/controUtilisateur.php" method="POST">
<label for="">EMAIL :</label><input type="email"  name="email" class="sub1" required><br><br>
<label for="">NOM PRENOM :</label><input type="text"  name="nom"class="sub1"><br><br>
<label for="">ROLE :</label><input type="number"  name="role"class="sub1"><br><br><br>


                    
                  
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="update" value="Modifier Utilisateur"class="sub">
                    
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="submit" name="del" value="Supprimer Utilisateur"
                        onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet Composant ?')"class="sub">
                        <br>
                        <br><br>


    </form>
<?php
include("../M/utilisateur.php");
//affichage de tous 

$listc= Utilisateur::afficherutilisateur();
echo "<h3>&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; La liste de tous les utilisateurs</h3>";
echo"<br>";
echo"<br>";
echo "<table class='tab' >";
echo "<tr><th>EMAIL</th><th>PASSWORD</th><th>&nbsp;&nbsp;&nbsp;NOM&PRENOM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th>CIN</th><th>&nbsp;&nbsp;&nbsp;&nbsp;DATE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th>ROLE&nbsp;&nbsp;&nbsp;&nbsp;</th></tr>";

    foreach ($listc as $com) {
        echo "<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;" . $com->email . "&nbsp;&nbsp;&nbsp;&nbsp;</td>";
        echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;" . $com->password . "&nbsp;&nbsp;&nbsp;&nbsp;</td>";
        echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;" . $com->nom . "&nbsp;&nbsp;&nbsp;&nbsp;</td>";
        echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;" . $com->cin . "&nbsp;&nbsp;&nbsp;&nbsp;</td>";
        echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;" . $com->dat . "</td>";
        echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $com->role . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";
      
        echo "<td><a href='../C/controUtilisateur.php?esupp=" . $com->email . "'>&nbsp;&nbsp;&nbsp;Supprimer&nbsp;&nbsp;&nbsp;</a></td>";
        echo "</td></tr>";
}
echo "</table>";


?>
<br><br><br>
</body>

</html>