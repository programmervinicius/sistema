<?php /* Smarty version 3.1.27, created on 2016-03-19 12:45:46
         compiled from "C:\xampp\htdocs\sistema\styles\templates\home\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2907656ed3bea2ad630_85147778%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad1b91bfe51ae8a47b52ac40bfa1ea939974acea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sistema\\styles\\templates\\home\\index.tpl',
      1 => 1458387944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2907656ed3bea2ad630_85147778',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56ed3bea31ec94_27482904',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56ed3bea31ec94_27482904')) {
function content_56ed3bea31ec94_27482904 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2907656ed3bea2ad630_85147778';
?>



  <body>
      
<?php echo $_smarty_tpl->getSubTemplate ('overrall/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="container" style="margin-top: 100px;">
      <div class="jumbotron">
        <h1>Bienvenido al curso!</h1>
        <p class="lead">Plantilla de ejemplo para iniciar el curso de php avanzado.</p>
        <p><a class="btn btn-lg btn-success" href="http://www.prinick.com" role="button">Comenzar!</a></p>
        
        <!-- DELETE / BORRAR botón de donar-->
        <p>
        <center><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="KVHH8KYREXUFS">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form></center>
            <center>También podrías ayudarme con una donación por el curso gratuito ;)</center>
</p>
       <!--  DELETE / BORRAR botón de donar -->   
          
      </div>

   <?php echo $_smarty_tpl->getSubTemplate ('overrall/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>