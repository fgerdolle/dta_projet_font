<?php 
$title = 'Delete un oignon'; 
$css = 'page4.css';

?>

<?php 
ob_start(); 
?>

<div class="alert alert-success" role="alert">Oignon has been deleted</div>

<br />
<div>          
	<button><a href="OignonController.php" class="btn black-background">
	 Retour liste des oignons 
	</a>
</div>

<?php 
$content = ob_get_clean(); 
?>

<?php 
require('../template/template.php'); 
?>