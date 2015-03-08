

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
<?php include("includes/entete.php");?>
<meta charset="UTF-8">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="999" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <?php include("includes/menu.php");?>
     
  </tr>
</table>
<table width="999" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="images/images/martin-4_07.gif" width="481" height="142" alt=""></td>
          </tr>
          <tr>
            <td height="538" valign="top" background="images/images/martin-4_09.jpg"><div style="overflow:auto; height:538px; width:481px;">
              <table width="100%" border="0" cellspacing="10" cellpadding="0">
                <tr>
                  <td><table width="100%" border="0" cellspacing="10" cellpadding="0">
                
                    <tr>
                      <td><table width="100%" border="0" cellspacing="10" cellpadding="0">
                        <tr>
                          <div id="new">
								<p>
									<?php
										include("admin/includes/bdd.php");
										$reponse = $bdd->query('SELECT * FROM new');
										$donnees = $reponse->fetch();
										echo stripslashes(nl2br($donnees['nouvelleNew']));
									?>
								</p>
							
						  </div>
                          
                        </tr>
                      </table></td>
                    </tr>
                    <tr>
                      
                    </tr>
                    <tr>
                      
                    </tr>
                  </table></td>
                </tr>
              </table></div></td>
          </tr>
        </table></td>
        <td><img src="images/images/martin-4_08.jpg" width="519" height="680" alt=""></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="999" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
   <?php include("includes/pied.php");?>
  </tr>
</table>
</body>
</html>