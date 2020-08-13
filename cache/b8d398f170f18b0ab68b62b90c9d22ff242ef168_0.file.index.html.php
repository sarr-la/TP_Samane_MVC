<?php
/* Smarty version 3.1.30, created on 2020-08-12 13:46:15
  from "/opt/lampp/htdocs/TP_Samane_MVC/Mysamanemvc/src/view/welcome/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f33d687928e16_86353769',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8d398f170f18b0ab68b62b90c9d22ff242ef168' => 
    array (
      0 => '/opt/lampp/htdocs/TP_Samane_MVC/Mysamanemvc/src/view/welcome/index.html',
      1 => 1597231692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f33d687928e16_86353769 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Welcome</title>
		<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css"/>
		<!-- integration de javascript dans le moteur de rendu de vue Smarty -->
		
			<?php echo '<script'; ?>
 language=javascript>
			function load_design() {
			   document.getElementById("design_js").style.color = "#40007d";
			}

			<?php echo '</script'; ?>
>
		
	</head>
	<body onload="load_design()">
		
        
        <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Form/accueilcompte">Chargement de compte</a>
		
	
	</body>
</html><?php }
}
