<?php 
$title = 'Liste des Prospects'; 
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
        
        <div class="container">
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
          <br>
          <br>
          
            </div>
            </div>
          </div>
                </div>
            </div>
            <?php 
$content = ob_get_clean(); 
?>

<?php 
require('../template/template.php'); 
?>