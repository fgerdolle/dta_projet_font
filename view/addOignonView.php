<?php 
$title = 'Ajouter un oignon'; 
$css = 'page4.css';
?>

<?php 
ob_start(); 
?>
<div class="container-fluid">
<h1>Ajouter un oignon</h1>
<br />

<?php
    if(!empty($errors)){
?>
    <div class="alert alert-danger" role="alert">
        <ul>
            <?php           
                foreach($errors as $error){ 
                
                    echo '<li>'.$error.'</li>';
               } 
            ?>
        </ul>
    </div>
<?php
}
?>
<form action="addOignonController.php" method ="POST">
    <div>
        <input type="text"  name="photo" class="formcontrol" placeholder="photo" value="<?php  echo $photo;?>">
    </div>
    <br>
    <div>
        <input type="text" name="name" class="formcontrol" placeholder="name" value="<?php  echo $name?>">
    </div>
    <br>
    <div>
        <input type="text" name="price" class="formcontrol" placeholder="price" value="<?php  echo $price;?>">
    </div>
    <br>
    <div>
        <input type="text" name="description" class="formcontrol" placeholder="description" value="<?php  echo $description;?>">
    </div>
    <br>


    <button type="submit"> Submit </button>
</form>
</div>

<?php 
$content = ob_get_clean(); 
?>

<?php 
require('../template/template.php'); 
?>