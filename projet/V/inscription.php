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
                     header{ background-image: url("../image/1.png");
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
                     .p1{ line-height: 40px;
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
                     margin-top: -32mm;
                   }
                   input{
                     border-radius: 1%;
                     width:12% ;
                     margin-left: 9%;
                     margin-bottom: 1%;
                   }
                 
                   label{margin-left: 1%;
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
                 .inp{
                     width: 12%;
                     height: 4%;
                     color: white;
                     background-color: #000;
                     margin-left: 5%;
                     font-weight: bold;
                      border-radius: 4%;
                      margin-left: 9%;
                       background-color: var(--blue);
                  
                   }
                   .inp:hover{    border:4px solid black;}
                   .sub1{
                     width: 12%;
                     height: 4%;
                     font-weight:bold ;
                     padding-left: 0.5%; 
                     font-size: larger;
                     color: black bold;
                   
                     background-color: var(--white);
                     
                 }

    </style>


</head>

<body>

<header><img class="log1" src="../image/l.png" alt=""><br><img class="log2" src="../image/l2.png" alt=""></header>
<img class="p1" src="../image/44.png" alt=""><br><br>
    <form action="../C/controUtilisateur.php" method="POST">
<center>
    <a href="authentification.php" class="retour">Retour</a><br><br><br>
    <div>

   <label for=""> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EMAIL</label><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; PASSWORD</label><br><br>
   <input type="email" name="email"class="sub1" required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="sub1"type="password" name="password" id="password" required><br><br>

   
			

      <label>NOM PRENOM</label><label >&nbsp;&nbsp;&nbsp;CIN</label><br><br>
			<input type="text" name="nom" id="prenom"class="sub1" required minlength="8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="number" name="cin" id="cin"class="sub1" required>
      
			<br><br>

      <label>DATE NAISSANCE</label><label >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><br><br>
      <input type="text" name="dat" id="dat" placeholder="format: 2023-12-31" class="sub1" required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <!-- <input type="number" name="role" id="role"class="sub1"  min="0" max="1" placeholder="0" disabled><br><br> -->
      
			

      <input type="submit" name="submit" value="S'inscrire" class="inp">
      <p class="hot"></p>
      

      </div>
</center>
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
                    <li><a href="https://www.facebook.com/Bougoffa.Assem" target="_blank"><i class="fa-brands fa-square-facebook"></i>Facebook</a></li><br>
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
<?php
// include("utilisateur.php");
// //affichage de tous 

// $listc= Utilisateur::afficherutilisateur();
// echo "<h3>La liste de tous les composants</h3>";
// echo "<table class='tab' border='2'>";
// echo "<tr><th>email</th><th>pas</th><th>nom</th><th>cin</th><th>date</th><th>role</th</tr>";

//     foreach ($listc as $com) {
//         echo "<tr><td>" . $com->email . "</td>";
//         echo "<td>" . $com->password . "</td>";
//         echo "<td>" . $com->nom . "</td>";
//         echo "<td>" . $com->cin . "</td>";
//       echo "<td>" . $com->dat . "</td>";
//         echo "<td>" . $com->role . "</td>";
      
//         // echo "<td><a href='ControlArticle.php?refsupp=" . $Art->reference . "'>Supprimer</a></td>";
//         echo "</td></tr>";
// }
// echo "</table>";


?>
</body>

</html>