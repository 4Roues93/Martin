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
                      <td class="px16"><h2 class="grey"><span class="blye2">Admin</span> </h2></td>
                    </tr>
                    <tr>
		  
                      <td><form method="post" action="controle.php">
                        <input type="hidden" name="SoupermailConf" value="/frms/contact.con">
                        <table width="100%" border="0" cellpadding="0" align="center" cellspacing="0">
                          <tr>
                            <td><table width="100%" border="0" cellpadding="4" cellspacing="1">
                          
                              <tr>
                                <td align="Right"><b> 
                                  E-mail: <span class="style1">*</span></b></td>
                                <td><input type="TEXT" name="mail" style="width: 90%;"></td>
                              </tr>
							   <tr>
                                <td align="Right"><b> 
                                  Mot de passe: <span class="style1">*</span></b></td>
                                <td><input type="password" name="mdp" style="width: 90%;"></td>
                              </tr>
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