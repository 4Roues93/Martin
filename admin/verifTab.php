<?php
					if(isset($_POST['nom']))
				{
					include('includes/bdd.php');
					$req = $bdd->prepare('INSERT INTO tablatures (nomTab, upfilePDF, upfileGP) VALUES(:nomTab, :upfilePDF, :upfileGP)');
					$req->execute(array(
						'nomTab' => $_POST['nom'],
						'upfilePDF' => $_FILES['PDF']['name'],
						'upfileGP' => $_FILES['GP']['name']
						));
						move_uploaded_file($_FILES['PDF']['tmp_name'], '../tab/pdf/' . basename($_FILES['PDF']['name']));
						move_uploaded_file($_FILES['GP']['tmp_name'], '../tab/gp/' . basename($_FILES['GP']['name']));
					echo 'tablature ajoute - <a href="index2.php">Retour</a>';
				}
						else{
							echo 'erreur !! ajout impossible - <a href="index2.php">Retour</a>';
						}
					?>