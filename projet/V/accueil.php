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
             margin-top: -41mm;
        }
         
       .di1:hover{
             background-color: #00EC9B;
             border:2px solid white;
        }
      
          b{
             color: green;
        
        }

        .imcomp{
             width: 0%;
             height: 0%;
             margin-left: 60%;
             padding-left: 20%;
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
             border-radius: 4%;
             width: 40%;  
             border-bottom: #797777 3px solid ;
             margin-left: 30%;
        }

        .voir{
             height: 7%;
             width: 8%;
             margin-left: 79%;
             margin-top: 5%;
             border:3px #000 bold;
             background-color: #000;
             color: white;
             font-weight: bold;
        }
        .voir:hover{
             color: #000;
             background-color:var(--white);
        }
        .hom{
             width:13.5% ;
             height: 5%;
             margin-bottom: -35%;
           
        }
        .pan{
             margin-left: 79%;
             margin-bottom:0%;
             width:9% ;
             height: 7%;
             margin-top: -15mm;
        }
        .ach{
             margin-top: 5%;
             margin-left: 74%; 
        }
        
        .divv{
             margin-left: 83%; 
        }

        .search{
             border-radius: 1%;
             background-color:#00EC9B;
             width: 21%;
             height: 4.5%;
             margin-left: 48%;
             font-weight:bold ;
             padding-left: 5%;
             font-size: larger;
             color:var(--gray) bold;
           
        }
        .form2{
               margin-top: -30mm;
        }
        .sea{
             background-image: url("../image/cher.png");
             background-color:#00EC9B;
             border: none;
             background-repeat: no-repeat;
             background-size: 35%;
             height: 4%;
             padding-left: 5%;
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
        select{
             border: #000 solid -2px;
             border-radius:0.5%;
             height: 6%;
             margin-left: 3%;
             margin-top: -10mm;
             background-color:#797777;
             font-weight: bold;
        }
        .D1{
             padding-left: 0%;
             font-weight: bold;
             color: black;
        }
        .D1:hover{
             border: #000 solid 1px;
             background-color:#00EC9B;
             color: black;
             font-size:medium; 
             font-weight: bold;
        }
        .D2{
             padding-left: 0%;
             font-weight: bold;
             color: black;
         
        }
        .D2:hover{
             border: #000 solid 1px;
             background-color: var(--blue);
             color: black;
             font-size:medium; 
             font-weight: bold;
        }
        
        .D3{
             padding-left: 0%;
             font-weight: bold;
             color: black;
         
        }
        .D3:hover{
             border: #000 solid 1px;
             background-color:brown;
             color: black;
             font-size:medium; 
             font-weight: bold;
        }
        .D4{
             padding-left: 0%;
             font-weight: bold;
             color: black;
            
        }
        .D4:hover{
             border: #000 solid 1px;
             background-color:blueviolet;
             color: black;
             font-size:medium; 
             font-weight: bold;
        }
        input{
             outline: none;
        }
    </style>

<!-- <link rel="stylesheet" href="css/acceuil1.css"> -->
</head>

<body>

<header>

<div class="divv">
<a href="accueil.php"><img class="hom" src="../image/download5.png" alt="" title="Home"></a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href=""><img class="hom" src="../image/download1.png" alt=""title="Compte" ></a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="../C/controlePanier.php"><img class="hom" src="../image/download2.png" alt="" title="Panier"></a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href=""><img class="hom" src="../image/download3.png" alt=""title="deconnection" ></a>&nbsp;&nbsp;&nbsp;&nbsp;
</div>
<img class="log1" src="../image/l.png" alt="" ><br>
<form class="form2" name="form2" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

<input type="search" class="search" name="des" value=""placeholder="NOM COMPOSANT"> <input type="submit" name="chercher" class="sea" value="  ">
</form><br><br><br>

<img class="log2" src="../image/l2.png" alt="">


</header>
<img class="p1" src="../image/44.png" alt=""><br><br>

<br>
    <form action="" method="POST">

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<select size="1" class="D1">
			
            &nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;<option selected value=" KIT ROBOTIQUE">KIT ROBOTIQUE

			</option>
			<option value="Arduino Kit robot suiveur en ligne">Arduino Kit robot suiveur en ligne</option>
			<option value="">Arduino UNO R3 ATmega328P DIP</option>
			<option value=""> Chassis Tortue 2WD</option>
			<option value=""> Chassis 4WD</option>
            <option value=""> Chassis 2WD</option>
			</select>


            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <select size="1" class="D2">
			<option selected value="MODULES ET CAPTEURS">MODULES ET CAPTEURS
			</option>
			<option value="">Afficheur 128*64 LCD OLED Bleu Et Jaune</option>
			<option value="Pch76">Caméra 0V7670 Pour Arduino</option>
			<option value="Ped01"> Module Ultrason HY-SRF05</option>
			<option value="Ped02">Module Capteur De Lumière Ambiante  </option>
            <option value="">Capteur De Tension C11A063 0-25V</option>
            <option value="">Capteur De Force Résistif 100g-10kg</option>
            <option value="">Capteur De Niveau D'eau À Flotteur 220V</option>
			</select>


            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <select size="1" class="D3">
			<option selected value="CARTES DE DÉVELOPPEMENT">CARTES DE DÉVELOPPEMENT
			</option>
			<option value="Jsk01">Arduino UNO R3 ATmega328P DIP</option>
			<option value="Pch76">Carte Micro:Bit BBC</option>
			<option value="Ped01">Carte Micro:Bit BBC </option>
			<option value="Ped02">Arduino PRO MICRO ATmega 32U4 </option>
			</select>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <select size="1" class="D4">
			<option selected value=" MOTEURS">MOTEURS
			</option>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<option value="Jsk01">Moteur Réducteur 6V N20</option>
			<option value="Pch76">Servomoteur MG995</option>
			<option value="Ped01"> Moteur Pas À Pas + Connecteur 4 Fils</option>
			<option value="Ped02">Kit Moteur 12V 25GA370 </option>
			</select>
        

    </form>
<form action="accueil2.php">
    <input type="submit" value="Suivant" class="voir">
</form>

       

<?php
include("../M/composant.php");
if (isset($_POST['chercher'])) {
    // $id = isset($_POST['id1']) ? $_POST['id1'] : '';
    $designation = isset($_POST['des']) ? $_POST['des'] : '';
    $listComposant = Composant::chercherComposant($designation);
    foreach ($listComposant as $com) { 
       
        echo "<div class=di1> "." <img class=ii title=$com->id src=../image/$com->image ><span class=di><p class=p11>$com->designation<br>Qte stock: $com->quantite<br><br> Prix :<b>$com->prix TND</b>
     <br><a href='addPanierComposant.php?idcmd=" . $com->id . "'><img class=pan src=../image/pan2.png ><br><i class=ach>ACHETEZ</i></a><br><br><br></p></span></div><br><br>";
        echo "<br><br>";
    }

}else{
$listc= Composant::affichercomposant();
echo "<br>";
echo "<br>";
$i=0;
    foreach ($listc as $com) { 
        if($i<8){
        echo "<div class=di1> "." <img class=ii title=$com->id src=../image/$com->image ><span class=di><p class=p11>$com->designation<br>Qte stock: $com->quantite<br><br> Prix :<b>$com->prix TND</b>
        <br><a href='addPanierComposant.php?idcmd=" . $com->id . "'><img class=pan src=../image/pan2.png ><br><i class=ach>ACHETEZ</i></a><br><br><br></p></span></div><br><br>";
        echo "<br><br>";
}
$i+=1;              
}
}



?>
<form>
<br><br><hr>
<footer class="footer">
        <div class="container">
            <div class="item-footer">
                <h2>Location</h2>
                <p >
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