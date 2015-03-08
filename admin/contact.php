<html>
<head>
<?php include("includes/entete.php");?>
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
                  <td><table width="100%" border="0" cellpadding="0" cellspacing="10">
                    <tr>
                      <td class="px16"><h2 class="grey"><span class="blye2">Contacter</span> Martin Pariza </h2></td>
                    </tr>
                    <tr>
						 <?php
		  if(!empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['message']))
		  {
			if(isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['message']))
			{
          $destinataire = 'martin.pariza@orange.fr';
		  $sujet = 'Formulaire de martinpariza.com';
		  $message = "Voici les informations du mail :\n\n
		  
		  Nom :" . $_POST['nom'] . "\n
		  Email :" . $_POST['email'] ."\n\n
		  
		  Le message :\n" . $_POST['message'];
		  
		  mail($destinataire, $sujet, $message);
		  echo "Envoi reussi";
		  }
		  }
		  
          ?>
                      <td><form method="post" action="contact.php">
                        <input type="hidden" name="SoupermailConf" value="/frms/contact.con">
                        <table width="100%" border="0" cellpadding="0" align="center" cellspacing="0">
                          <tr>
                            <td><table width="100%" border="0" cellpadding="4" cellspacing="1">
                              <tr>
                                <td align="Right"><b>Votre 
                                  Nom: <span class="style1">*</span></b></td>
                                <td width="70%"><input type="TEXT" name="nom" style="width: 90%;"></td>
                              </tr>
                              <tr>
                                <td align="Right"><b>Adresse 
                                  E-mail: <span class="style1">*</span></b></td>
                                <td><input type="TEXT" name="email" style="width: 90%;"></td>
                              </tr>
                              <tr>
                                <td align="right"><b> Votre message: <span class="style1">* </span></b></td>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td colspan="2" align="center"><textarea name="message" rows="8" style="width: 90%;" wrap="VIRTUAL"></textarea></td>
                              </tr>
                              <tr>
                                <td colspan="2" align="center"><input type="submit" name="Submit" value="Envoyer">
                                  <br></td>
                              </tr>
                            </table></td>
                          </tr>
                        </table>
                      </form>
                        <font face="Verdana, Arial" size="1" color="#000000"><b><font color="#FF0000">* 
                          Obligatoire</font></b></font></td>
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