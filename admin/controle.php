<?php
	if(($_POST) && isset($_POST['mail']) && isset($_POST['mdp'])){
		if(!empty($_POST['mail']) && !empty($_POST['mdp'])){
			
			$mail=str_replace("javascript:","",$mail);
			$mdp=str_replace("javascript:","",$mdp);
			
			htmlentities($_POST['mail']);
			htmlentities($_POST['mdp']); 
			
			$_POST['mail'] = trim(htmlspecialchars($_POST['mail']));
			$_POST['mail'] = stripslashes(strip_tags($_POST['mail']));
					
			$_POST['mdp'] = trim(htmlspecialchars($_POST['mdp']));
			$_POST['mdp'] = stripslashes(strip_tags($_POST['mdp']));
					
					include('../admin/includes/bdd.php');
					$reponse = $bdd->query('SELECT * FROM admin');
					
					$donnees = $reponse->fetch();
					
					if(($_POST['mail'] == $donnees['pseudo']) AND ($_POST['mdp'] == $donnees['mdp']))
					{
						header('Location: ../admin/index2.php');
					}
					else
					{
					header('Location: erreur.php');
					}
		}
	}
		
	
?>