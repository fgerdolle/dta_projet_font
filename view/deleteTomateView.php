<?php 
$title = 'Delete une tomate'; 
$css = 'page4.css';

?>

<?php 
ob_start(); 
?>

<div class="alert alert-success" role="alert">Tomate has been deleted</div>

<br />
<div>          
	<button><a href="TomateController.php" class="btn black-background">
	 Retour liste des tomates 
	</a>
</div>

<?php 
$content = ob_get_clean(); 
?>

<?php 
require('../template/template.php'); 
?>