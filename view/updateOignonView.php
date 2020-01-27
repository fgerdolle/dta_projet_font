<?php 
$title = 'Modifier un oignon'; 
$css = 'page4.css';

?>

<?php 
ob_start(); 
?>
    
<h1>Modifier un oignon</h1>

<form method="post" action="updateOignonController.php">
	<input type="hidden" name="id" value="<?php echo $id; ?>" />
	<div class="form-group">
    	<label for="photo">Photo </label>
    	<input type="text" class="formcontrol standardWidth" id="photo" name="photo" value="<?php echo $photo; ?>">
    	<?php 
    	if (!empty($errors["oignon.photo"])) {
    	?>
        <span class="label label-danger"><?php echo $errors["oignon.photo"]; ?></span>
        <?php 
    	}
        ?>
  	</div>
  	
  	<div class="form-group">
    	<label for="name">Name</label>
    	<input type="text" class="formcontrol standardWidth" id="name" name="name" value="<?php echo $name; ?>">
    	<?php 
    	if (!empty($errors["oignon.name"])) {
    	?>
        <span class="label label-danger"><?php echo $errors["oignon.name"]; ?></span>
        <?php 
    	}
        ?>
      </div>
      <div class="form-group">
        <label for="price">Price</label>
        <input type="text" class="formcontrol standardWidth" id="price" name="price" value="<?php echo $price; ?>">
        <?php 
        if (!empty($errors["oignon.price"])) {
        ?>
        <span class="label label-danger"><?php echo $errors["oignon.price"]; ?></span>
        <?php 
        }
        ?>
      </div>

      <div class="form-group">
        <label for="description">Description</label>
        <input type="text" class="formcontrol standardWidth" id="description" name="description" value="<?php echo $description; ?>">
        <?php 
        if (!empty($errors["oignon.description"])) {
        ?>
        <span class="label label-danger"><?php echo $errors["oignon.description"]; ?></span>
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