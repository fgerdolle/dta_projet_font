<?php 
$title = 'Delete Prospect'; 
$css = 'page4.css';

?>

<?php 
ob_start(); 
?>

<div class="alert alert-success" role="alert">Prospect has been deleted</div>

<br />
<div>          
	<button><a href="ProspectsController.php" class="btn black-background">
	 Retour liste des Prospects 
	</a>
</div>

<?php 
$content = ob_get_clean(); 
?>

<?php 
require('../template/template.php'); 
?>