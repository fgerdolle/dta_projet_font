<?php 
$title = 'Liste des Salades'; 
$css = 'page4.css';
?>

<?php 
ob_start(); 
?>
        <header>
            <!-- Ma barre de Navigation-->
            <nav class="nav nav-pills flex-column flex-sm-row">
                <a class="flex-sm-fill text-sm-center nav-link" href="RDVSController.php">Rendez-Vous</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="ProspectsController.php">Liste des Prospects</a>
                <a class="flex-sm-fill text-sm-center nav-link active" href="#">Le Catalogue</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="ProspectersController.php">Mon Profile</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="page1nonlog.html">Log Out</a>

            </nav>
        </header>
        <br>
        <br>
        <br>
        <div class="container-fluid">
  
  <br>
  <br>
  <div class="table-responsive">
    <h1>Liste des Salades</h1>
<br />
<div class="container-fluid">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Changer de catalogue
                </button>
                  <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Changer de catalogue</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              </div>
              <div class="modal-body">
                  
                      <label> Choisir le Catalogue : </label>
                      <div>          
                      <button><a href="SaladeController.php" class="btn white-background">
                      Salades 
                      </a></button>
                    </div>
                    <div>          
                      <button><a href="OignonController.php" class="btn white-background">
                      Oignons 
                      </a></button>
                    </div>
                    <div>          
                      <button><a href="TomateController.php" class="btn white-background">
                      Tomates 
                      </a></button>
                    </div>
              </div>
            </div>
            </div>
          </div>
<br />
<div>          
	<a href="addSaladeController.php" class="btn btn-primary">
	<i class="fas fa-plus"></i> Ajouter une salade 
	</a>
</div>

<table class="table table-striped">
	<thead>
        <tr>
            <th>#</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Edit</th>
            <th>Delete</th>

        </tr>
	</thead>
	<tbody>
<?php
        foreach ($salades as $salade) {
?>
		<tr>
			<th scope="row"><?php echo $salade->id ?></th> 
			<td><?php echo $salade->photo ?></a></td>
            <td><?php echo $salade->name ?></td>
            <td><?php echo $salade->price ?> euros</td> 
			<td><?php echo $salade->description ?></td> 
			<td><a href="updateSaladeController.php?id=<?php echo $salade->id ?>"><i class="fas fa-pencil-alt"></i></a></td>
			<td><a href="deleteSaladeController.php?id=<?php echo $salade->id ?>"><i class="fas fa-trash-alt"></i></a></td>
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