

<?php
class panier {
    private $composant;
    private $id;
    private $designation;
    private $quantite;
    private $prix;
    private $image;

    public function __get($attr)
	{
		if (!isset($this->$attr)) return "erreur";
		else return ($this->$attr);
	}
	//set
	public function __set($attr, $value)
	{
		$this->$attr = $value;
	}
   
    public function __toString()
	{
		include("../C/connexion.php");
		$prix = 0;
		
        $s="";
        		foreach ($this->composant as $id => $qte) {
			$sql = $conn->query("SELECT * FROM composants where id='$id'");
			if (!$sql) {
				echo "Lecture impossible, code";
			} else {
				$sql->setFetchMode(PDO::FETCH_OBJ);
				$l = $sql->fetch();
				$p = $l->prix;
				$des = $l->designation;
                $image=$l->image;
				$prix += $p * $qte;
			}
			$s = $s .   "<div class=di1> "." <img class=ii title=$id src=../image/$image ><span class=di><p class=p11>$des<br><br>Qte Commandeé: $qte<br><br>Prix : <h4>$p TND</h4>
            <br><br><br></p></span></div>";
		}
		$s = $s . " <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Prix Total =</b><h3> $prix TND</h3><br><br>";
		return $s;
	}
    public function addPanier($id,$quantite){
        $this->composant[$id]=$quantite;
    }
    public function __construct()
	{
		if (!isset($_SESSION)) {
			session_start();
		}
		if (!isset($_SESSION['panier'])) {
			$_SESSION['panier'] = array();
		}
	}

    public function updateBD()
	{
		include("../C/connexion.php");
		foreach ($this->composant as $id => $qte) {
			$conn->exec("UPDATE composants SET quantite = quantite - $qte WHERE id='$id'");
		}
	}

}
?>