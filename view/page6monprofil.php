<?php 
$title = 'Profil Prospecter'; 
$css = 'page6.css';

?>

<?php 
ob_start(); 
?>
            <!-- Ma barre de Navigation-->
            <nav class="nav nav-pills flex-column flex-sm-row">
                <a class="flex-sm-fill text-sm-center nav-link" href="RDVSController.php">Rendez-Vous</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="ProspectsController.php">Liste des Prospects</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="page5lecatalogue.html">Le Catalogue</a>
                <a class="flex-sm-fill text-sm-center nav-link active" href="#">Mon Profile</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="page1nonlog.html">Log Out</a>

            </nav>
        </header>
        <br>
        <br>
        <br>

        <?php
        foreach ($prospecters as $prospecter) {
?>

        <div class="container emp-profile">
                <form method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="profile-img">
                                <img src="pictures/IMG_20191114_161520.jpg" alt="photo de profil"/>
                                <form>
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Change Photo</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="profile-head">
                                        <h5>
                                        <?php echo $prospecter->name ?>
                                        </h5>
                                        <h6>
                                        <?php echo $prospecter->job ?> 
                                        </h6>
                                        <div class="row">
                                                <div class="col-md-12">
                                                    <label>Biographie :</label><br/>
                                                    <p><?php echo $prospecter->biographie ?></p>
                                                    <br>
                                                    <br>
                                                    <p>Description :</p>
                                                    <p><?php echo $prospecter->description ?></p>
                                                </div>
                                            </div>
                            </div>
                        </div>
                        
                        
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="profile-work">
                                <p>LIEN TRAVAIL</p>
                                <a href="">Website Link</a><br/>
                                <a href="">Bootsnipp Profile</a><br/>
                                <a href="">Bootply Profile</a>
                            </div>
                            <div>          
                                <a href="addRDVProspectController.php" class="btn btn-primary">
                                <i class="fas fa-plus"></i> Changer de Prospecter 
                                </a>
                            </div>
                            <div>          
                                <a href="updateProspecterController.php?id=<?php echo $prospecter->id ?>" class="btn btn-primary">
                                <i class="fas fa-plus"></i> Modifier un Prospecter 
                                </a>
                            </div>
                           
                        </div>
                        <div class="col-md-8">
                            <div class="tab-content profile-tab" id="myTabContent">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">À Propos de Moi</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Temps de Profession</a>
                                            </li>
                                        </ul>
                                        <br>
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Id Utilisateur</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $prospecter->idUser ?> </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Nom</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $prospecter->name ?>  </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>E-mail</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $prospecter->mail ?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Télephone</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $prospecter->phone ?> </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Profession</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $prospecter->job ?> </p>
                                                </div>
                                            </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Experience</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $prospecter->experience ?> </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Euros/Heure</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $prospecter->salary ?> </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Langue</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $prospecter->langue ?> </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Disponibilité</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $prospecter->availability ?> </p>
                                                </div>
                                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>           
            </div>

            <?php 
        }
?> 
<?php 
$content = ob_get_clean(); 
?>

<?php 
require('../template/template.php'); 
?>