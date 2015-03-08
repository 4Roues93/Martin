 <?php
				if(isset($_POST['nomTof']))
				{
					include('../admin/includes/bdd.php');
					$req = $bdd->prepare('INSERT INTO album (nom, adresse) VALUES(:nom, :adresse)');
					$req->execute(array(
						'nom' => $_POST['nomTof'],
						'adresse' => $_FILES['fichier']['name']
						));
						move_uploaded_file($_FILES['fichier']['tmp_name'], '../album/' . basename($_FILES['fichier']['name']));
					echo 'Image ajoute - <a href="index2.php">Retour</a>';
				}
		 ?>