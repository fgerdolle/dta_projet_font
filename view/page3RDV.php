<?php 
$title = 'Liste des RDV'; 
$css = 'page4.css';
?>

<?php 
ob_start(); 
?>
  <body>
    <div class="container-fluid">
    <header>
      <!-- Ma barre de Navigation-->
      <nav class="nav nav-pills flex-column flex-sm-row">
        <a class="flex-sm-fill text-sm-center nav-link active" href="#">Rendez-Vous</a>
        <a class="flex-sm-fill text-sm-center nav-link" href="ProspectsController.php">Liste des Prospects</a>
        <a class="flex-sm-fill text-sm-center nav-link" href="page5lecatalogue.html">Le Catalogue</a>
        <a class="flex-sm-fill text-sm-center nav-link" href="page6monprofil.html">Mon Profile</a>
        <a class="flex-sm-fill text-sm-center nav-link" href="page1nonlog.html">Log Out</a>

      </nav>
    </header>
    </div>
    <div class="container-fluid">

    <br>
  <br>
  <div class="table-responsive">
    <h1>Liste des RDV</h1>
<br />
<div>          
	<a href="addRDVProspectController.php" class="btn btn-primary">
	<i class="fas fa-plus"></i> Ajouter un RDV 
	</a>
</div>
<br />

<table class="table table-striped">
	<thead>
		<tr>
			<th>#</th>
      <th>Date</th>
      <th>Time</th>
			<th>First Name</th>
      <th>Last Name</th>
      <th>Phone</th>
      <th>Mail</th>
      <th>Adress</th>
      <th>Remarque</th>
			<th>Edit</th>
      <th>Delete</th>

		</tr>
	</thead>
	<tbody>
    <?php
        foreach ($addrdv as $rdv) {
?>
		<tr>
			<th scope="row"><?php echo $rdv->id ?></th> 
      <td><?php echo $rdv->date ?></td> 
			<td><?php echo $rdv->time ?></td> 
			<td><a href="ProspectController.php?id=<?php echo $rdv->id ?>"><?php echo $rdv->firstName ?></a></td>
      <td><?php echo $rdv->lastName ?></td>
			<td><?php echo $rdv->phone ?></td> 
      <td><?php echo $rdv->mail ?></td> 
      <td><?php echo $rdv->adress ?></td> 
      <td><?php echo $rdv->remarque ?></td> 

			<td><a href="updateRDVController.php?id=<?php echo $rdv->id ?>"><i class="fas fa-pencil-alt"></i></a></td>
			<td><a href="deleteRDVController.php?id=<?php echo $rdv->id ?>"><i class="fas fa-trash-alt"></i></a></td>
    </tr>
<?php 
        }
?>	  			
      <a href="calendar.html" alt ="lien vers le calendrier"><button type="button" class="btn btn-primary btn-lg btn-block">Voir le Calendrier</button></a>

    </div>
    <?php 
$content = ob_get_clean(); 
?>

<?php 
require('../template/template.php'); 
?>