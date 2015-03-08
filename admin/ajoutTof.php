<html>
<head>
<?php include(" includes/entete.php");?>
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
            <td><img src="images/index_07.gif" width="481" height="142" alt=""></td>
          </tr>
          <tr>
            <td height="538" valign="top" background="images/index_09.jpg"><div style="overflow:auto; height:538px; width:481px;">
              <table width="100%" border="0" cellspacing="10" cellpadding="0">
                <tr>
                  <td><table width="100%" border="0" cellspacing="10" cellpadding="0">
                
                    <tr>
                      <td><table width="100%" border="0" cellspacing="10" cellpadding="0">
					  <div id="link">
                        <tr>
                          Ajout de photo :<br><br>
						  <center>
						  <form method="post" action="verifTof.php" enctype="multipart/form-data">
						  Nom de la photo :<br> <input type="text" name="nomTof"/><br><br>
						  Choisir la photo a ajouter :</br><input type="file" name="fichier"/>
						  <br>
						  <input type="submit" value="ajouter"/>
						  </form>
                          </center>
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
        <td><img src="images/index_08.jpg" width="519" height="680" alt=""></td>
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