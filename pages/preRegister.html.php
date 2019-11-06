
	<div class="stay-in parallax" id="pre">
		<!-- Block Title -->
		<div class="overlay">
			<div class="wrapper-block-stay-in">
				<div class="element-title">	
					<div class="row">	 		
						<div class="container">	 		
							<h1 class="main-color wow fadeInDown" data-wow-duration="1s" data-wow-delay="300ms">Se pré-inscrire</h1>
						</div>
					</div>
				</div>
				<!-- End Block Title -->
				<div class="signup"> 
					<div class="row">
						<div class="container">	 	
							<div class="sign_form wow fadeInLeft" data-wow-duration="1s" data-wow-delay="300ms">
							<?php

									require_once 'class/Database.php';

									// Script for pre-registration 
									$nameOfPerson = isset($_POST['nameOfPerson']) ? $_POST['nameOfPerson'] : NULL;
									$email = isset($_POST['email']) ? $_POST['email'] : NULL;
									$id_film = isset($_POST['id_film']) ? $_POST['id_film'] : NULL;

									if(isset($_POST['envoyer'])){
										$requeteInsertPerson = $database->prepare('INSERT INTO pre_registrations(nameOfPerson, email, id_film) 
										VALUES(:nameOfPerson, :email, :id_film)');
										$requeteInsertPerson->execute(array(
											'nameOfPerson' => $nameOfPerson,
											'email' => $email,
											'id_film' => $id_film,
											));
										}

									?>


											<!-- Form for the pre-registration -->
									<div class="container">
										<form action="#" method="POST">
											<input type="hidden" name="id"/>
										<div class="form-group">
											<label>Nom et prénom:</label>
											<input type="text" name="nameOfPerson" class="form-control" placeholder="Votre nom et prénom" required>
										</div>

										<div class="form-group">
											<label>Adresse email : </label>
											<input type="email" name="email" class="form-control" placeholder="Votre adresse email" required>
										</div>
										<!-- Le name ne s'applique pas sur les options mais sur le select c'est grace a cela que le formulaire recoit les informations envoyer !-->
										<div class="form-group">
											<!-- Show name of film with value ID !-->
												<select name="id_film" class="mdb-select md-form form-control">
												<option hidden selected>Choix du film :</option>
													<?php
														// Requete for select films
													$requeteSelectFilms = $database->prepare("SELECT * FROM films");
													$requeteSelectFilms->execute();
													while($film = $requeteSelectFilms->fetch())
													{
														?>
													<option value="<?php echo $film['id'] ?>"> <?= $film['nameOfFilm'] ?> </option>
													<?php
													} 
													?>
												</select>     
										</div>

										<button type="submit" name="envoyer" class="btn btn-primary">Me pré-inscrire</button>
										</form>
									</div>
   
								<!-- / END SUBSCRIPTION FORM -->
							</div>
						</div>
					</div>			
				</div>	
				
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>