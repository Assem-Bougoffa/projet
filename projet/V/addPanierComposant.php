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
                            margin-left: 10%;
                     }
                     .log2{
                         
                            width: 20%;
                            height: 20%;
                            margin-left: 0%;
                            margin-top: -29mm;
                     }
                     .sub:hover{
                            background-color: #00EC9B;
                            border:2px solid black;
                            color:#000 ;
                     }
                         
                     b{
                            color: green;
                     
                     }
                     input{
                            border:5px black bold;
                     }
                     
                     
                     
                     .p11{
                            font-weight: bold;
                            margin-top: -33mm; 
                            margin-left: 25%;
                            
                     }
                     .sub{
                            width: 18%;
                            height: 7%;
                            color: white;
                            background-color: #000;
                         
                     }
                     .sub1{
                            width: 12%;
                            height: 7%;
                            font-weight:bold ;
                            padding-left: 4.5%;
                            font-size: larger;
                            color: black bold;
                          
                            background-color: var(--white);
                         
                     }
                     
                     .ii{
                            width: 20%;
                            height: 20%; 
                            margin-bottom: 5mm; 
                     }
                     .di1{
                            border-radius: 4%;
                            width: 40%;  
                            border-bottom: #797777 3px solid ;
                            margin-left: 30%;
                     }
                     
                     .divv{
                            margin-left: 80%; 
                     }
                     .hom{
                            width:13.5% ;
                            height: 5%;
                            margin-bottom: -26%;
                        
                     }
                     label{
                            font-weight: bold;
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
</div><img class="log1" src="../image/l.png" alt="" ><br><img class="log2" src="../image/l2.png" alt=""></header>
<img class="p1" src="../image/44.png" alt=""><br><br>
    
<?php
echo "<br>";
include "../M/composant.php";
 if (isset($_GET['idcmd'])) {
     $id = $_GET['idcmd'];
 } else     header('Location:accueil.php');

include("../C/connexion.php");
$sql = $conn->query("SELECT * FROM composants where id='$id'");
if (!$sql) {
    echo "Lecture impossible, code";
} else {
    $sql->setFetchMode(PDO::FETCH_OBJ);
    $com = $sql->fetch();
}
echo "<div class=di1> "." <img class=ii title=$com->id src=../image/$com->image ><span class=di><p class=p11>$com->designation<br><br>Qte stock: $com->quantite<br><br> <b>Prix :$com->prix </b>
<br><br><br></p></span></div><br>";

?>
<br><br>
<form action="../C/controlePanier.php" method="POST">
    
        <center>
            <label for="id">Id Composant :</label>
             <input name="id" type="text" value="<?= $id ?> "class="sub1"  /> 
        
     
     &nbsp;&nbsp;&nbsp;&nbsp; <label for="qte">Quantité à commander:</label>
     <input name="qte" type="number" min="1" max="<?=$com->quantite ?>"widht="25%"class="sub1" /> <br><br><br>
       
       
     <input type="submit"class="sub" name="submit" value="COMMANDER" >
     </center>
      
   
</form>
<form action="">
<br><br><hr>
<footer class="footer">
        <div class="container">
            <div class="item-footer">
                <h2>Location</h2>
                <p>
                    <i class="fa-solid fa-map-pin"></i>
                    Sfax - Bir Ali Ben Khalifa -  3040
                </p>
            </div>
            <div class="item-footer">
                <h2>Our Sponsor</h2>
                <p>
                    CLUB ROBOTIQUE <br>
                    ROBOT GAME <br>
                    ROBO V4 <br>
                    ENET COM <br>
                </p>
            </div>
            <div class="item-footer">
                <h2>Links</h2>
                <ul>
                    <li class="links-site"><a href="#">Home</a></li>
                    <li class="links-site"><a href="#">Menu</a></li>
                    <li class="links-site"><a href="#">Team</a></li>
                    <li class="links-site"><a href="#">Panier</a></li>
                    <li class="links-site"><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="item-footer">
                <h2>Our Social Media</h2>
                <ul class="links-footer">
                    <li><a href="https://www.facebook.com/Omar.Bouazizi.11" target="_blank"><i class="fa-brands fa-square-facebook"></i>Facebook</a></li><br>
                    <li><a href="https://www.instagram.com/bougoffaAssem15/" target="_blank"><i class="fa-brands fa-square-instagram"></i>Instagram</a></li><br>
                    <li><a href="https://twitter.com/BougoffaAssem" target="_blank"><i class="fa-brands fa-square-twitter"></i>Twitter</a></li><br>
                    <li><a href="https://wa.me/0093774888" target="_blank"><i class="fa-brands fa-square-whatsapp"></i>Whatsapp</a></li>
                </ul>
            </div>
        </div>
    </footer>
<style>
.footer{
    margin-top: 7rem;
    background-color:#00EC9B;
}
.footer .container{
    display: flex;
    justify-content: space-between;
    padding: 1rem 2rem;
}
.footer h2{
    position: relative;
    color: black;
    padding: 1rem 0;
    font-size: 1.3rem;
    margin-bottom: 1rem;
}
.footer h2::after{
    content: '';
    position: absolute;
    left: 0;
    bottom: 10px;
    width: 30px;
    height: 2px;
    background-color: white;
}
.footer .fa-solid{
    font-size: 1.3rem;
    color: red;
    margin-right: 5px;
}
.footer p{color: var(--gray);
    font-weight: bold;
    cursor: pointer;
    /* color: white; */
    line-height: 2.5;
    max-width: 300px;
}
.footer a:hover{
    color: red;
}
.footer ul .links-site{
    margin: 14px 0;
}
.footer ul li a{
    text-transform: capitalize;
    cursor: pointer;
    color: white;
    padding: 5px 0;
    text-decoration: none;
    color: var(--gray);
    font-weight: bold;
}
.footer .links-footer i{
    font-size: 2.15rem;
    margin-bottom: 8px;
    margin-right: 10px;
    vertical-align: middle;
    color: var(--gray);
    font-weight: bold;
}</style>
 
   
</form>
</body>

</html>