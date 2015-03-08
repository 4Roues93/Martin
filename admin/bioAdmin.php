<?php
				if(isset($_POST) && isset($_POST['bio']))
				{
					include("includes/bdd.php");
					$req = $bdd->prepare('UPDATE biiographie SET newbiographie = :newbiographieN');
					$req->execute(array(
						'newbiographieN' => $_POST['bio']
						));
						header('Location: ../admin/reussi.php');
				}
				else
				{
					echo 'modif non reussi';
					header('Location: ../index.php');
				}
				
			
?>