
<?php
	include("admin/includes/bdd.php");
	
$nombre_max_page = 5;
	$depart = 1;
	if(isset($_GET['p'])){
				$depart = $_GET['p'];
			}
	$reponse = $bdd->query("SELECT * FROM tablatures ORDER BY nomTab ASC LIMIT ".(($depart-1)*$nombre_max_page).",$nombre_max_page" );
		?>
			<div id="numPage">
			vous etes à la page n°<?php echo $_GET['p']; ?>
			</div>
		<CENTER><TABLE width=100% border=1 id="tableau">
		<TR>
			<TH width=45%><CENTER>Nom de la tablature</CENTER></TH>
			<TH width=25%><CENTER>PDF</CENTER></TH>
			<TH width=25%><CENTER>Guitare Pro</CENTER></TH>
		</TR>
		<?php
		
		
	while($donnees = $reponse->fetch())
	{
	
	
		 echo '
				<TR>
				<CENTER><TD width=45% id="tailleText">' . $donnees['nomTab'] .  '</TD></CENTER>
				<TD width=25%><CENTER><a href="tab/pdf/' . $donnees['upfilePDF'] . '" target="_blank"><img src="images/pdf.png"</a></CENTER></TD>
					<TD width=75%><CENTER><a href="tab/gp/' . $donnees['upfileGP'] . '" target="_blank"><img src="images/gp.jpg"></img></a></CENTER></TD>
				</TR>
				
				';	 
	}
	
	
	
?>


</TABLE></CENTER>
<div id="pagination">
	<?php
			
			
			include("includes/pagination.php");
			
	?>
</div>