<?php 
$title = 'Détails du Prospect'; 
$css = 'page4.css';

?>

<?php 
ob_start(); 
?>


<h1> Détails du Prospect :<?php echo $prospect->firstName; ?> <?php echo $prospect->lastName; ?></h1>

<div>
    id : <?php echo $prospect->id; ?>
</div>
<div>
    first Name : <?php echo $prospect->firstName; ?>

</div>
<div>
    last Name : <?php echo $prospect->lastName; ?>
</div>
<div>
    Age : <?php echo $prospect->age; ?>
</div>
<div>
    Birth : <?php echo $prospect->birth; ?>
</div>
<div>
    Gender : <?php echo $prospect->gender; ?>
</div>
<div>
    Phone : <?php echo $prospect->phone; ?>
</div>
<div>
    Mail: <?php echo $prospect->mail; ?>
</div>
<div>
    adress : <?php echo $prospect->adress; ?>
</div>
<div>
    Purchase : <?php echo $prospect->purchase; ?>
</div>
<div>
    Remarque : <?php echo $prospect->remarque; ?>
</div>
<button href="ProspectsController.php" class="btn black-background">Retour</button>


<?php $content = ob_get_clean(); ?>

<?php require('../template/template.php'); ?>