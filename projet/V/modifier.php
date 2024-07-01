
<html>
    <head>

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
                    header{ background-image: url("../image/1.png");
                    background-size: 118%;
                    background-repeat: no-repeat;
                    background-attachment: fixed;
                    font-size: large;
                    line-height: 40px;
                    padding: 25px,25px,25px;}
                .sub{
                    width: 18%;
                    height: 7%;
                    color: white;
                    background-color: #000;
                    margin-left: 58%;
                    margin-top: -15mm;
                    font-weight: bold;
                    
                }
                .sub:hover{
                    background-color: #00EC9B;
                    border:2px solid white;
                    color: black;}
                    .sub1{
                    width: 10%;
                    height: 4%;
                    font-weight:bold ;
                    padding-left: 0.5%; 
                    font-size: larger;
                    color: black bold;
                  
                    background-color: var(--white);
                    
                }
                
                .ii{
                    width: 20%;
                    height: 20%; 
                   margin-bottom: 5mm; 
                }
                .p11{
                   
                   font-weight: bold;
                  margin-top: -33mm; 
                margin-left: 25%;
                
                }
                .di1{
                    /* background-color:var(--white); */
                    border-radius: 0%;
                    border:3px var(--black-origin) bold;
                    width: 40%;  
                    margin-left: 30%;
                    border: #797777 3px solid;
                
                }
                .log2{
                    
                        width: 28%;
                        height: 28%;
                        margin-left: 33%;
                        margin-top: -15mm;
                  }
                  .p1{ 
                        line-height: 40px;
                        width: 100%;
                        height: 20%;
                      
                        font-size: large;
                        background-size: 118%;
                       
                
                    }
                    label{
                         margin-left: 10%;
                         font-weight: bold;
                         margin-top: -7%;
                         padding-left: 10%;
                         padding-right: 5%;
                    }
    </style>
    </head>
    <body>
        <header><img class="log2" src="../image/Hotpot11.png" alt=""></header>
<img class="p1" src="../image/44.png" alt=""></header>
    <?php
echo "<br>";
include "../M/composant.php";
 if (isset($_GET['idmod'])) {
     $id = $_GET['idmod'];
 } else     header('Location:accueil.php');

include("../C/connexion.php");
$sql = $conn->query("SELECT * FROM composants where id='$id'");
if (!$sql) {
    echo "Lecture impossible, code";
} else {
    $sql->setFetchMode(PDO::FETCH_OBJ);
    $com = $sql->fetch();
}
$desin=$com->designation;
$prix=$com->prix;
$quantite=$com->quantite;
$image=$com->image;
echo "<div class=di1> "." <img class=ii title=$com->id src=../image/$com->image ><span class=di><p class=p11>$com->designation<br><br>Qte stock: $com->quantite<br><br> <b>Prix :$com->prix </b>
<br><br><br></p></span></div><br>";

?>
<br><br>
    
<form action="../C/ControlreComposant.php" method="POST">
<label for="">Id Composant :&nbsp;&nbsp;&nbsp;</label>&nbsp;&nbsp;<input type="text"  name="id"value="<?= $id ?> " class="sub1" required><br><br>
<label for="">Designation Composant :</label><input type="text"  name="designation" class="sub1" value="<?= $desin ?> " ><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="submit" name="update" value="Modifier Composant"class="sub">
<label for="">Quantite Composant :&nbsp;&nbsp;&nbsp;</label>&nbsp;&nbsp;&nbsp;<input   type="TEXT" class="sub1" name="quantite"value="<?= $quantite ?> "><br><br>
<label for="">Prix Composant :</label><input type="text" name="prix"class="sub1" value="<?= $prix ?> " ><br><br>
<label for="">Image Composant :</label><input type="file" name="image"  value="<?= "../image/$image" ?> "   ><br><br><br>

                  
                  
                   
                    
                  
                        <br><br>


    </form>
    </body>
    </html>