<?php 

/**
 * Objet Compte bancaire
 */
class Compte
{
    // Propriété
    /**
     * Titulaire du compte
     * 
     * @var string
     */
    private $titulaire;

    /**
     * solde de compte
     * 
     * @var float
     */
    private $solde;

    // Constantes 
    const TAUX_INTERETS = 5;

    // Méthodes

    /**
     * Constructeur du compte bancaire
     * 
     * @param string $nom Nom du titulaire
     * @param float $montant Montant du solde à l'ouverture
     */
    public function __construct(string $nom, float $montant = 100)
    {
        //On attribue le nom à la propriété titulaire de l'instance creer 
        $this->titulaire = $nom;

        // On attribue le montant à la propriété solde
        $this->solde = $montant;
    }

    // Accesseurs
    /**
     * Getter de Titulaire - Retourne la valeur du titulaire du compte
     * 
     * @return string
     */
    public function getTitulaire() :string
    {
        return $this->titulaire;
    }

    /**
     * Modifie le nom du titulaire et retourne l'objet
     * @param string $nom Nom du titulaire
     * @return Compte Compte bancaire
     */
    public function setTitulaire(string $nom) : self /*Self est la classe Compte*/
    {
        //On vérifie si on a un titulaire
        if($nom != ""){
            $this->titulaire = $nom;
        }
        return $this;
    }

    /**
     * Retourne le solde du compte
     * @return float Solde du compte
     */
    public function Getsolde() : float
    {
        return $this->solde;
    }

    /**
     * Modifie le solde du compte
     * @param float Solde du compte
     */
    public function Setsolde(float $montant) : self
    {
        if($montant >= 0){
            $this->solde = $montant;
        }
        return $this;
    } 

    /**
     * Déposer de l'argent sur le compte
     * 
     * @param float $montant Montant déposé
     * @return void
     */

    public function deposer(float $montant)
    {
        // On vérifie si le montant est positif*
        if($montant > 0){
            $this->solde += $montant;
        }

    }

    /**
     * Retourne une chaine de caractères affichant le solde
     * 
     * @return string
     */

    public function voirSolde()
    {
        return "Le solde du compte est de $this->solde euros";
    }

    /**
     * Retire un moment du solde du comtpe
     * 
     * @param float $montant Montant à retirer
     * @return void
     */
    public function retirer(float $montant)
    {
        // On vérifie le montant et le solde
        if($montant > 0 && $this->solde >= $montant){
            $this->solde -= $montant;

        }else{
            echo "Montant invalide au solde insuffisante";
        }
        echo $this->decouvert();
    }

    private function decouvert()
    {
        if($this->solde < 0){
            return "Vous êtes à découvert";
        }else{
            return "Vous n'êtes pas à découvert";
        }
    }



}