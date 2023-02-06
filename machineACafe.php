<?php
class MachineACafe {

    // Attributs privés
    private $marque;
    private $dosette;
    private $enFonction;
    private $sucre;
    private $monnayeur;

    // Méthode magique __construct()
    public function __construct($marque) {
        $this->marque = $marque;
        $this->enFonction = true;
        $this->sucre = 0;
        $this->monnayeur = 0;
    }

    // Fonction publique qui allume la cafetière
    public function allumage() {
        if($this->enFonction) {
            echo $this->marque . " est déjà en fonction.";
        } else {
            $this->enFonction = true;
            echo $this->marque . " est maintenant en fonction.";
        }
    }

    // Fonction publique qui allume la cafetière
    public function eteindre() {
        if($this->enFonction) {
            echo $this->marque . " est déjà en éteinte";
        } else {
            $this->enFonction = false;
            echo $this->marque . " est maintenant éteinte.";
        }
    }

    public function mettreUneDosette() {
        if(!$this->enFonction) {
            echo $this->marque . " est éteinte. Impossible de mettre une dossette";

        } else {
            $this->dosette = 1;
            echo "Je met une dosette.";
        }
    }

    public function ajouterSucre($quantite) {
        if(!$this->enFonction) {
            echo $this->marque . " est éteinte. Impossible de mettre du sucre";

        } else {
            $this->sucre += $quantite;
            echo "J'ai ajouté " . $quantite . " grammes de sucre";
        }
    }

    public function payer($montant) {
        if(!$this->enFonction) {
            echo $this->marque . " est éteinte. Impossible de payer";
        } else {
            $this->monnayeur += $montant;
            echo "J'ai payé " . $montant . " euros";
        }
    }

    public function afficherEtat() {
        if(!$this->enFonction) {
            echo $this->marque . " est éteinte.";
        } else {
            echo "La machine est en fonction";
        }
        echo " Il y a " . $this->sucre . " grammes de su cre dans la machine.";
        echo " Il y a " . $this->monnayeur . " euros dans le monnayeur";
    }


    /**
     * Get the value of dosette
     */ 
    public function getDosette()
    {
        return $this->dosette;
    }

    /**
     * Set the value of dosette
     *
     * @return  self
     */ 
    public function setDosette($dosette)
    {
        $this->dosette = $dosette;

        return $this;
    }

    /**
     * Get the value of marque
     */ 
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set the value of marque
     *
     * @return  self
     */ 
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get the value of enFonction
     */ 
    public function getEnFonction()
    {
        return $this->enFonction;
    }

    /**
     * Set the value of enFonction
     *
     * @return  self
     */ 
    public function setEnFonction($enFonction)
    {
        $this->enFonction = $enFonction;

        return $this;
    }

    /**
     * Get the value of sucre
     */ 
    public function getSucre()
    {
        return $this->sucre;
    }

    /**
     * Set the value of sucre
     *
     * @return  self
     */ 
    public function setSucre($sucre)
    {
        $this->sucre = $sucre;

        return $this;
    }

    /**
     * Get the value of monnayeur
     */ 
    public function getMonnayeur()
    {
        return $this->monnayeur;
    }

    /**
     * Set the value of monnayeur
     *
     * @return  self
     */ 
    public function setMonnayeur($monnayeur)
    {
        $this->monnayeur = $monnayeur;

        return $this;
    }
}