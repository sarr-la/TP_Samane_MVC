<?php
/* Smarty version 3.1.30, created on 2020-08-12 18:28:32
  from "/opt/lampp/htdocs/TP_Samane_MVC/Mysamanemvc/src/view/compte/accueilcompte.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f3418b0e77849_39255292',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f30a00ec3b91f915ddb36f71741686e7dcfae6d' => 
    array (
      0 => '/opt/lampp/htdocs/TP_Samane_MVC/Mysamanemvc/src/view/compte/accueilcompte.html',
      1 => 1597248353,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3418b0e77849_39255292 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <title>OuvertureCompte</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/OuvertureCompte.css">
 </head>
<body>

    <form method="post" action = "<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Form/add" id="formtypecompte">

<fieldset id="yakhine">
    <legend id="legendtypecompte">
        information compte:
    </legend>
    <div>
        <label for="compte" id="laboptcompte"> Veuillez choisir le type de compte !</label><br/><br/>
        <select name="typecompte" id="typecompte" onchange="verifyTypecompte()" >
            <option value="0">Veuillez choisir type de compte</option>
            <option value="epargne">compte Eparge</option>
            <option value="courant">compte Courant</option>
            <option value="bloque">compte Bloqué</option>
        </select>
    </div></br></br>

    <div class="dateouverture" id="dateOuv">
       <label>Date d'ouverture</label>
       <input type="date" name="dateouverture" id="dateouverture">
    </div >
    <div class="datedébut" id="dateDébut">
        <label>Date Début</label>
        <input type="date" name="datedébut" id="datedébut">
     </div >
     <div class="datefin" id="dateFin">
        <label>Date Fin</label>
        <input type="date" name="datefin" id="datefin">
     </div >
    <div class="numCompte" id="numCompte">
        <label>numéro compte</label>
        <input type="number" name="numCmpte" id="numcompte">
     </div>
     <div class="numAgence" id="numAg">
        <label>numéro d'agence</label>
        <input type="number" name="numAgence" id="numag">
     </div>
     <div class="cleRip" id="clerip">
        <label>clé rip</label>
        <input type="number" name="cleRip" id="cleriP">
     </div>
     <div class="Agios" id="agios">
        <label>Agios</label>
        <input type="string" name="Agios" id="agioS">
     </div>
     <div class="fraisouverture" id="fraisouverture">
        <label>Frais d'ouverture</label>
        <input type="string" name="Frouverture" id="FrouverturE">
     </div>
     <div class="etat" id="etat">
        <label>Etat</label>
        <input type="number" name="Etat" id="etaT">
     </div>
     <div class="solde" id="solde">
        <label>Solde</label>
        <input type="number" name="Solde" id="soldE">
     </div><br>

     <button id= "validatecompte" type="submit" onclick="verifytypechamps(), validatedCompte()" name="btn">Valider</button>
    </form>
</fieldset>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
src/view/compte/Compte_CU.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
