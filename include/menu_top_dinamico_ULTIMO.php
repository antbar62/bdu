
<!-- Navigation -->    
     <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
           
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="/backoffice/index.php">HOME</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                
                <ul class="nav navbar-nav navbar-right">
                
                   	<?php 
                   	
                   	
	                if ($_SESSION['myrole'] < 5){
					?>
                    <li class="dropdown">
                    	<a  class="dropdown-toggle" data-toggle="dropdown" href="#">FATTURE
                    	<span class="caret"></span>
                    	</a>
	                    <ul class="dropdown-menu">
							<?php 
			                if ($_SESSION['myrole'] < 5){
							?>
							<li class="page-scroll">
			                    <a href="/backoffice/invio_cartacee/iscrizioni_gestione.php">Fatture cartacee</a>
			                </li>
			                <li class="page-scroll">
			                    <a href="/backoffice/iscrizioni/iscrizioni_gestione_ricerca.php">Fatture</a>
			                </li>
							<?php 	
							}
							?>
							
			               
			                <?php 
			                if ($_SESSION['myrole'] < 6){
							?>
							 <li class="page-scroll">
			                    <a href="/backoffice/iscrizioni/iscrizioni_esiti_ricerca.php">Notifiche da SDI</a>
			                </li>
							<li class="page-scroll">
			                    <a href="/backoffice/fatture_temporanee/iscrizioni_gestione_ricerca.php">Fatture temporanee</a>
			                </li>
			                 <li class="page-scroll">
			                    <a href="/backoffice/invio_cartacee_temporanee/iscrizioni_gestione_ricerca.php">Fatture cartacee temporanee</a>
			                </li>
							<?php 	
							}
							?>
				        </ul>
                    </li>
                    <?php 	
					}
					?>
					
                    <?php 
	                if ($_SESSION['myrole'] < 2){
					?>
                    <li class="dropdown">
                    	<a  class="dropdown-toggle" data-toggle="dropdown" href="#">CONSERVAZIONE
                    	<span class="caret"></span>
                    	</a>
                    	 <ul class="dropdown-menu">
				           <li>
			                    <a href="/backoffice/invio_conservazione/iscrizioni_gestione_ricerca.php">Documenti in conservazione</a>
			                </li>
				        </ul>
				        
                    </li>
                    <?php 	
					}
					?>
					
                    <?php 
	                if ($_SESSION['myrole'] < 6){
					?>
                    <li class="dropdown">
                    	<a  class="dropdown-toggle" data-toggle="dropdown" href="#">PACCHETTI
                    	<span class="caret"></span>
                    	</a>
	                    <ul class="dropdown-menu">
				            <?php 
			                if ($_SESSION['myrole'] < 6){
							?>
							<li>
			                    <a href="/backoffice/pacchetti/pacchetti_gestione_ricerca.php">Gestione pacchetti</a>
			                </li>
							<?php 	
							}
							?>
							<?php 
			                if ($_SESSION['myrole'] < 6){
							?>
							<li>
			                    <a href="/backoffice/pacchetti_temp/pacchetti_gestione.php">Gestione pacchetti temporanei</a>
			                </li>
							<?php 	
							}
							?>
				        </ul>
                    </li>
                    <?php 	
					}
					?>
					
					<?php 
	                if ($_SESSION['myrole'] < 6){
					?>
                    <li class="dropdown">
                    	<a  class="dropdown-toggle" data-toggle="dropdown" href="#">QUIETANZE
                    	<span class="caret"></span>
                    	</a>
	                    <ul class="dropdown-menu">
				            <?php 
			                if ($_SESSION['myrole'] < 2){
							?>
							<li>
			                     <a href="/backoffice/quietanze/compilazione_quietanza.php">Compilazione quietanza</a>
			                </li>
							<?php 	
							}
							?>
							
							
				        </ul>
                    </li>
                    <?php 	
					}
					?>
					
					<?php 
	                if ($_SESSION['myrole'] < 2){
					?>
                    <li class="dropdown">
                    	<a  class="dropdown-toggle" data-toggle="dropdown" href="#">VISURE
                    	<span class="caret"></span>
                    	</a>
	                    <ul class="dropdown-menu">
				            <?php 
			                if ($_SESSION['myrole'] < 2){
							?>
							<li>
			                     <a href="/backoffice/richieste_visure/iscrizioni_gestione.php">Gestione visure</a>
			                </li>
							<?php 	
							}
							?>
							
							<?php 
			                if ($_SESSION['myrole'] < 2){
							?>
							<li>
			                    <a href="/backoffice/richieste_visure_temporanee/iscrizioni_gestione.php">Visure temporaneee</a>
			                </li>
							<?php 	
							}
							?>
				        </ul>
                    </li>
                    <?php 	
					}
					?>
					
					<?php 
	                if ($_SESSION['myrole'] < 2){
					?>
                    <li class="dropdown">
                    	<a  class="dropdown-toggle" data-toggle="dropdown" href="#">CONVENZIONI
                    	<span class="caret"></span>
                    	</a>
	                    <ul class="dropdown-menu">
				            <?php 
			                if ($_SESSION['myrole'] < 5){
							?>
							<li>
			                     <a href="/backoffice/convenzioni/convenzionati_gestione_ricerca.php">Gestione convenzionati</a>
			                </li>
							<?php 	
							}
							?>
				        </ul>
                    </li>
                    <?php 	
					}
					?>
					
					<?php 
	                if ($_SESSION['myrole'] < 2){
					?>
                    <li class="dropdown">
                    	<a  class="dropdown-toggle" data-toggle="dropdown" href="#">MOVIMENTI BANCARI
                    	<span class="caret"></span>
                    	</a>
	                    <ul class="dropdown-menu">
				            <?php 
			                if ($_SESSION['myrole'] < 2){
							?>
							<li>
			                     <a href="/backoffice/utilita/importa_bonifici.php">Importa</a>
			                </li>
							<?php 	
							}
							?>
							<?php 
			                if ($_SESSION['myrole'] < 2){
							?>
							<li>
			                     <a href="/backoffice/utilita/iscrizione_bonifici_gestione_ricerca.php">Visualizza</a>
			                </li>
							<?php 	
							}
							?>
				        </ul>
                    </li>
                    <?php 	
					}
					?>
					
					
					<?php 
	                if ($_SESSION['myrole'] == 6){
					?>
					
					<li class="dropdown">
                    	
                    	<a  class="dropdown-toggle" data-toggle="dropdown" href="#">FATTURE<span class="caret"></span></a>
	                    
	                    <ul class="dropdown-menu">
				            
							<li class="dropdown-submenu">
			                     
			                     <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Compilazione fattura</a>
			                     
			                     <ul class="dropdown-menu">
			                     	
			                     	<li>
					                     <a href="/backoffice/iscrizioni/aziende/compilazione_fattura.php?tipo_richiesta=3">Azienda</a>
					                </li>
					                
					                <li >
					                     <a href="/backoffice/iscrizioni/professionisti/compilazione_fattura.php?tipo_richiesta=3">Professionista</a>
					                </li>
			                     
			                     </ul>
			                     
			                </li>
							
							<li>
			                     <a href="/backoffice/iscrizioni/iscrizioni_gestione_ricerca.php">Elenco fatture inviate</a>
			                </li>
			                <!--  
			                <li>
			                     <a href="/backoffice/iscrizioni/iscrizioni_ricevute_gestione_ricerca.php">Elenco fatture ricevute</a>
			                </li>
							-->
				        </ul>
                    </li>
                    <?php 	
					}
					?>
					
					<?php 
	                if ($_SESSION['myrole'] == 7){
	                	
					?>
					
					<li class="dropdown">
                    	
                    	<a  class="dropdown-toggle" data-toggle="dropdown" href="#">FATTURE<span class="caret"></span></a>
	                    
	                    <ul class="dropdown-menu">
				            
							<li class="dropdown-submenu">
			                     
			                     <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Compilazione fattura</a>
			                     
			                     <ul class="dropdown-menu">
			                     	
									<?php 
					                if ($_SESSION['tipologiaprestatore'] == 5){
									?>
			                     	<li>
					                     <a href="/backoffice/iscrizioni/aziende/compilazione_fattura.php?tipo_richiesta=3">Ente</a>
					                </li>
					                <?php 	
									}
									?>
			                     	
									<?php 
					                if ($_SESSION['tipologiaprestatore'] == 2){
									?>
			                     	<li>
					                     <a href="/backoffice/iscrizioni/aziende/compilazione_fattura.php?tipo_richiesta=3">Azienda</a>
					                </li>
					                <?php 	
									}
									?>
									
									<?php 
					                if ($_SESSION['tipologiaprestatore'] == 1){
									?>
			                     	<li >
					                     <a href="/backoffice/iscrizioni/professionisti/compilazione_fattura.php?tipo_richiesta=3">Professionista</a>
					                </li>
					                <?php 	
									}
									?>
			                     
			                     </ul>
			                     
			                </li>
							
							<li>
			                     <a href="/backoffice/iscrizioni/iscrizioni_gestione_ricerca.php">Elenco fatture inviate</a>
			                </li>
			                
	                		<?php 
			                if ($_SESSION['tipologiaprestatore'] == 5){
							?>
	                     		<li>
				                     <a href="/backoffice/iscrizioni/iscrizioni_ricevute_gestione_ricerca.php">Elenco fatture ricevute</a>
				                </li>
			                <?php 	
							}
							?>
			                
							
				        </ul>
                    </li>
                    <?php 	
					}
					?>
                    
                    <?php 
	                if ($_SESSION['myrole'] == 7 || $_SESSION['myrole'] == 6){
					?>
					
					<li class="dropdown">
                    	
                    	<a  class="dropdown-toggle" data-toggle="dropdown" href="#">PACCHETTI<span class="caret"></span></a>
	                    
	                    <ul class="dropdown-menu">
				            
							<li>
			                     <a href="/backoffice/pacchetti/compilazione_pacchetto.php">Acquisto</a>
			                </li>
							
							<li>
			                     <a href="/backoffice/pacchetti/pacchetti_gestione.php">Elenco pacchetti acquistati</a>
			                </li>
							
				        </ul>
                    </li>
                    <?php 	
					}
					?>
                    
					<?php 
	                if ($_SESSION['myrole'] == 7 || $_SESSION['myrole'] == 6){
					?>
                    <li class="dropdown">
                    	<?php 
		                if ($_SESSION['tipologiaprestatore'] == 5){
						?>
                     	<a  class="dropdown-toggle" data-toggle="dropdown" href="#">ANAGRAFICA ENTE
                     	
		                <?php 	
						}
						else {
						?>
                     	<a  class="dropdown-toggle" data-toggle="dropdown" href="#">PRESTATORI
		                <?php 	
						}
						?>
                    	
                    	<span class="caret"></span>
                    	</a>
	                    <ul class="dropdown-menu">
				            
							<li>
			                     <a href="/backoffice/tabelle/anagrafica_gestione.php">Anagrafica</a>
			                </li>
				        </ul>
                    </li>
                    <?php 	
					}
					?>
					
					<?php 
					 if ($_SESSION['myrole'] == 7 || $_SESSION['myrole'] == 6){
					?>
                    <li class="dropdown">
                    	<a  class="dropdown-toggle" data-toggle="dropdown" href="#">COMMITTENTI
                    	<span class="caret"></span>
                    	</a>
	                    <ul class="dropdown-menu">
				            
							<li>
			                     <a href="/backoffice/tabelle/anagrafica_committenti_gestione.php">Anagrafica</a>
			                </li>
							
				        </ul>
                    </li>
                    <?php 	
					}
					?>
					
					<?php 
					 if ($_SESSION['myrole'] == 7 || $_SESSION['myrole'] == 6) {
					?>
                    <li class="dropdown">
                    	<a  class="dropdown-toggle" data-toggle="dropdown" href="#">STATISTICHE
                    	<span class="caret"></span>
                    	</a>
	                    <ul class="dropdown-menu">
				            
							<li>
			                     <a href="/backoffice/dashboard/dashboard_gestione.php">Statistiche</a>
			                </li>
							
				        </ul>
                    </li>
                    <?php 	
					}
					?>
					<li class="dropdown">
                    	<a  class="dropdown-toggle" data-toggle="dropdown" href="#">UTENTE
                    	<span class="caret"></span>
                    	</a>
	                    <ul class="dropdown-menu">
				            
							<li>
			                     <a href="/backoffice/tabelle/anagrafica_utente_insmod.php?mod=1">Modifica dati utente</a>
			                </li>
			                
			                <li>
			                     <a href="/backoffice/tabelle/password_utente_insmod.php?mod=1">Modifica la password utente</a>
			                </li>
			                <?php 
							 if ($_SESSION['myrole'] == 0) {
							?>
			                 <li>
			                     <a href="/backoffice/tabelle/password_pec_utente_insmod.php?mod=1">Modifica la password PEC</a>
			                </li>
			                 <?php 	
					}
					?>
							
				        </ul>
                    </li>
                    <li ><a  href="/backoffice/logout.php">LOGOUT</a></li> 
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
