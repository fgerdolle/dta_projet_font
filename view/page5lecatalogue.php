<?php 
$title = 'Liste des Prospects'; 
$css = 'page5.css';
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
                  <form>
                      <label> Choisir le Catalogue : </label>
                      <div class="form-row align-items-center">
                        <div class="col-auto my-1">
                        <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                          <option selected>Choose...</option>
                          <option value="1">Salade</option>
                          <option value="2">Tomate</option>
                          <option value="3">Oignon</option>
                        </select>
                        </div>
                      </div>
                  </form>
              </div>
              <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
              <button type="button" class="btn btn-primary">Ajouter</button>
              </div>
            </div>
            </div>
          </div>
          <br>
          <br>
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Salade Verte</h5>
                      <img src="pictures/salade-verte.jpg">
                      <p class="card-text">Salade verte traditionelle. Un classique.</p>
                      <p> Prix : 6 euros</p>
                    </div>
                </div>
              </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Mâche</h5>
                    <img src="pictures/mache.jpg">
                    <p class="card-text">La mâche, très appreciable mais bien nettoyer avant dégustation. Sauf si on aime la terre.</p>
                    <p> Prix : 8 euros</p>
                </div>
                </div>   
            </div>
              <div class="w-100"></div>
            <div class="col">
                    <div class="card" style="width: 18rem;">
                            <div class="card-body">
                              <h5 class="card-title">La roquette</h5>
                              <img src="pictures/roquette.jpeg">
                              <p class="card-text">Délicieuse salade un poil piquant, pour une salade explosif.</p>
                              <p> Prix : 10 euros</p>
                            </div>
                          </div>
            </div>
            <div class="col">
                    <div class="card" style="width: 18rem;">
                            <div class="card-body">
                              <h5 class="card-title">Pourpier De Clayton</h5>
                              <img src="pictures/pourpier_de_clayton.jpg">
                              <p class="card-text">Salade de luxe. Un pur régale pour le palais.</p>
                              <p>Prix : 18 euros</p>
                            </div>
                          </div>
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