<?php

class Composant
{
    private $id;
    private $designation;
    private $quantite;
    private $prix;
    private $image;

    function __construct($id, $designation, $quantite, $prix, $image)
    {
        $this->id = $id;
        $this->designation = $designation;
        $this->quantite = $quantite;
        $this->prix = $prix;
        $this->image = $image;
       
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
            $s = "<tr> <td> $this->id </td><td> $this->designation </td><td> $this->quantite </td><td> $this->prix </td><td> $this->image </td></tr>";
       return $s ;
        }
    

        public static function ajouterComposant($composant)
        {
            include("../C/connexion.php");

            $nb = $conn->exec("insert into composants values('$composant->id','$composant->designation',$composant->quantite,'$composant->prix','$composant->image')") or die(print_r($conn->errorInfo()));
             return $nb;
        }


        public static function supprimerComposant($id)
        {
            include("../C/connexion.php");
            $nb = $conn->exec("delete from composants where id='$id'");
            
            return $nb;
        }
        public static function modifierComposant($comp)
        {
            include("../C/connexion.php");
            $nb = $conn->exec("update composants SET  designation = '$comp->designation', quantite = $comp->quantite, prix=$comp->prix WHERE id = '$comp->id'") or die(print_r($conn->errorInfo()));

            return $nb;
        }


        public static function affichercomposant()
        {
            include("../C/connexion.php");
            $listcomposant = [];
            $sql = $conn->query("select * from composants");
            $resultat = $sql->fetchAll();

            foreach ($resultat as $ar) {


                $listcomposant[] = new Composant(
                    $ar['id'],
                    $ar['designation'],
                    $ar['quantite'],
                    $ar['prix'],
                    $ar[4]
                );

            }
            return $listcomposant;
        }
        public static function chercherComposant($designation)
        {
            include("../C/connexion.php");
           
            $sql = "SELECT * FROM composants WHERE 1=1";
            if (!empty($designation)) {
                $sql .= " AND designation LIKE :designation";
            }
            
            
     
            $stmt = $conn->prepare($sql);
           
            if (!empty($designation)) {
                $stmt->bindValue(':designation', "%$designation%", PDO::PARAM_STR);
            }
          
            
            // Exécuter la requête de recherche
            $stmt->execute();
            // Vérifier si la requête a renvoyé des résultats
            $resultat = $stmt->fetchAll();
            foreach ($resultat as $ar) {


                $listcomposant[] = new Composant(
                    $ar['id'],
                    $ar['designation'],
                    $ar['quantite'],
                    $ar['prix'],
                    $ar[4]
                );

            }
            return $listcomposant;
        }
}
?>