<?php
session_cache_expire(180);
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"[]>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<?php include '../include/header.php'; ?>
<body>
<div id="art-page-background-glare-wrapper">
    <div id="art-page-background-glare"></div>
</div>
<div id="art-main">
    <div class="cleared reset-box"></div>
    <div class="art-box art-sheet">
        <div class="art-box-body art-sheet-body">
            <div class="art-header">
                <div class="art-textblock"> </div>
                        <div class="art-logo">
                         <h1 class="art-logo-name"><a href="../index.html">FatturarePA</a></h1>
                        </div>
            	</div>
	            <?php include '../include/menu_top.php'; ?>
				<?php include '../include/menu_left.php'; ?>
            

                <div class="cleared"></div>
        </div>
        <div class="art-layout-cell art-content">
			<div class="art-box art-post">
    			<div class="art-box-body art-post-body">
					<div class="art-post-inner art-article">
                                <h2 class="art-postheader">Login
                                </h2>
                		<div class="art-postcontent">
                             <div class="art-layout-cell layout-item-0" style="width: 100%;">
		        					<table border="0" cellspacing="1" cellpadding="0" width="220" align="center" bgcolor="#cccccc">
										<tr>
											<td>
												<form name="frmLogin" id="frmLogin"  action="../login/check_login.php" method="post">
												
												
													<table border="0" cellspacing="1" cellpadding="3" width="100%" bgcolor="#ffffff">
														<tr>
														<td width="78">Utente</td>
														<td width="6">:</td>
														<td width="294"><input id="username" name="myusername" type="text" /></td>
														</tr>
														<tr>
														<td>Password</td>
														<td>:</td>
														<td><input id="password" name="mypassword" type="password" /></td>
														</tr>
														<tr>
														<td></td>
														<td></td>
														<td><input name="Submit" type="submit" value="Entra" onclick="notEmpty(document.getElementById('username'), 'Per favore digita il nome utente'), notEmpty(document.getElementById('password'), 'Per favore digita la password')";/></td>
														</tr>
													</table>
												</form>
											</td>
										</tr>
									</table> 
		        
		    				</div>                   

               			 </div>
                		<div class="cleared"></div>
                	</div>

					<div class="cleared"></div>
    			</div>
			</div>

            <div class="cleared"></div>
         </div>
      </div>
  	</div>
 </div>
 <?php include '../include/footer.php'; ?>
</body>
</html>
