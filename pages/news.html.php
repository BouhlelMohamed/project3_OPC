

	<?php 
	require_once 'class/Database.php';

    //Select news
    $requeteSelectNews = $database->prepare("SELECT * FROM news");
    $requeteSelectNews->execute();


?>
	<div class="news">
		<!-- Block Title -->	
		<div class="element-title">			
			<div class="row">	 		
				<div class="container">
					<div class="section-title wow fadeInDown">			
						<h1><span>ACTUALITÉS</span></h1>							
					</div>				
					<h1 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="300ms">CONSEILS, NOUVEAUX FILMS, PROCHAINES MANIFESTATIONS...</h1>
				</div>
			</div>
		</div>
		<!-- End Block Title -->
		<div class="container">
			<div class="wrapper-news">	
				<div class="row">
				<?php 
				while($new = $requeteSelectNews->fetch())
				{
					?>

					<div class="col-lg-6 col-sm-6">	
						<div class="news-content wow fadeInLeft" data-wow-duration="1s" data-wow-delay="300ms">	
							<div class="entry-header">	
												
							</div>
							<div class="entry-content">	
								<h3 class="entry-title">
									<?= $new['title']; ?>
								</h3>							
								<ul class="entry-meta">
								<li><i class="fa fa-user"></i> By: <?= $new['author']; ?> <span>/</span></a></li>
								<li><?= $new['date']; ?> </li>

							</ul>	
								<p><?= $new['content']; ?></p>								
							</div>
						</div>
					</div>
					<?php
				}
				?>
				</div>

			</div>
		</div>		
	</div>

	
