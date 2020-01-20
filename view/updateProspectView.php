<?php 
$title = 'Modifier Prospect'; 
$css = 'page4.css';

?>

<?php 
ob_start(); 
?>
    
<h1>Modifier un Prospect</h1>

<form method="post" action="updateProspectController.php">
	<input type="hidden" name="id" value="<?php echo $id; ?>" />
	<div class="form-group">
    	<label for="firstName">First Name</label>
    	<input type="text" class="form-control standardWidth" id="firstName" name="firstName" value="<?php echo $firstName; ?>">
    	<?php 
    	if (!empty($errors["prosepct.firstName"])) {
    	?>
        <span class="label label-danger"><?php echo $errors["prospect.firstName"]; ?></span>
        <?php 
    	}
        ?>
  	</div>
  	
  	<div class="form-group">
    	<label for="lastName">Last Name</label>
    	<input type="text" class="form-control standardWidth" id="lastName" name="lastName" value="<?php echo $lastName; ?>">
    	<?php 
    	if (!empty($errors["prospect.lastName"])) {
    	?>
        <span class="label label-danger"><?php echo $errors["prospect.lastName"]; ?></span>
        <?php 
    	}
        ?>
  	</div>

    <div class="form-group">
        <label for="age">Age</label>
        <input type="text" class="form-control standardWidth" id="age" name="age" value="<?php echo $age; ?>">
        <?php 
        if (!empty($errors["prospect.age"])) {
        ?>
        <span class="label label-danger"><?php echo $errors["prospect.age"]; ?></span>
        <?php 
        }
        ?>
      </div>
      
    <div class="form-group">
        <label for="birth">Birth</label>
        <input type="text" class="form-control standardWidth" id="birth" name="birth" value="<?php echo $birth; ?>">
        <?php 
        if (!empty($errors["prospect.birth"])) {
        ?>
        <span class="label label-danger"><?php echo $errors["prospect.birth"]; ?></span>
        <?php 
        }
        ?>
      </div>
      
    <div class="form-group">
        <label for="gender">Gender</label>
        <input type="text" class="form-control standardWidth" id="gender" name="gender" value="<?php echo $gender; ?>">
        <?php 
        if (!empty($errors["prospect.gender"])) {
        ?>
        <span class="label label-danger"><?php echo $errors["prospect.gender"]; ?></span>
        <?php 
        }
        ?>
  	</div>

    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="phone" class="form-control standardWidth" id="phone" name="phone" value="<?php echo $phone; ?>">
        <?php 
        if (!empty($errors["prospect.phone"])) {
        ?>
        <span class="label label-danger"><?php echo $errors["prospect.phone"]; ?></span>
        <?php 
        }
        ?>
      </div>
      
    <div class="form-group">
        <label for="mail">Mail</label>
        <input type="mail" class="form-control standardWidth" id="mail" name="mail" value="<?php echo $mail; ?>">
        <?php 
        if (!empty($errors["prospect.mail"])) {
        ?>
        <span class="label label-danger"><?php echo $errors["prospect.mail"]; ?></span>
        <?php 
        }
        ?>
      </div>
      
    <div class="form-group">
        <label for="adress">Adress</label>
        <input type="text" class="form-control standardWidth" id="adress" name="adress" value="<?php echo $adress; ?>">
        <?php 
        if (!empty($errors["prospect.adress"])) {
        ?>
        <span class="label label-danger"><?php echo $errors["prospect.adress"]; ?></span>
        <?php 
        }
        ?>
  	</div>
    
    <div class="form-group">
        <label for="purchase">Purchase</label>
        <input type="text" class="form-control standardWidth" id="purchase" name="purchase" value="<?php echo $purchase; ?>">
        <?php 
        if (!empty($errors["prospect.purchase"])) {
        ?>
        <span class="label label-danger"><?php echo $errors["prospect.purchase"]; ?></span>
        <?php 
        }
        ?>
      </div>
      
    <div class="form-group">
        <label for="remarque">Remarque</label>
        <input type="text" class="form-control standardWidth" id="remarque" name="remarque" value="<?php echo $remarque; ?>">
        <?php 
        if (!empty($errors["prospect.remarque"])) {
        ?>
        <span class="label label-danger"><?php echo $errors["prospect.remarque"]; ?></span>
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