<?php 
$title = 'Modifier une tomate'; 
$css = 'page4.css';

?>

<?php 
ob_start(); 
?>
    
<h1>Modifier une tomate</h1>

<form method="post" action="updateTomateController.php">
	<input type="hidden" name="id" value="<?php echo $id; ?>" />
	<div class="form-group">
    	<label for="photo">Photo </label>
    	<input type="text" class="formcontrol standardWidth" id="photo" name="photo" value="<?php echo $photo; ?>">
    	<?php 
    	if (!empty($errors["tomate.photo"])) {
    	?>
        <span class="label label-danger"><?php echo $errors["tomate.photo"]; ?></span>
        <?php 
    	}
        ?>
  	</div>
  	
  	<div class="form-group">
    	<label for="name">Name</label>
    	<input type="text" class="formcontrol standardWidth" id="name" name="name" value="<?php echo $name; ?>">
    	<?php 
    	if (!empty($errors["tomate.name"])) {
    	?>
        <span class="label label-danger"><?php echo $errors["tomate.name"]; ?></span>
        <?php 
    	}
        ?>
      </div>
      <div class="form-group">
        <label for="price">Price</label>
        <input type="text" class="formcontrol standardWidth" id="price" name="price" value="<?php echo $price; ?>">
        <?php 
        if (!empty($errors["tomate.price"])) {
        ?>
        <span class="label label-danger"><?php echo $errors["tomate.price"]; ?></span>
        <?php 
        }
        ?>
      </div>

      <div class="form-group">
        <label for="description">Description</label>
        <input type="text-area" class="formcontrol standardWidth" id="description" name="description" value="<?php echo $description; ?>">
        <?php 
        if (!empty($errors["tomate.description"])) {
        ?>
        <span class="label label-danger"><?php echo $errors["tomate.description"]; ?></span>
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