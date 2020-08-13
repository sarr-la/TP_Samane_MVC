//var email = document.forms['form']['email'];
/*var email_error = document.getElementById('email_error');
var pass_error = document.getElementById('pass_error');
var telephone = document.getElementById('telephone');
var telephone_error = document.getElementById('telephone_error');

 //email.addEventListener('textInput', email_Verify);
 //telephone.addEventListener('textInput', telephone);

function validated(){
    if(email.value.length < 9){
        email.style.border = "1px solid red";
        email_error.style.display = "block";
        email.focus();
        return false; 
     }
     
     if  (telephone.value.length <8){
         telephone.style.border = "1 px solid red";
         telephone_error.style.display = "block";
         telephone.focus();
         return true; 
     }
 }
function email_Verify(){

  if  (email.value.length <=8){
        email.style.border = "1 px solid silver";
         email_error.style.display = "none";
         return true; 
    }
}

*/
/*function client(){
var CLIENT = document.getElementById("TYPECLIENT");
var clientmoral = document.getElementById("clientmoral");
var clientphysique = document.getElementById("physique");
var client = document.getElementById("cliente").value;

if(client === "ClientPhysique"){
    CLIENT.style.display = "block";

if(client === "ClientMoral"){
    clientmoral.style.display = "block";
}
}
}
*/
 function verifyTypeclient(){
     var typeclient = document.getElementById("typeclient");
     if(typeclient.value === "moral"){
        // alert("ok");
      //  pour griser les champs
    //  document.getElementById("nom").disabled = true; 
   // pour cacher les champs
        document.getElementById("champsnom").style.display = "none";
        document.getElementById("champsprénom").style.display = "none";
        document.getElementById("champsadresse").style.display = "none";
        document.getElementById("champsemail").style.display = "none";
        document.getElementById("champstelephone").style.display = "none";
        document.getElementById("chamsprofession").style.display = "none";
        document.getElementById("champssalaire").style.display = "none";
        document.getElementById("champsdatenaiss").style.display = "none";
     }
     

    if(typeclient.value === "salarié"){
       
       

      }


      if(typeclient.value === "nonsalarié"){
        document.getElementById("champssalaire").style.display = "none";
        document.getElementById("raisonsociale").style.display = "none";
        document.getElementById("adentreprise").style.display = "none";
        document.getElementById("ninea").style.display = "none";
        document.getElementById("champsdatenaiss").style.display = "none";
        document.getElementById("chamsprofession").style.display = "none";
        document.getElementById("champsentreprise").style.display = "none";
      }
}


function verifyTypecompte(){
    var typecompte = document.getElementById("typecompte");
    if(typecompte.value === "epargne"){
    document.getElementById("agios").style.display = "none";
    document.getElementById("dateOuv").style.display = "none";
    document.getElementById("dateDébut").style.display = "none";
    document.getElementById("dateFin").style.display = "none";
   
    }

    if(typecompte.value === "courant"){

        document.getElementById("dateOuv").style.display = "none";
        document.getElementById("dateDébut").style.display = "none";
        document.getElementById("dateFin").style.display = "none";
        document.getElementById("numAg").style.display = "none";
        document.getElementById("fraisouverture").style.display = "none";
}

if(typecompte.value === "bloque"){
    document.getElementById("dateOuv").style.display = "none";
    document.getElementById("numAg").style.display = "none";
    document.getElementById("agios").style.display = "none";
}

}

function verif() {
    var typeclient = document.getElementById("typeclient");
    var nom = document.getElementById("nom");
    var prenom = document.getElementById("prenom");
    var adresse = document.getElementById("adresse");
    var email = document.getElementById("email");
    var telephone = document.getElementById("telephone");
    var profession = document.getElementById("professioN");
    var salaire = document.getElementById("salairE");
    var raisonsociale = document.getElementById("raisonsocialE");
    var entreprise = document.getElementById("entreprisE");
    var adressentreprise = document.getElementById("adressentreprisE");
    var ninea = document.getElementById("nineA");
    var datenaiss = document.getElementById("datenaisS");

    if(typeclient.value === "moral"){
       if( entreprise.value === "" || adressentreprise.value === "" || ninea.value === "" || raisonsociale.value === ""){
           alert("tous les champs sont obligatoires!")

           
        }else{
            alert("Les données sont envoyées")
        }
    
       

    }else if(typeclient.value === "salarié"){
        if (nom.value === "" || prenom.value === "" || adresse.value === "" ||  entreprise.value ==="" || telephone.value === "" 
         || email.value === "" || salaire.value === "" ) {
            alert("Veuillez remplir tous les champs!");
    
        
        }else{
            alert("Les données sont envoyées")
        }
    

    }else if(typeclient.value === "nonsalarié"){
        if( nom.value === "" || prenom.value === "" || adresse.value === "" || email.value === "" || telephone.value === "") {
            alert("Veuillez remplir tous champs!")
        
        }else{
            alert("Les données sont envoyées")
        }
    

}
}

function verifytypechamps() {
    var typecompte = document.getElementById("typecompte");
    var dateOverture = document.getElementById("dateouverture");
    var dateDebut = document.getElementById("datedébut");
    var datefin = document.getElementById("datefin");
    var numCompte = document.getElementById("numcompte");
    var numAgence = document.getElementById("numag");
    var clerip = document.getElementById("cleriP");
    var agios = document.getElementById("agioS");
    var raisonsociale = document.getElementById("RsocialE");
    var entreprise = document.getElementById("EntreprisE");
    var fraisouverture = document.getElementById("FrouverturE");
    var etat = document.getElementById("etaT");
    var solde = document.getElementById("soldE");
    var numid = document.getElementById("NumiD");
    var adress = document.getElementById("adressE");
   
    if(typecompte.value === "epargne"){
        if(numCompte.value === "" || numAgence.value === "" || clerip.value === "" || fraisouverture.value === "" || etat.value === "" || solde.value === ""){
            alert("Veuillez remplir tous les champs!")

        }else{
            alert("Les données sont envoyées")
        }
    
 
     }else if(typecompte.value === "bloque"){
         if (dateDebut.value === "" || datefin.value === "" || numCompte.value === "" ||  clerip.value ==="" || fraisouverture.value === "" 
          || etat.value === "" || solde.value === "" ) {
             alert("Veuillez remplir tous les champs!");

        }else{
                alert("Les données sont envoyées")
     
        }
 
     }else if(typecompte.value === "courant"){
         if( numCompte.value === "" || clerip.value === "" || agios.value === "" || etat.value === "" || solde.value === "") {
             alert("Veuillez remplir tous les champs!")

            }else{
                alert("Les données sont envoyées")
     
         }
}

}

function validatedClient(){

    var typeclient = document.getElementById("typeclient");
    var nom = document.getElementById("nom");
    var prenom = document.getElementById("prenom");
    var adresse = document.getElementById("adresse");
    var email = document.getElementById("email");
    var telephone = document.getElementById("telephone");
    var profession = document.getElementById("professioN");
    var salaire = document.getElementById("salairE");
    var raisonsociale = document.getElementById("raisonsocialE");
    var entreprise = document.getElementById("entreprisE");
    var adressentreprise = document.getElementById("adressentreprisE");
    var ninea = document.getElementById("nineA");
    var datenaiss = document.getElementById("datenaisS");


}