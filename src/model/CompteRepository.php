<?php
/*==================================================
MODELE MVC DEVELOPPE PAR Ngor SECK
ngorsecka@gmail.com
(+221) 77 - 433 - 97 - 16
PERFECTIONNEZ CE MODELE ET FAITES MOI UN RETOUR
POUR TOUTE MODIFICATION VISANT A L'AMELIORER.
VOUS ETES LIBRE DE TOUTE UTILISATION.
===================================================*/
namespace src\model; 

use libs\system\Model; 
	
class CompteRepository extends Model{
	
	/**
	 * Methods with DQL (Doctrine Query Language) 
	 */
	public function __construct(){
		parent::__construct();
	}

	public function getCompte($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('Compte')->find(array('id' => $id));
		}
	}
	
	public function addCompte($compte)
	{
		if($this->db != null)
		{
			$this->db->persist($compte);
			$this->db->flush();

			return $compte->getId();
		}
	}
	
	public function deleteCompte($id){
		if($this->db != null)
		{
			$test = $this->db->find('Compte', $id);
			if($test != null)
			{
				$this->db->remove($compte);
				$this->db->flush();
			}else {
				die("Objet ".$id." does not existe!");
			}
		}
	}
	
	public function updateCompte($compte){
		if($this->db != null)
		{
			$getCompte = $this->db->find('Compte', $compte->getId());
			if($getCompte != null)
			{
				$getCompte->setCleRib($compte->getCleRib());
                $getCompte->setEtat($compte->getEtat());
                $getCompte->setTypecompte($compte->getTypecompte());
                $getCompte->setDatedebut($compte->getDatedebut());
                $getCompte->setDatefin($compte->getDatefin());
                $getCompte->setNumCmpte($compte->getNumCmpte());
                $getCompte->setFrouverture($compte->getFrouverture());
                $getCompte->setSolde($compte->getSolde());
                $getCompte->setNumAgence($compte->getNumAgence());
                $getCompte->setAgios($compte->getAgios());

				$this->db->flush();

			}else {
				die("Objet ".$compte->getId()." does not existe!!");
			}	
		}
	}
	
	public function listeCompte(){
		if($this->db != null)
		{
			return $this->db->createQuery("SELECT c FROM Compte c")->getResult();
		}
	}
	
	public function listeCompteById($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('Compte')->findBy(array('id' => $id));
		}
	}
	
	public function listeOfCompteById($id)
	{
		if($this->db != null)
		{
			return $this->db->createQuery("SELECT c FROM Compte c WHERE t.id = " . $id)->getSingleResult();
		}
	}

	public function listeOfCompte()
	{
		if($this->db != null)
		{
			return $this->db->getRepository('')->findAll();
		}
	}
	
}