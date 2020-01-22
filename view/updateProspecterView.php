<?php 
$title = 'Modifier Prospecter'; 
$css = 'page4.css';

?>

<?php 
ob_start(); 
?>
    
<h1>Modifier un Prospecter</h1>

<form method="post" action="updateProspecterController.php">
	<input type="hidden" name="id" value="<?php echo $id; ?>" />
	<div class="form-group">
    	<label for="idUser">ID User</label>
    	<input type="text" class="form-control standardWidth" id="idUser" name="idUser" value="<?php echo $idUser; ?>">
    	<?php 
    	if (!empty($errors["prospecter.idUser"])) {
    	?>
        <span class="label label-danger"><?php echo $errors["prospecter.idUser"]; ?></span>
        <?php 
    	}
        ?>
  	</div>
  	
  	<div class="form-group">
    	<label for="name">Name</label>
    	<input type="text" class="form-control standardWidth" id="name" name="name" value="<?php echo $name; ?>">
    	<?php 
    	if (!empty($errors["prospecter.name"])) {
    	?>
        <span class="label label-danger"><?php echo $errors["prospecter.name"]; ?></span>
        <?php 
    	}
        ?>
      </div>
      <div class="form-group">
        <label for="mail">Mail</label>
        <input type="mail" class="form-control standardWidth" id="mail" name="mail" value="<?php echo $mail; ?>">
        <?php 
        if (!empty($errors["prospecter.mail"])) {
        ?>
        <span class="label label-danger"><?php echo $errors["prospecter.mail"]; ?></span>
        <?php 
        }
        ?>
      </div>

      <div class="form-group">
        <label for="phone">Phone</label>
        <input type="phone" class="form-control standardWidth" id="phone" name="phone" value="<?php echo $phone; ?>">
        <?php 
        if (!empty($errors["prospecter.phone"])) {
        ?>
        <span class="label label-danger"><?php echo $errors["prospecter.phone"]; ?></span>
        <?php 
        }
        ?>
      </div>

    <div class="form-group">
        <label for="job">Job</label>
        <input type="text" class="form-control standardWidth" id="job" name="job" value="<?php echo $job; ?>">
        <?php 
        if (!empty($errors["prospecter.job"])) {
        ?>
        <span class="label label-danger"><?php echo $errors["prospecter.job"]; ?></span>
        <?php 
        }
        ?>
      </div>
      
    <div class="form-group">
        <label for="experience">Experience</label>
        <input type="text" class="form-control standardWidth" id="experience" name="experience" value="<?php echo $experience; ?>">
        <?php 
        if (!empty($errors["prospecter.experience"])) {
        ?>
        <span class="label label-danger"><?php echo $errors["prospecter.experience"]; ?></span>
        <?php 
        }
        ?>
      </div>
      
    <div class="form-group">
        <label for="salary">Salary</label>
        <input type="text" class="form-control standardWidth" id="salary" name="salary" value="<?php echo $salary; ?>">
        <?php 
        if (!empty($errors["prospecter.salary"])) {
        ?>
        <span class="label label-danger"><?php echo $errors["prospecter.salary"]; ?></span>
        <?php 
        }
        ?>
  	</div>
    <div class="form-group">
        <label for="langue">Langue</label>
        <input type="text" class="form-control standardWidth" id="langue" name="langue" value="<?php echo $langue; ?>">
        <?php 
        if (!empty($errors["prospecter.langue"])) {
        ?>
        <span class="label label-danger"><?php echo $errors["prospecter.langue"]; ?></span>
        <?php 
        }
        ?>
  	</div>
    
    <div class="form-group">
        <label for="availability">Availability</label>
        <input type="text" class="form-control standardWidth" id="availability" name="availability" value="<?php echo $availability; ?>">
        <?php 
        if (!empty($errors["prospecter.availability"])) {
        ?>
        <span class="label label-danger"><?php echo $errors["prospecter.availability"]; ?></span>
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