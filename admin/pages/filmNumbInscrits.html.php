<?php
   
   require_once '../class/Database.php';

    // Compter le nombre de personnes inscrites en tout 
    $requeteNumberOfPerson = $database->query ('SELECT COUNT(id) as numberofperson FROM pre_registrations');
        
    $numberOfPerson = $requeteNumberOfPerson->fetch();

    // Compter le nombre d'actualités en tout 
    $requeteNumberOfNews = $database->query ('SELECT COUNT(id) as numberofnew FROM news');
        
    $numberOfNew = $requeteNumberOfNews->fetch();


// Jointures pour films et une personne pré-inscrites
// TRES TRES IMPORTANT (DISTINCT enleve les doublons)!!!
// Si on veut rajouter un champ de la bdd n'oubliez pas de le mettre dans la requete
$requeteSelectFilmsWithId = $database->prepare("SELECT DISTINCT nameOfFilm,id_film,projectionDate,images
FROM films
INNER JOIN pre_registrations
WHERE films.id = pre_registrations.id_film ORDER BY id_film");
$requeteSelectFilmsWithId->execute();

?>
     
     <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-1">
                                        <i class="pe-7s-smile"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">128</span></div>
                                            <div class="stat-heading">Visiteurs</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="pe-7s-news-paper"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?= $numberOfNew['numberofnew']; ?></span></div>
                                            <div class="stat-heading">Actualités</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-3">
                                    <i class="pe-7s-film"></i>
                                     </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">12</span></div>
                                            <div class="stat-heading">N° Films</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-4">
                                        <i class="pe-7s-users"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?= $numberOfPerson['numberofperson'] ?></span></div>
                                            <div class="stat-heading">N° d'inscrits</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Orders -->
                <div class="orders">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="box-title">Les Films </h4>
                                </div>
                                <div class="card-body--">
                                    <div class="table-stats order-table ov-h">
                                        <table class="table ">
                                            <thead>
                                                <tr>
                                                    <th class="avatar">Image</th>
                                                    <th>ID</th>
                                                    <th>Nom du Film</th>
                                                    <th>Date de la projection</th>
                                                    <th>Nombre de personnes inscrites</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                while($films = $requeteSelectFilmsWithId->fetch())
                                                {
                                                   $id_films =  $films['id_film'];
                                                   $requeteNumOfPersonForEachFilm = $database->query ("SELECT COUNT(id) as numpersonforfilm FROM pre_registrations WHERE id_film = $id_films");
                                                   while($numOfPersonForEachFilm = $requeteNumOfPersonForEachFilm->fetch())
                                                   {
                                                       
                                                      ?>
                                                  <tr>
                                                    <td class="avatar">
                                                        <div class="round-img">
                                                            <a href="#"><img class="rounded-circle" src="<?= $films['images'];?>" alt=""></a>
                                                        </div>
                                                    </td>
                                                    <td><?= $films['id_film'];?></td>
                                                    <td>  <span class="name"><?= $films['nameOfFilm'];?></span> </td>
                                                    <td> <span class="product"><?= $films['projectionDate'];?></span> </td>
                                                    <td><span class="count"><?= $numOfPersonForEachFilm['numpersonforfilm'];?></span></td>
                                                </tr>
                                                  <?php
                                                  }
                                                
                                                }
                                                
                                                ?>
                                            </tbody>
                                        </table>
                                    </div> <!-- /.table-stats -->
                                </div>
                            </div> <!-- /.card -->
                        </div>  <!-- /.col-lg-8 -->
                    </div>
                </div>