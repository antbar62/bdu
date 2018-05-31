<section id="services">
<div class="container-fluid bg-3 text-center" >
		  <div class="row" style="padding-top: 20px;padding-bottom: 20px;">
			    <?php 
                //if ($_SESSION['myrole'] < 7){
				?>
			    <div class="col-sm-3">
			       <a href="/backoffice/pacchetti/compilazione_pacchetto_card.php?categoria=fatture"><img src="../images/ico_pacchetti.png" alt="Fatture"></a>
			      <p class="info">Pacchetti di fatture</p>
			    </div>
			    
			    <?php 	
				//}
				?>
				
			    <?php 
                if ($_SESSION['myrole'] < 9){
				?>
			    <div class="col-sm-3">
			      <a href="/backoffice/pacchetti/compilazione_pacchetto_card?categoria=conservazione"><img src="../images/ico_conserva.png" alt="Conservazione"></a>
			      <p class="info">Pacchetti di conservazione</p>
			    </div>
			    <?php 	
				}
				?>
				
				<?php 
                if ($_SESSION['myrole'] < 9){
				?>
			    <div class="col-sm-3">
			      <a href="/backoffice/pacchetti/compilazione_pacchetto_card?categoria=pec"><img src="../images/ico_PEC_standard1.png" alt="PEC"></a>
			      <p class="info">Email PEC</p>
			    </div>
			    <?php 	
				}
				?>
				
				<?php 
                if ($_SESSION['myrole'] < 9){
				?>
			    <div class="col-sm-3">
			      <a href="/backoffice/pacchetti/compilazione_pacchetto_card?categoria=mepa"><img src="../images/ico_MePA.png" alt="MEPA"></a>
			      <p class="info">Servizi MEPA</p>
			    </div>
			    <?php 	
				}
				?>
				
		  </div>
		  <div class="row">
			    
		  </div>
		  
		  
			   
		  </div>
		 
	</div> 
</section>