<?php 
$title = 'Liste des Prospects'; 
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
    <a class="flex-sm-fill text-sm-center nav-link" href="RDVSController.php">Rendez-Vous</a>
    <a class="flex-sm-fill text-sm-center nav-link active" href="#">Liste des Prospects</a>
    <a class="flex-sm-fill text-sm-center nav-link" href="CatalogueController.php">Le Catalogue</a>
    <a class="flex-sm-fill text-sm-center nav-link" href="ProspectersController.php">Mon Profile</a>
    <a class="flex-sm-fill text-sm-center nav-link" href="page1nonlog.html">Log Out</a>

    </nav>
  </header>
  </div>
  <div class="container-fluid">
  
  <br>
  <br>
  <div class="table-responsive">
    <h1>Liste des Prospects</h1>
<br />
<div>          
	<a href="addProspectController.php" class="btn btn-primary">
	<i class="fas fa-plus"></i> Ajouter un prospect 
	</a>
</div>
<br />

<table class="table table-striped">
	<thead>
		<tr>
			<th>#</th>
			<th>First Name</th>
      <th>Last Name</th>
      <th>Age</th>
      <th>Gender</th>
      <th>Phone</th>
      <th>Mail</th>
      <th>Adress</th>
			<th>Edit</th>
      <th>Delete</th>
      <th>RDV</th>

		</tr>
	</thead>
	<tbody>
<?php
        foreach ($prospects as $prospect) {
?>
		<tr>
			<th scope="row"><?php echo $prospect->id ?></th> 
			<td><a href="ProspectController.php?id=<?php echo $prospect->id ?>"><?php echo $prospect->firstName ?></a></td>
      <td><?php echo $prospect->lastName ?></td>
      <td><?php echo $prospect->age ?></td> 
			<td><?php echo $prospect->gender ?></td> 
			<td><?php echo $prospect->phone ?></td> 
      <td><?php echo $prospect->mail ?></td> 
      <td><?php echo $prospect->adress ?></td> 
			<td><a href="updateProspectController.php?id=<?php echo $prospect->id ?>"><i class="fas fa-pencil-alt"></i></a></td>
			<td><a href="deleteProspectController.php?id=<?php echo $prospect->id ?>"><i class="fas fa-trash-alt"></i></a></td>
      <td><a href="addRDVProspectController.php?id=<?php echo $prospect->id ?>"><i class="fas fa-plus"></i></a></td>
    </tr>
<?php 
        }
?>	  			
	</tbody>
</table>    

  <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
    <li class="page-item disabled">
    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
    <a class="page-link" href="#">Next</a>
    </li>
    </ul>
  </nav>
  
  </div>

  <?php 
$content = ob_get_clean(); 
?>

<?php 
require('../template/template.php'); 
?>