<?php

class Utilisateur
{
    private $email;
    private $password;
    private $nom;
    private $cin;
    private $dat;
    private $role;

    function __construct($email, $password, $nom, $cin, $dat, $role)
    {
        $this->email = $email;
        $this->password = $password;
        $this->nom = $nom;
        $this->cin = $cin;
        $this->dat = $dat;
        $this->role = $role;
       
    }
   

    public function __get($attr)
    {
        if (!isset($this->$attr)) return "erreur";
        else return ($this->$attr);
    }
    public function __set($attr, $value)
    {
        $this->$attr = $value;
    }
    public function __toString()
    {
        $s = "<tr> <td> $this->email </td><td> $this->password </td><td> $this->nom </td><td> $this->cin </td><td> $this->dat </td><td> $this->role </td></tr>";

    
        return $s;
    }
    public static function ajouterUtilisateur($utilisateur)
    {
        include("../C/connexion.php");

        $nb = $conn->exec("insert into utilisateur values('$utilisateur->email','$utilisateur->password','$utilisateur->nom',$utilisateur->cin,'$utilisateur->dat',$utilisateur->role)") or die(print_r($conn->errorInfo()));

       
        return $nb;
    }

    public static function supprimerUtilisateur($email)
    {
        include("../C/connexion.php");
        $nb = $conn->exec("delete from utilisateur where email='$email'");
        
        return $nb;
    }
    public static function modifierUtilisateur($util)
    {
        include("../C/connexion.php");
        $nb = $conn->exec("update utilisateur SET  nom = '$util->nom', role = $util->role WHERE email = '$util->email'") or die(print_r($conn->errorInfo()));

       
        return $nb;
    }

    public static function afficherutilisateur()
    {
        include("../C/connexion.php");
        $listut = [];
        $sql = $conn->query("select * from utilisateur");
        $resultat = $sql->fetchAll();

        foreach ($resultat as $ar) {


            $listut[] = new Utilisateur(
                $ar['email'],
                $ar['password'],
                $ar['nom'],
                $ar['cin'],
                 $ar[4],
                $ar['role']
            );

        }
        return $listut;
    }

    static function connect($email,$password){
        include("connexion.php");
            
            $sql=$conn->query("SELECT * FROM utilisateur WHERE email='$email' and password ='$password'");
            $sql->setFetchMode(PDO::FETCH_OBJ);
            $resultat=$sql->fetch();
            return $resultat;

        }
}
?>