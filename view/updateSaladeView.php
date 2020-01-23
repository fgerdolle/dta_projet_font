<?php 
$title = 'Modifier une salade'; 
$css = 'page4.css';

?>

<?php 
ob_start(); 
?>
    
<h1>Modifier une salade</h1>

<form method="post" action="updateSaladeController.php">
	<input type="hidden" name="id" value="<?php echo $id; ?>" />
	<div class="form-group">
    	<label for="photo">Photo </label>
    	<input type="text" class="form-control standardWidth" id="photo" name="photo" value="<?php echo $photo; ?>">
    	<?php 
    	if (!empty($errors["salade.photo"])) {
    	?>
        <span class="label label-danger"><?php echo $errors["salade.photo"]; ?></span>
        <?php 
    	}
        ?>
  	</div>
  	
  	<div class="form-group">
    	<label for="name">Name</label>
    	<input type="text" class="form-control standardWidth" id="name" name="name" value="<?php echo $name; ?>">
    	<?php 
    	if (!empty($errors["salade.name"])) {
    	?>
        <span class="label label-danger"><?php echo $errors["salade.name"]; ?></span>
        <?php 
    	}
        ?>
      </div>
      <div class="form-group">
        <label for="price">Price</label>
        <input type="text" class="form-control standardWidth" id="price" name="price" value="<?php echo $price; ?>">
        <?php 
        if (!empty($errors["salade.price"])) {
        ?>
        <span class="label label-danger"><?php echo $errors["salade.price"]; ?></span>
        <?php 
        }
        ?>
      </div>

      <div class="form-group">
        <label for="description">Description</label>
        <input type="text" class="form-control standardWidth" id="description" name="description" value="<?php echo $description; ?>">
        <?php 
        if (!empty($errors["salade.description"])) {
        ?>
        <span class="label label-danger"><?php echo $errors["salade.description"]; ?></span>
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