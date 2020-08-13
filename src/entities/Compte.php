<?php
use Doctrine\ORM\Annotation as ORM;

/**
 * @Entity @Table(name="Compte")
 **/
class Compte
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $cleRip;
    /** @Column(type="integer") **/
    private $Etat;
    /** @Column(type="string") **/
    private $typecompte;
     /** @Column(type="string") **/
     private $datedebut;
     /** @Column(type="string") **/
     private $datefin;
     /** @Column(type="integer") **/
     private $numCmpte;
     /** @Column(type="string") **/
     private $Frouverture;
     /** @Column(type="string") **/
     private $Solde;
     /** @Column(type="integer") **/
     private $numAgence;
      /** @Column(type="string") **/
      private $Agios;
    /**
     * Many Compte have one typecompte. This is the owning side.
     * @ManyToOne(targetEntity="typecompte", inversedBy="Compte")
     * @JoinColumn(name="typecompte_id", referencedColumnName="id")
     */
    
    public function __construct()
    {

    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getCleRip()
    {
        return $this->cleRip;
    }
    public function setCleRip($cleRip)
    {
        $this->cleRip = $cleRip;
    }

    public function getEtat()
    {
        return $this->Etat;
    }
    public function setEtat($Etat)
    {
        $this->Etat = $Etat;
    }

    public function getTypecompte()
    {
        return $this->typecompte;
    }
    public function setTypecompte($typecompte)
    {
        $this->typecompte = $typecompte;
    }

    public function getDatedebut()
    {
        return $this->datedebut;
    }
    public function setDatedebut($datedebut)
    {
        $this->datedebut = $datedebut;
    }

    public function getDatefin()
    {
        return $this->datefin;
    }
    
    public function setDatefin($datefin){
    
    $this->datefin = $datefin;
    }
    
    
    
    public function getNumCmpte()
    {
        return $this->numCmpte;
    }
    
    public function setNumCmpte($numCmpte){
    
    $this->numCmpte = $numCmpte;
    
    }
    
    
    
    public function getFrouverture()
    {
        return $this->Frouverture;
    }
    
    public function setFrouverture($Frouverture){
    
    $this->Frouverture = $Frouverture;
    }
    
    
    
    public function getSolde()
    {
        return $this->Solde;
    }
    
    public function setSolde($Solde){
    
    $this->Solde = $Solde;
    }
    
    
    
    public function getNumAgence()
    {
        return $this->numAgence;
    }
    
    public function setNumAgence($numAgence){
    
    $this->numAgence = $numAgence;
    }
    
    
    
    
    public function getAgios()
    {
        return $this->Agios;
    }
    
    public function setAgios($Agios){
    
    $this->Agios = $Agios;
    }
    




}

?>