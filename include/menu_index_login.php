<section id="services">
<div class="container-fluid bg-3 text-center" >
		  <div class="row" style="padding-top: 20px;padding-bottom: 20px;">
			    <?php 
                if ($_SESSION['myrole'] < 7){
				?>
			    <div class="col-sm-3">
			      <a href="./iscrizioni/iscrizioni_gestione_ricerca.php"><img src="images/ico_compila.png" alt="fatture"></a>
			      <p class="info">Fatture</p>
			    </div>
			    <?php 	
				}
				?>
				
			    <?php 
                if ($_SESSION['myrole'] < 2){
				?>
			    <div class="col-sm-3">
			      <a href="./invio_conservazione/iscrizioni_gestione_ricerca.php"><img src="images/ico_conserva.png" alt="Conservazione"></a>
			      <p class="info">Conservazione</p>
			    </div>
			    <?php 	
				}
				?>
				
				<?php 
                if ($_SESSION['myrole'] < 2){
				?>
			    <div class="col-sm-3">
			      <a href="./index_pacchetti.php"><img src="images/ico_pacchetti.png" alt="Pacchetti"></a>
			      <p class="info">Pacchetti</p>
			    </div>
			    <?php 	
				}
				?>
				
				<?php 
                if ($_SESSION['myrole'] < 2){
				?>
			    <div class="col-sm-3">
			      <a href="./quietanze/compilazione_quietanza.php"><img src="images/quietanze.png" alt="Quietanze"></a>
			      <p class="info">Quietanze</p>
			    </div>
			    <?php 	
				}
				?>
			    
		  </div>
		  <div class="row">
			    
		  </div>
		  <div class="row" style="padding-top: 20px;padding-bottom: 20px;">
		  		<?php 
                if ($_SESSION['myrole'] < 2){
				?>
			    <div class="col-sm-3">
			      <a href="./index_visure_camerali.php"><img src="images/visure.png" alt="Visure"></a>
			      <p class="info">Visure camerali</p>
			    </div>
			    <?php 	
				}
				?>
				
			    <?php 
                if ($_SESSION['myrole'] < 2){
				?>
			    <div class="col-sm-3">
			      <a href="./convenzioni/convenzionati_gestione_ricerca.php"><img src="images/convenzioni.png" alt="Convenzioni"></a>
			      <p class="info">Convenzioni</p>
			    </div>
			    <?php 	
				}
				?>
				
			    <?php 
                if ($_SESSION['myrole'] < 2){
				?>
			    <div class="col-sm-3">
			      <a href="./index_movimenti_bancari.php"><img src="images/euro.png" alt="Movimenti bancari"></a>
			      <p class="info">Movimenti bancari</p>
			    </div>
			    <?php 	
				}
				?>
			    
		  </div>
		 
	</div> 
</section>