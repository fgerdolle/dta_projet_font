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
        <input type="date"  name="date" class="form-control" placeholder="date" value="<?php  echo $date;?>">
    </div>
    <br>
    <div>
        <input type="time"  name="time" class="form-control" placeholder="time" value="<?php  echo $time;?>">
    </div>
    <br>
    <div>
        <input type="text"  name="firstName" class="form-control" placeholder="FirstName" value="<?php  echo $firstName;?>">
    </div>
    <br>
    <div>
        <input type="text" name="lastName" class="form-control" placeholder="LastName" value="<?php  echo $lastName;?>">
    </div>
    <br>
    <div>
        <input type="phone" name="phone" class="form-control" placeholder="phone" value="<?php  echo $phone;?>">
    </div>
    <br>
    <div>
        <input type="email" name="mail" class="form-control" placeholder="mail" value="<?php  echo $mail;?>">
    </div>
    <br>
    <div>
        <input type="text" name="adress" class="form-control" placeholder="adress" value="<?php  echo $adress;?>">
    </div>
    <br>
    <div>
        <input type="text" name="remarque" class="form-control" placeholder="remarque" value="<?php  echo $remarque;?>">
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