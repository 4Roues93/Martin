<?php
    				include("includes/bdd.php"); 
    				$req = $bdd->prepare('DELETE FROM tablatures WHERE nomTab = :nom');
    				$req->execute(array(
    				'nom' => $_GET['supprTab']
    				));
    				echo 'Tab ' . $_GET['supprTab'] . ' supprimé - <a href="index2.php">Retour</a>';
    			?>
				
				