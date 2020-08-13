<?php
/*==================================================
MODELE MVC DEVELOPPE PAR Ngor SECK
ngorsecka@gmail.com
(+221) 77 - 433 - 97 - 16
PERFECTIONNEZ CE MODELE ET FAITES MOI UN RETOUR
POUR TOUTE MODIFICATION VISANT A L'AMELIORER.
VOUS ETES LIBRE DE TOUTE UTILISATION.
===================================================*/
use libs\system\Controller;
use src\model\CompteRepository;

class FormController extends Controller{

    public function __construct(){
        parent::__construct();
    }
    
    public function accueilcompte(){  
        
        return $this->view->load("compte/accueilcompte");   
    }

    public function liste(){
        $comptedb = new CompteRepository();
        $data["listeCompte"] = $comptedb->listeCompte();
        return $this->view->load("compte/liste", $data);
    }

 /** 
     * url pattern for this method
     * localhost/projectName/Compte/add
     */
    public function add(){
        $tdb = new CompteRepository();
        if(isset($_POST['btn']))
        {
            //var_dump($_POST);
           // die();
            extract($_POST);
            $data['ok'] = 0;
            //if(!empty($cleRip) && !empty($Etat) && !empty($typecompte)&& !empty($datedébut)&& !empty($datefin) 
           // && !empty($numCmpte)&& !empty($setFrouverture) && !empty($Solde)&& !empty($numAgence)&& !empty($Agios)) {
                
                $compteObject = new Compte();
                
                $compteObject->setCleRip(addslashes($cleRip));
                $compteObject->setEtat(addslashes($Etat));
                $compteObject->setTypecompte(addslashes($typecompte));
                $compteObject->setDatedebut(addslashes($datedébut));
                $compteObject->setDatefin(addslashes($datefin));
                $compteObject->setNumCmpte(addslashes($numCmpte));
                $compteObject->setFrouverture(addslashes($Frouverture));
                $compteObject->setSolde(addslashes($Solde));
                $compteObject->setNumAgence(addslashes($numAgence));
                $compteObject->setAgios(addslashes($Agios));


                $ok = $tdb->addCompte($compteObject);
                $data['ok'] = $ok;
        //    }
           // return $this->view->load("compte/add", $data);
        }else{
            return $this->view->load("compte/accueilcompte");
        }
    }
   /** 
     * url pattern for this method
     * localhost/projectName/Compte/update
     */
    public function update(){
        $tdb = new CompteRepository();
        if(isset($_POST['modifier'])){
            extract($_POST);
        $compteObject = new Compte();
        $compteObject->setId($id);
        $compteObject->setCleRip($cleRip);
        $compteObject->setEtat($Etat);
        $compteObject->setTypecompte($typecompte);
        $compteObject->setDatedebut($datedébut);
        $compteObject->setDatefin($datefin);
        $compteObject->setNumCmpte($numCmpte);
        $compteObject->setFrouverture($Frouverture);
        $compteObject->setSolde($Solde);
        $compteObject->setNumAgence($numAgence);
        $compteObject->setAgios($Agios);
        
        $ok = $tdb->updateCompte($compteObject);
        }
    }    
}
   //return $this->liste();



/** 
     * url pattern for this method
     * localhost/projectName/Compte/delete/value
     */
    function delete($id){
        
        $tdb = new CompteRepository();
        $tdb->deleteCompte($id);
        return $this->liste();
    }
  
    /** 
     * url pattern for this method
     * localhost/projectName/Compte/edit/value
     */
    function edit($id){
        
        $tdb = new CompteRepository();
        
        $data['compte'] = $tdb->getCompte($id);
        var_dump($tdb->getCompte($id));
        return $this->view->load("compte/edit", $data);
    }


    
?>