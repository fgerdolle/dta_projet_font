<?php 
$title = 'Ajouter RDV'; 
$css = 'page4.css';
?>

<?php 
ob_start(); 
?>
<div class="container-fluid">
<h1>AJouter RDV</h1>
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
<form action="addRDVProspectController.php" method ="POST">
    <div>
        <input type="date"  name="date" class="formcontrol" placeholder="date" value="<?php  echo $date;?>">
    </div>
    <br>
    <div>
        <input type="time"  name="time" class="formcontrol" placeholder="time" value="<?php  echo $time;?>">
    </div>
    <br>
    <div>
        <input type="text"  name="firstName" class="formcontrol" placeholder="<?php if(empty($_POST)){echo "firstName";} else {echo $_POST["firstName"];} ?>" value="<?php if(empty($_POST)){echo "firstName";} else {echo $_POST["firstName"];} ?>">
    </div>
    <br>
    <div>
        <input type="text" name="lastName" class="formcontrol" placeholder="<?php if(empty($_POST)){echo "lastName";} else {echo $_POST["lastName"];} ?>" value="<?php if(empty($_POST)){echo "lastName";} else {echo $_POST["lastName"];} ?>">
    </div>
    <br>
    <div>
        <input type="phone" name="phone" class="formcontrol" placeholder="<?php if(empty($_POST)){echo "phone";} else {echo $_POST["phone"];} ?>" value="<?php if(empty($_POST)){echo "phone";} else {echo $_POST["phone"];} ?>">
    </div>
    <br>
    <div>
        <input type="email" name="mail" class="formcontrol" placeholder="<?php if(empty($_POST)){echo "mail";} else {echo $_POST["mail"];} ?>" value="<?php if(empty($_POST)){echo "mail";} else {echo $_POST["mail"];} ?>">
    </div>
    <br>
    <div>
        <input type="text" name="adress" class="formcontrol" placeholder="<?php if(empty($_POST)){echo "adress";} else {echo $_POST["adress"];} ?>" value="<?php if(empty($_POST)){echo "adress";} else {echo $_POST["adress"];} ?>">
    </div>
    <br>
    <div>
        <input type="text" name="remarque" class="formcontrol" placeholder="<?php if(empty($_POST)){echo "remarque";} else {echo $_POST["remarque"];} ?>" value="<?php if(empty($_POST)){echo "remarque";} else {echo $_POST["remarque"];} ?>">
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