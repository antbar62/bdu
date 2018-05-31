<section id="services">
<div class="container-fluid bg-3 text-center" >
		  <div class="row" style="padding-top: 20px;padding-bottom: 20px;">
		  		<div class="col-sm-1">
			       
			    </div>
			    <?php 
                //if ($_SESSION['myrole'] < 7){
				?>
			    <div class="col-sm-2">
			       <a href="/backoffice/pacchetti/compilazione_pacchetto.php?categoria=fatture_elettroniche"><img src="../images/ico_pacchetti.png" alt="Pacchetti"></a>
			      <p class="info">Fatture elettroniche</p>
			    </div>
			    
			    
			    <?php 	
				//}
				?>
				
				<?php 
                if ($_SESSION['myrole'] < 9){
				?>
			    
			    <div class="col-sm-2">
			       <a href="/backoffice/pacchetti/compilazione_pacchetto.php?categoria=fatture_cartacee"><img src="../images/ico_pacchetti.png" alt="Pacchetti"></a>
			      <p class="info">Fatture cartacee</p>
			    </div>
			    
			    <?php 	
				}
				?>
				
			    <?php 
                if ($_SESSION['myrole'] < 9){
				?>
			    <div class="col-sm-2">
			      <a href="/backoffice/pacchetti/compilazione_pacchetto.php?categoria=conservazione"><img src="../images/ico_conserva.png" alt="Conservazione"></a>
			      <p class="info">Pacchetti di conservazione</p>
			    </div>
			    <?php 	
				}
				?>
				
				<?php 
                if ($_SESSION['myrole'] < 9){
				?>
			    <div class="col-sm-2">
			      <a href="/backoffice/pacchetti/compilazione_pacchetto.php?categoria=pec"><img src="../images/ico_PEC_standard1.png" alt="Pacchetti"></a>
			      <p class="info">Email PEC</p>
			    </div>
			    <?php 	
				}
				?>
				
				<?php 
                if ($_SESSION['myrole'] < 9){
				?>
			    <div class="col-sm-2">
			      <a href="/backoffice/pacchetti/compilazione_pacchetto.php?categoria=mepa"><img src="../images/ico_MePA.png" alt="Pacchetti"></a>
			      <p class="info">Servizi MEPA</p>
			    </div>
			    <?php 	
				}
				?>
				<div class="col-sm-1">
			       
			    </div>
		  </div>
		  <div class="row">
			    
		  </div>
		  
		  
			   
		  </div>
		 
	</div> 
</section>