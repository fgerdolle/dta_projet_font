<?php 
$title = 'Modifier RDV'; 
$css = 'page4.css';

?>

<?php 
ob_start(); 
?>
    
<h1>Modifier un RDV</h1>

<form method="post" action="updateRDVController.php">
    <input type="hidden" name="id" value="<?php echo $id; ?>" />
    
    <div class="form-group">
    	<label for="date">Date</label>
    	<input type="date" class="form-control standardWidth" id="date" name="date" value="<?php echo $date; ?>">
    	<?php 
    	if (!empty($errors["rdv.date"])) {
    	?>
        <span class="label label-danger"><?php echo $errors["rdv.date"]; ?></span>
        <?php 
    	}
        ?>
    </div>
      
      <div class="form-group">
    	<label for="time">Time</label>
    	<input type="text" class="form-control standardWidth" id="time" name="time" value="<?php echo $time; ?>">
    	<?php 
    	if (!empty($errors["rdv.time"])) {
    	?>
        <span class="label label-danger"><?php echo $errors["rdv.time"]; ?></span>
        <?php 
    	}
        ?>
  	</div>
	<div class="form-group">
    	<label for="firstName">First Name</label>
    	<input type="text" class="form-control standardWidth" id="firstName" name="firstName" value="<?php echo $firstName; ?>">
    	<?php 
    	if (!empty($errors["rdv.firstName"])) {
    	?>
        <span class="label label-danger"><?php echo $errors["rdv.firstName"]; ?></span>
        <?php 
    	}
        ?>
  	</div>
  	
  	<div class="form-group">
    	<label for="lastName">Last Name</label>
    	<input type="text" class="form-control standardWidth" id="lastName" name="lastName" value="<?php echo $lastName; ?>">
    	<?php 
    	if (!empty($errors["rdv.lastName"])) {
    	?>
        <span class="label label-danger"><?php echo $errors["rdv.lastName"]; ?></span>
        <?php 
    	}
        ?>
  	</div>


    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="phone" class="form-control standardWidth" id="phone" name="phone" value="<?php echo $phone; ?>">
        <?php 
        if (!empty($errors["rdv.phone"])) {
        ?>
        <span class="label label-danger"><?php echo $errors["rdv.phone"]; ?></span>
        <?php 
        }
        ?>
      </div>
      
    <div class="form-group">
        <label for="mail">Mail</label>
        <input type="mail" class="form-control standardWidth" id="mail" name="mail" value="<?php echo $mail; ?>">
        <?php 
        if (!empty($errors["rdv.mail"])) {
        ?>
        <span class="label label-danger"><?php echo $errors["rdv.mail"]; ?></span>
        <?php 
        }
        ?>
      </div>
      
    <div class="form-group">
        <label for="adress">Adress</label>
        <input type="text" class="form-control standardWidth" id="adress" name="adress" value="<?php echo $adress; ?>">
        <?php 
        if (!empty($errors["rdv.adress"])) {
        ?>
        <span class="label label-danger"><?php echo $errors["rdv.adress"]; ?></span>
        <?php 
        }
        ?>
  	</div>
      
    <div class="form-group">
        <label for="remarque">Remarque</label>
        <input type="text" class="form-control standardWidth" id="remarque" name="remarque" value="<?php echo $remarque; ?>">
        <?php 
        if (!empty($errors["rdv.remarque"])) {
        ?>
        <span class="label label-danger"><?php echo $errors["rdv.remarque"]; ?></span>
        <?php 
        }
        ?>
  	</div>
  	<button type="submit" class="btn black-background">Update</button>
</form>

<?php 
$content = ob_get_clean(); 
?>

<?php 
require('../template/template.php'); 
?>