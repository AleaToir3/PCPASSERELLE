<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		
		<!-- GoogleFonts : Roboto / Playfair Display -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&family=Roboto:wght@300&display=swap" rel="stylesheet">
		
		<style>
			h1, h2, h3, h4, h5, h6 {
				font-family: 'Playfair Display', serif;
				background-color: #007BFF;
				padding: 20px;
				color: white;
			}
			body, a, p {
				font-family: 'Roboto', sans-serif;
			}
		</style>

		<title>Exercices boucles</title>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-12 mt-5 p-5 border">
					<h2>Faire une boucle qui affiche de 0 à 9 sur une même ligne</h2>
					<hr>
					<?php
						for ($i=0; $i < 10; $i++) { 
							echo $i;
						}
					?>
				</div>
				<div class="col-12 mt-5 p-5 border">
					<h2>Faire une boucle qui affiche de 0 à 99 sur une même ligne</h2>
					<hr>
					<?php
							for ($i=0; $i < 99; $i++) { 
								echo $i . " ";
							}
					?>
				</div>
				<div class="col-12 mt-5 p-5 border">
					<h2>Faire une boucle qui affiche de 0 à 99 sur une même ligne avec le  chiffre 50 en rouge</h2>
					<hr>
					<?php
					for ($i=0; $i < 99; $i++) { 
						if($i==50){

							echo '<i style="color:red;">' . $i . " </i>";
						}else
							echo $i . " ";
					}
						
					?>
				</div>
				<div class="col-12 mt-5 p-5 border">
					<h2>Faire une boucle qui affiche de 0 à 99 sur une même ligne avec les dizaines en rougeaaaa</h2>
					<hr>
					<?php
						for ($i=0; $i < 99; $i++){
							if($i<10){
								echo $i;
							}elseif($i>10 && $i<99){							
								echo '<i style="color: red;">' . substr($i,0,1).'</i> '. substr($i,1,1)  ;
							}

						}
						
					?>
				</div>
				<div class="col-12 mt-5 p-5 border">
					<h2>Faire une boucle qui affiche de 0 à 99 sur une même ligne avec un retour à la ligne à chaque dizaine sauf pour 0</h2>
					<hr>
					<?php
							for ($i=0; $i < 99  ; $i++) { 
								if($i >= 10 && $i%10 == 0){
									echo '<br>';
								}else{

									echo $i. " ";
								}

								
							}
						
					?>
				</div>
				<div class="col-12 mt-5 p-5 border">
					<h2>Faire une boucle qui affiche de 0 à 9 dans une liste ul li</h2>
					<hr>
					<?php
					echo '<ul>';
					for ($i=0; $i < 10; $i++) { 
						echo "<li>  $i </li>";
					}
					echo '</ul>';
						
					?>
				</div>
				<div class="col-12 mt-5 p-5 border">
					<h2>Faire une boucle qui affiche de 0 à 9 dans une liste ul li avec chaque valeur dans un background-color différent</h2>
					<hr>
					<?php
					$color = rand(000000,999999);
						
					echo '<ul>';
					for ($i=0; $i < 10; $i++) { 
						echo '<span style="background:#'.rand(000000,999999).'">'. $i .'</span>'.'<br>';

					}
					echo '</ul>';
					?>
				</div>
				<div class="col-12 mt-5 p-5 border">
					<h2>Faire une boucle qui affiche de 0 à 9 dans un tableau html</h2>
					<hr>
					<table border="1"><tr>
					<?php
						echo '<tr>';
					for ($i=0; $i < 10; $i++) { 
						echo "<td> $i </td>";
					}
					echo '</tr>';
					?>
					</tr></table>
				</div>
				<div class="col-12 mt-5 p-5 border">
					<h2>Pareil mais sur 10 lignes : <?php echo htmlentities('<tr>'); ?> affichage de 0 à 99 (une ou deux boucles)</h2>
					<hr>
					<table border="1"><tr>
					<?php
						for ($i=0; $i < 99  ; $i++) { 

							if($i >= 10 && $i%10 == 0){
								echo '<td>'.$i.'</td>';
								echo '<tr>';

							}else{

								echo '<td>'.$i.'</td>';
							}

							
						}
						
					?>
					</tr>
					</table>
				</div>
				<div class="col-12 mt-5 p-5 border">
					<h2>Pareil avec les couleurs différentes dans les colonnes et/ou cellules</h2>
					<hr>
					<table border="1"><tr>
					<?php
						
						?>
						</tr>
						</table>
						<hr>
						<table border="1"><tr>
							<?php 
						
						
					?>
					</tr></table>
				</div>
			</div>
		</div>
	</body>
</html>

