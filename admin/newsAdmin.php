<?php
				if(isset($_POST) && isset($_POST['news']))
				{
					include("includes/bdd.php");
					$req = $bdd->prepare('UPDATE new SET nouvelleNew = :news');
					$req->execute(array(
						'news' => $_POST['news']
						));
						header('Location: ../admin/reussi.php');
				}
				else
				{
					header('Location: ../admin/erreur.php');
				}
				
			
?>