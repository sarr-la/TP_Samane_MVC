<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity 
 * @Table(name="TypeCompte")
 **/
class Typecompte
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $libele;
    /** @Column(type="string") **/
    
    public function __construct()
    {
        $this->typecompte = new ArrayCollection();
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getLibele()
    {
        return $this->libele;
    }
    public function setLibele($libele)
    {
        $this->libele = $libele;
    }


}

?>