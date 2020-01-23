<?php 
$title = 'Delete une salade'; 
$css = 'page4.css';

?>

<?php 
ob_start(); 
?>

<div class="alert alert-success" role="alert">Salade has been deleted</div>

<br />
<div>          
	<button><a href="SaladeController.php" class="btn black-background">
	 Retour liste des salades 
	</a>
</div>

<?php 
$content = ob_get_clean(); 
?>

<?php 
require('../template/template.php'); 
?>