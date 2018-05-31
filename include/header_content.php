<?php 
	session_set_cookie_params('36000'); // 1 hour
	session_start();
?>		
		
		<header>
	        <div class="header-content">
	            <div class="header-content-inner">
	            	<div class="row">
	            		<div class="col-sm-2 col-md-2" style="margin-top:80px;">
	            				<img src="http://www.fatturarepa.it/backoffice/img/FPA_button.png" class="img-circle" alt="logo" width="100" heigth="100">
	                	</div>	
	                	<div class="col-sm-8 col-md-8" style="position:relative;margin-top:100px;">
	                		<h1 id="homeHeading"><?php echo $_SESSION['TITOLO'];?></h1>
	                	</div>	
	                	<div class="col-sm-1 col-md-1" style="position:relative;margin-top:80px;margin-right:20px;">
	            			<?php 
	            			if ($_SESSION['urlimage']!="") {
	            			?>
	            				<img src="<?php echo $_SESSION['urlimage'];?>" class="img-circle" alt="utente" width="100" heigth="100">
	            			<?php 
	            			}
	            			else{
	            			?>
	            				<img src="http://www.fatturarepa.it/backoffice/images/utente.jpg" class="img-circle" alt="utente" width="100" heigth="100">
	            			<?php 
	            			}
	            			?>
	                		
	                	</div>	
	                	<?php 
	            		if ($_SESSION['myrole']>0) {
	            		?>
	                	<div class="col-sm-1 col-md-1" style="position:relative;margin-top:60px;margin-left:-45px;";>
	                		<table>
		                		<tr >
		                			<td style="color:white;";>
		                				<h6><b>UTENTE: </b><?php echo $_SESSION['myusername'];?></h6>
		                			</td>
		                		</tr>
		                		<tr>
		                			<td style="color:white;";>
		                				<h6><b>TIPOLOGIA: </b><?php echo $_SESSION['nometipologiauser'];?></h6>
		                			</td>
		                		</tr>
		                		<tr>
		                			<td style="color:white;";>
		                				<h6><b>RUOLO: </b><?php echo $_SESSION['nomeruolo'];?></h6>
		                			</td>
		                		</tr>
	                		</table>
	                	</div>
	                	<?php 
            			}
            			?>
	                </div>
	            </div>
	        </div>
	    </header>
