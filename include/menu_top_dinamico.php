
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
                   	// se ruolo ==  SUPER AMMINISTRATORE
	                if ($_SESSION['myrole'] == 1){
					?>
					
					
					
                    <li class="dropdown">
                    	
                    	<a  class="dropdown-toggle" data-toggle="dropdown" href="#">FATTURE<span class="caret"></span></a>
	                    
	                    <ul class="dropdown-menu multi-level">
				            
							<li class="dropdown-submenu">
			                     
			                     <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Compilazione fattura</a>
			                     
			                     <ul class="dropdown-menu">
			                     	
			                     	<li>
					                     <a href="/backoffice/iscrizioni/aziende/compilazione_fattura.php?tipo_richiesta=3">Azienda</a>
					                </li>
					                
					                <li class="divider"></li>
				              		
				              		<li class="dropdown-submenu">
					                
					                     	<a  class="dropdown-submenu" data-toggle="dropdown" href="#">Professionista</a>
					                     	
					                     	<ul class="dropdown-menu">
					                     	<li class="dropdown-submenu">
							                 	<a  class="dropdown-submenu" data-toggle="dropdown" href="#">Fattura alla P.A.</a>
							                
								                <ul class="dropdown-menu">
							                     	<li >
									                     <a href="/backoffice/iscrizioni/professionisti/compilazione_fattura.php?tipo_richiesta=3">Standard</a>
									                </li>
									                <li >
									                     <a href="/backoffice/iscrizioni/professionisti_equitalia/compilazione_fattura.php?tipo_richiesta=3">per Equitalia</a>
									                </li>
								                </ul>
							                </li>	
							                
							                <li class="divider"></li>	
							                	
							                <li class="dropdown-submenu">
							                
									            <a  class="dropdown-submenu" data-toggle="dropdown" href="#">Fattura ai PRIVATI</a>
									                
								                <ul class="dropdown-menu">
							                     	<li >
									                     <a href="/backoffice/iscrizioni/professionisti/compilazione_fattura_pr.php?tipo_richiesta=3">Standard</a>
									                </li>
								                </ul>
							                
							                </li>	
							                </ul>
					                </li>
					                
					               
					                
			                     </ul>		
			                     	                     
			                </li>
							
							<li class="page-scroll">
			                    <a href="/backoffice/iscrizioni/iscrizioni_gestione_ricerca.php">Elenco fatture compilate</a>
			                </li>
							
							<li class="page-scroll">
			                    <a href="/backoffice/invio_cartacee/iscrizioni_gestione.php">Fatture cartacee</a>
			                </li>
			                							
							 <li class="page-scroll">
			                    <a href="/backoffice/iscrizioni/iscrizioni_esiti_ricerca.php">Notifiche da SDI</a>
			                </li>
							<li class="page-scroll">
			                    <a href="/backoffice/fatture_temporanee/iscrizioni_gestione_ricerca.php">Fatture temporanee</a>
			                </li>
			                 <li class="page-scroll">
			                    <a href="/backoffice/invio_cartacee_temporanee/iscrizioni_gestione_ricerca.php">Fatture cartacee temporanee</a>
			                </li>
							
				        </ul>
                    </li>
                    
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
                    
                    <li class="dropdown">
                    	<a  class="dropdown-toggle" data-toggle="dropdown" href="#">PACCHETTI
                    	<span class="caret"></span>
                    	</a>
	                    <ul class="dropdown-menu">
				            
							<li>
			                    <a href="/backoffice/pacchetti/pacchetti_gestione_ricerca.php">Gestione pacchetti</a>
			                </li>
			                
			                <li>
			                    <a href="/backoffice/pacchetti/pacchetti_prepagati_gestione_ricerca.php">Gestione pacchetti prepagati</a>
			                </li>
							
							<li>
			                    <a href="/backoffice/pacchetti_temp/pacchetti_gestione.php">Gestione pacchetti temporanei</a>
			                </li>
							
				        </ul>
                    </li>
                    
                    <li class="dropdown">
                    	<a  class="dropdown-toggle" data-toggle="dropdown" href="#">QUIETANZE
                    	<span class="caret"></span>
                    	</a>
	                    <ul class="dropdown-menu">
				            
							<li>
			                     <a href="/backoffice/quietanze/compilazione_quietanza.php">Compilazione quietanza</a>
			                </li>
							
				        </ul>
                    </li>
                    
                    <li class="dropdown">
                    	<a  class="dropdown-toggle" data-toggle="dropdown" href="#">VISURE
                    	<span class="caret"></span>
                    	</a>
	                    <ul class="dropdown-menu">
				            
							<li>
			                     <a href="/backoffice/richieste_visure/iscrizioni_gestione.php">Gestione visure</a>
			                </li>
							
							<li>
			                    <a href="/backoffice/richieste_visure_temporanee/iscrizioni_gestione.php">Visure temporaneee</a>
			                </li>
							
				        </ul>
                    </li>
                    
                    <li class="dropdown">
                    	<a  class="dropdown-toggle" data-toggle="dropdown" href="#">CONVENZIONI
                    	<span class="caret"></span>
                    	</a>
	                    <ul class="dropdown-menu">
				            
							<li>
			                     <a href="/backoffice/convenzioni/convenzionati_gestione_ricerca.php">Gestione convenzionati</a>
			                </li>
							
				        </ul>
                    </li>
                    <li class="dropdown">
                    	<a  class="dropdown-toggle" data-toggle="dropdown" href="#">UTENTI
                    	<span class="caret"></span>
                    	</a>
	                    <ul class="dropdown-menu">
				            
							<li>
			                     <a href="/backoffice/tabelle/anagrafica_utenti_gestione_ricerca.php">Anagrafica</a>
			                </li>
				        </ul>
                    </li>
                    <li class="dropdown">
                    	<a  class="dropdown-toggle" data-toggle="dropdown" href="#">MOVIMENTI BANCARI
                    	<span class="caret"></span>
                    	</a>
	                    <ul class="dropdown-menu">
				            
							<li>
			                     <a href="/backoffice/utilita/importa_bonifici.php">Importa</a>
			                </li>
							
							<li>
			                     <a href="/backoffice/utilita/iscrizione_bonifici_gestione_ricerca.php">Visualizza</a>
			                </li>
							
				        </ul>
                    </li>
                    
                    <li class="dropdown">
                    	<a  class="dropdown-toggle" data-toggle="dropdown" href="#">Messaggi
                    	<span class="caret"></span>
                    	</a>
	                    <ul class="dropdown-menu">
				            
							<li>
			                     <a href="/backoffice/messaggi/invio_messaggio.php?mod=0">Invia messaggio</a>
			                </li>
							
				        </ul>
                    </li>
                    
                    <?php 	
					}
					?>
					
					<?php 
                   	// se ruolo == AMMINISTRATORE
	                if ($_SESSION['myrole'] == 2){
					?>
                    <li class="dropdown">
                    	
				       <a  class="dropdown-toggle" data-toggle="dropdown" href="#">FATTURE<span class="caret"></span></a>
	                    
	                    <ul class="dropdown-menu multi-level">
				            
							<li class="dropdown-submenu">
			                     
			                     <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Compilazione fattura</a>
			                     
			                     <ul class="dropdown-menu">
			                     	
			                     	<li>
					                     <a href="/backoffice/iscrizioni/aziende/compilazione_fattura.php?tipo_richiesta=3">Azienda</a>
					                </li>
					                
					                <li class="divider"></li>
				              		
				              		<li class="dropdown-submenu">
					                
					                     	<a  class="dropdown-submenu" data-toggle="dropdown" href="#">Professionista</a>
					                     	
					                     	<ul class="dropdown-menu">
					                     	<li class="dropdown-submenu">
							                 	<a  class="dropdown-submenu" data-toggle="dropdown" href="#">Fattura alla P.A.</a>
							                
								                <ul class="dropdown-menu">
							                     	<li >
									                     <a href="/backoffice/iscrizioni/professionisti/compilazione_fattura.php?tipo_richiesta=3">Standard</a>
									                </li>
									                <li >
									                     <a href="/backoffice/iscrizioni/professionisti_equitalia/compilazione_fattura.php?tipo_richiesta=3">per Equitalia</a>
									                </li>
								                </ul>
							                </li>	
							                
							                <li class="divider"></li>	
							                	
							                <li class="dropdown-submenu">
							                
									            <a  class="dropdown-submenu" data-toggle="dropdown" href="#">Fattura ai PRIVATI</a>
									                
								                <ul class="dropdown-menu">
							                     	<li >
									                     <a href="/backoffice/iscrizioni/professionisti/compilazione_fattura_pr.php?tipo_richiesta=3">Standard</a>
									                </li>
								                </ul>
							                
							                </li>	
							                </ul>
					                </li>
					                
					               
					                
			                     </ul>		
			                     	                     
			                </li>
							<li>
			                     <a href="/backoffice/iscrizioni/iscrizioni_gestione_ricerca.php">Elenco fatture compilate</a>
			                </li>
			                
			                <li class="page-scroll">
			                    <a href="/backoffice/invio_cartacee/iscrizioni_gestione.php">Fatture cartacee</a>
			                </li>
			                
			                <li class="page-scroll">
			                    <a href="/backoffice/iscrizioni/iscrizioni_esiti_ricerca.php">Notifiche da SDI</a>
			                </li>
							
							<li class="page-scroll">
			                    <a href="/backoffice/fatture_temporanee/iscrizioni_gestione_ricerca.php">Fatture temporanee</a>
			                </li>
			                
			                <li class="page-scroll">
			                    <a href="/backoffice/invio_cartacee_temporanee/iscrizioni_gestione_ricerca.php">Fatture cartacee temporanee</a>
			                </li>
			                
			                <!--  
			                <li>
			                     <a href="/backoffice/iscrizioni/iscrizioni_ricevute_gestione_ricerca.php">Elenco fatture ricevute</a>
			                </li>
							-->
				        </ul>
                    </li>
                   
                    
                    <li class="dropdown">
                    	<a  class="dropdown-toggle" data-toggle="dropdown" href="#">PACCHETTI
                    	<span class="caret"></span>
                    	</a>
	                    <ul class="dropdown-menu">
				            
							<li>
			                    <a href="/backoffice/pacchetti/pacchetti_gestione_ricerca.php">Gestione pacchetti</a>
			                </li>
							
							<li>
			                    <a href="/backoffice/pacchetti_temp/pacchetti_gestione.php">Gestione pacchetti temporanei</a>
			                </li>
							
				        </ul>
                    </li>
                    
                    <li class="dropdown">
                    	<a  class="dropdown-toggle" data-toggle="dropdown" href="#">QUIETANZE
                    	<span class="caret"></span>
                    	</a>
	                    <ul class="dropdown-menu">
				            
							<li>
			                     <a href="/backoffice/quietanze/compilazione_quietanza.php">Compilazione quietanza</a>
			                </li>
							
				        </ul>
                    </li>
                    
                    <li class="dropdown">
                    	<a  class="dropdown-toggle" data-toggle="dropdown" href="#">UTENTI
                    	<span class="caret"></span>
                    	</a>
	                    <ul class="dropdown-menu">
				            
							<li>
			                     <a href="/backoffice/tabelle/anagrafica_utenti_gestione_ricerca.php">Anagrafica</a>
			                </li>
				        </ul>
                    </li>
                    
                    <li class="dropdown">
                    	<a  class="dropdown-toggle" data-toggle="dropdown" href="#">MOVIMENTI BANCARI
                    	<span class="caret"></span>
                    	</a>
	                    <ul class="dropdown-menu">
				            
							<li>
			                     <a href="/backoffice/utilita/importa_bonifici.php">Importa</a>
			                </li>
							
							<li>
			                     <a href="/backoffice/utilita/iscrizione_bonifici_gestione_ricerca.php">Visualizza</a>
			                </li>
							
				        </ul>
                    </li>
                    
                    <li class="dropdown">
                    	<a  class="dropdown-toggle" data-toggle="dropdown" href="#">Messaggi
                    	<span class="caret"></span>
                    	</a>
	                    <ul class="dropdown-menu">
				            
							<li>
			                     <a href="/backoffice/messaggi/invio_messaggio.php?mod=0">Invia messaggio</a>
			                </li>
							
				        </ul>
                    </li>
                    
                    <?php 	
					}
					?>
					
					<?php 
                   	// se ruolo ==  COMMERCIALISTA
	                if ($_SESSION['myrole'] == 4){
					?>
					
					
                    <li class="dropdown">
                    	
                    	<a  class="dropdown-toggle" data-toggle="dropdown" href="#">FATTURE<span class="caret"></span></a>
	                    
	                    <ul class="dropdown-menu multi-level">
							
							<li class="page-scroll">
			                    <a href="/backoffice/iscrizioni/iscrizioni_gestione_ricerca.php">Elenco fatture compilate</a>
			                </li>
							
							<li class="page-scroll">
			                    <a href="/backoffice/invio_cartacee/iscrizioni_gestione.php">Fatture cartacee</a>
			                </li>
							
				        </ul>
                    </li>
                    
                    <li class="dropdown">
                    	<a  class="dropdown-toggle" data-toggle="dropdown" href="#">PACCHETTI
                    	<span class="caret"></span>
                    	</a>
	                    <ul class="dropdown-menu">
				            
							<li>
			                    <a href="/backoffice/pacchetti/pacchetti_gestione_ricerca.php">Gestione pacchetti</a>
			                </li>
							
				        </ul>
                    </li>
                    
                    <li class="dropdown">
                    	<a  class="dropdown-toggle" data-toggle="dropdown" href="#">QUIETANZE
                    	<span class="caret"></span>
                    	</a>
	                    <ul class="dropdown-menu">
							
			                <li>
			                     <a href="/backoffice/quietanze/compilazione_quietanza.php">Compilazione quietanza</a>
			                </li>
			                
			                <li>
			                    <a href="/backoffice/tabelle/contatore_quietanze_insmod.php">Contatore quietanze</a>
			                </li>
			                
				        </ul>
                    </li>
                    
                    
                    <?php 	
					}
					?>
					
					<?php 
					// se ruolo == COMPILATORE CARTACEE
	                if ($_SESSION['myrole'] == 5 ){
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
			                     <a href="/backoffice/iscrizioni/iscrizioni_gestione_ricerca.php">Elenco fatture compilate</a>
			                </li>
			                
			                <li class="page-scroll">
			                    <a href="/backoffice/invio_cartacee/iscrizioni_gestione.php">Fatture cartacee</a>
			                </li>
			                <li class="page-scroll">
			                    <a href="/backoffice/fatture_temporanee/iscrizioni_gestione_ricerca.php">Fatture temporanee</a>
			                </li>
			                 <li class="page-scroll">
			                    <a href="/backoffice/invio_cartacee_temporanee/iscrizioni_gestione_ricerca.php">Fatture cartacee temporanee</a>
			                </li>
			                <!--  
			                <li>
			                     <a href="/backoffice/iscrizioni/iscrizioni_ricevute_gestione_ricerca.php">Elenco fatture ricevute</a>
			                </li>
							-->
				        </ul>
                    </li>
                    
                    <li class="dropdown">
                    	<a  class="dropdown-toggle" data-toggle="dropdown" href="#">PACCHETTI
                    	<span class="caret"></span>
                    	</a>
	                    <ul class="dropdown-menu">
				            
							<li>
			                    <a href="/backoffice/pacchetti/pacchetti_gestione_ricerca.php">Gestione pacchetti</a>
			                </li>
							
							<?php 
							  // se ruolo == WEB, AMMINISTRATORE, OPERATORE,OPERATORE DESK, VISUALIZZATORE
			                if ($_SESSION['myrole'] == 1){
							?>
							<li>
			                    <a href="/backoffice/pacchetti_temp/pacchetti_gestione.php">Gestione pacchetti temporanei</a>
			                </li>
							<?php 	
							}
							?>
							
				        </ul>
                    </li>
                    <li class="dropdown">
                    	<a  class="dropdown-toggle" data-toggle="dropdown" href="#">UTENTI
                    	<span class="caret"></span>
                    	</a>
	                    <ul class="dropdown-menu">
				            
							<li>
			                     <a href="/backoffice/tabelle/anagrafica_utenti_gestione_ricerca.php">Anagrafica</a>
			                </li>
				        </ul>
                    </li>
                    <?php 	
					}
					?>
					
					<?php 
					// se ruolo == REGISTERED USER
	                if ($_SESSION['myrole'] == 7) {
					?>
					
					<li class="dropdown">
                    	
                    	<a  class="dropdown-toggle" data-toggle="dropdown" href="#">FATTURE<span class="caret"></span></a>
	                    
	                    <ul class="dropdown-menu">
				            
							<li class="dropdown-submenu">
			                     
			                     <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Compilazione fattura</a>
			                     
			                     <ul class="dropdown-menu">
			                     	
									<?php 
									// se tipologia_prestatore == ENTE PUBBLICO
					                if ($_SESSION['tipologiaprestatore'] == 5){
									?>
			                     	<li>
					                     <a href="/backoffice/iscrizioni/aziende/compilazione_fattura.php?tipo_richiesta=3">Ente</a>
					                </li>
					                <?php 	
									}
									?>
			                     	
									<?php 
									// se tipologia_prestatore == AZIENDA
					                if ($_SESSION['tipologiaprestatore'] == 2){
									?>
			                     	<li>
					                     <a href="/backoffice/iscrizioni/aziende/compilazione_fattura.php?tipo_richiesta=3">Azienda</a>
					                </li>
					                
					                <?php 	
									}
									?>
									
									<?php 
									// se tipologia_prestatore == PROFESSIONISTA
					                if ($_SESSION['tipologiaprestatore'] == 1 ){
									?>
			                     	<li class="dropdown-submenu">
					                
						                <a  class="dropdown-submenu" data-toggle="dropdown" href="#">Fattura alla P.A.</a>
						                
						                <ul class="dropdown-menu">
					                     	<li >
							                     <a href="/backoffice/iscrizioni/professionisti/compilazione_fattura.php?tipo_richiesta=3">Standard</a>
							                </li>
							                <li >
							                     <a href="/backoffice/iscrizioni/professionisti_equitalia/compilazione_fattura.php?tipo_richiesta=3">per Equitalia</a>
							                </li>
						                </ul>
					                </li>
					                <li class="dropdown-submenu">
					                
						                <a  class="dropdown-submenu" data-toggle="dropdown" href="#">Fattura ai PRIVATI</a>
						                
						                <ul class="dropdown-menu">
					                     	<li >
							                     <a href="/backoffice/iscrizioni/professionisti/compilazione_fattura_pr.php?tipo_richiesta=3">Standard</a>
							                </li>
						                </ul>
					                </li>
					                
					                <?php 	
									}
									?>
			                     
			                     </ul>
			                     
			                </li>
							<li class="page-scroll">
					                    <!-- <a href="/backoffice/invio_cartacee/compilazione_cartacea.php">Invio fattura cartacea</a> -->
					                </li>
							<li>
			                     <a href="/backoffice/iscrizioni/iscrizioni_gestione_ricerca.php">Elenco fatture inviate a SDI</a>
			                </li>
			                
			                <li>
			                     <a href="/backoffice/iscrizioni/iscrizioni_ricevute_gestione_ricerca.php">Elenco fatture ricevute da SDI</a>
			                </li>
							
				        </ul>
                    </li>
                    <?php 	
					}
					?>
					<?php 
					// se ruolo == SERVICE allora compila fatture per aziende e professionisti
	                if ($_SESSION['myrole'] == 6) {
					?>
					
					<li class="dropdown">
                    	
                    	<a  class="dropdown-toggle" data-toggle="dropdown" href="#">FATTURE<span class="caret"></span></a>
	                    
	                    <ul class="dropdown-menu multi-level">
				            
							<li class="dropdown-submenu">
			                     
			                     <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Compilazione fattura</a>
			                     
			                     <ul class="dropdown-menu">
			                     	
			                     	<li>
					                     <a href="/backoffice/iscrizioni/aziende/compilazione_fattura.php?tipo_richiesta=3">Azienda</a>
					                </li>
					                
					                <li class="divider"></li>
				              		
				              		<li class="dropdown-submenu">
					                
					                     	<a  class="dropdown-submenu" data-toggle="dropdown" href="#">Professionista</a>
					                     	
					                     	<ul class="dropdown-menu">
					                     	
					                     	<li class="dropdown-submenu">
							                 	
							                 	<a  class="dropdown-submenu" data-toggle="dropdown" href="#">Fattura alla P.A.</a>
							                
								                <ul class="dropdown-menu">
							                     	<li >
									                     <a href="/backoffice/iscrizioni/professionisti/compilazione_fattura.php?tipo_richiesta=3">Standard</a>
									                </li>
									                <li >
									                     <a href="/backoffice/iscrizioni/professionisti_equitalia/compilazione_fattura.php?tipo_richiesta=3">per Equitalia</a>
									                </li>
								                </ul>
							                </li>	
							                
							                <li class="divider"></li>	
							                	
							                <li class="dropdown-submenu">
							                
									            <a  class="dropdown-submenu" data-toggle="dropdown" href="#">Fattura ai PRIVATI</a>
									                
								                <ul class="dropdown-menu">
							                     	<li >
									                     <a href="/backoffice/iscrizioni/professionisti/compilazione_fattura_pr.php?tipo_richiesta=3">Standard</a>
									                </li>
								                </ul>
							                
							                </li>	
							                </ul>
					                </li>
					                
					               
					                
			                     </ul>		
			                     	                     
			                </li>
							<li class="page-scroll">
					                    <a href="/backoffice/invio_cartacee/compilazione_cartacea.php">Invio fattura cartacea</a>
					        </li>
							<li>
							<li>
			                     <a href="/backoffice/iscrizioni/iscrizioni_gestione_ricerca.php">Elenco fatture inviate</a>
			                </li>
			                
	                		
				        </ul>
                    </li>
                    <?php 	
					}
					?>
					
					<?php 
                    // se ruolo == SERVICE, REGISTERED USER ESCLUSO ENTI PUBBLICI
	                if ( ($_SESSION['myrole'] == 7 || $_SESSION['myrole'] == 6) && $_SESSION['tipologiaprestatore'] != 5 ){
					?>
					
					
					<!--  
					<li class="dropdown">
                    	
                    	<a  class="dropdown-toggle" data-toggle="dropdown" href="#">CONSERVAZIONE<span class="caret"></span></a>
	                    
	                    <ul class="dropdown-menu">
				            
							<li>
			                     <a href="/backoffice/invio_conservazione/compilazione_conservazione.php">Invio documento da conservare</a>
			                </li>
							
							<li >
			                     <a href="/backoffice/invio_conservazione/iscrizioni_gestione.php">Elenco documenti in conservazione</a>
			                </li>
							
				        </ul>
                    </li>
                     -->
                    <?php 	
					}
					?>
					
					 <?php 
                    // se ruolo == SERVICE, REGISTERED USER
	                if ($_SESSION['myrole'] == 9 ){
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
                    // se ruolo == FPA-POINT
	                if ($_SESSION['myrole'] == 8){
					?>
					
					<li class="dropdown">
                    	
                    	<a  class="dropdown-toggle" data-toggle="dropdown" href="#">VENDITE<span class="caret"></span></a>
	                    
	                    <ul class="dropdown-menu">
				            <!-- 
							<li >
			                     <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Servizio fatturazione</a>
			                </li>
			               	
			                <li class="divider"></li>
			                
			                <li>
			                     <a href="/backoffice/pacchetti/compilazione_pacchetto_card.php">Gift-card</a>
			                </li>
							
							<li>
			                     <a href="/backoffice/pacchetti/pacchetti_card_gestione.php">Elenco Gift-card vendute</a>
			                </li>
			                
			                <li class="divider"></li>
			                 -->
			                <li>
			                     <a href="/backoffice/pacchetti_vendite/scelta_categoria_pacchetto.php">Pacchetti e servizi</a>
			                </li>
							
							<li>
			                     <a href="/backoffice/pacchetti_vendite/pacchetti_gestione.php">Elenco pacchetti e servizi venduti</a>
			                </li>
							
				        </ul>
                    </li>
                    <li class="dropdown">
                    	
                    	<a  class="dropdown-toggle" data-toggle="dropdown" href="#">CATALOGO<span class="caret"></span></a>
	                    
	                    <ul class="dropdown-menu">
			                
			                <li>
			                     <a href="/backoffice/catalogo_vendite/categorie_catalogo_gestione.php">Categorie</a>
			                </li>
							
							<li>
			                     <a href="/backoffice/catalogo_vendite/pacchetti_catalogo_gestione.php">Pacchetti</a>
			                </li>
							
				        </ul>
                    </li>
					 <li class="dropdown">
                    	
                    	<a  class="dropdown-toggle" data-toggle="dropdown" href="#">ACQUISTI<span class="caret"></span></a>
	                    
	                    <ul class="dropdown-menu">
				            
							<li>
			                     <a href="/backoffice/pacchetti/scelta_categoria_pacchetto.php">Pacchetti e servizi</a>
			                </li>
							
							<li>
			                     <a href="/backoffice/pacchetti/pacchetti_gestione.php">Elenco pacchetti e servizi acquistati</a>
			                </li>
							
				        </ul>
                    </li>
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
					<li class="dropdown">
                    	
                    	<a  class="dropdown-toggle" data-toggle="dropdown" href="#">FATTURE<span class="caret"></span></a>
	                    
	                    <ul class="dropdown-menu multi-level">
				            
							<li class="dropdown-submenu">
			                     
			                     <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Compilazione fattura</a>
			                     
			                     <ul class="dropdown-menu">
			                     	
			                     	<li>
					                     <a href="/backoffice/iscrizioni/aziende/compilazione_fattura.php?tipo_richiesta=3">Azienda</a>
					                </li>
					                
					                <li class="divider"></li>
				              		
				              		<li class="dropdown-submenu">
					                
					                     	<a  class="dropdown-submenu" data-toggle="dropdown" href="#">Professionista</a>
					                     	
					                     	<ul class="dropdown-menu">
					                     	
					                     	<li class="dropdown-submenu">
							                 	
							                 	<a  class="dropdown-submenu" data-toggle="dropdown" href="#">Fattura alla P.A.</a>
							                
								                <ul class="dropdown-menu">
							                     	<li >
									                     <a href="/backoffice/iscrizioni/professionisti/compilazione_fattura.php?tipo_richiesta=3">Standard</a>
									                </li>
									                <li >
									                     <a href="/backoffice/iscrizioni/professionisti_equitalia/compilazione_fattura.php?tipo_richiesta=3">per Equitalia</a>
									                </li>
								                </ul>
							                </li>	
							                
							                <li class="divider"></li>	
							                	
							                <li class="dropdown-submenu">
							                
									            <a  class="dropdown-submenu" data-toggle="dropdown" href="#">Fattura ai PRIVATI</a>
									                
								                <ul class="dropdown-menu">
							                     	<li >
									                     <a href="/backoffice/iscrizioni/professionisti/compilazione_fattura_pr.php?tipo_richiesta=3">Standard</a>
									                </li>
								                </ul>
							                
							                </li>	
							                </ul>
					                </li>
					                
					               
					                
			                     </ul>		
			                     	                     
			                </li>
							<li class="page-scroll">
			                    <a href="/backoffice/invio_cartacee/compilazione_cartacea.php">Invio fattura cartacea</a>
			                </li>
							<li>
							<li>
			                     <a href="/backoffice/iscrizioni/iscrizioni_gestione_ricerca.php">Elenco fatture compilate</a>
			                </li>
			                
	                		
				        </ul>
                    </li>
                   
                    <li class="dropdown">
                    	<a  class="dropdown-toggle" data-toggle="dropdown" href="#">PRESTATORI
                    	<span class="caret"></span>
                    	</a>
	                    <ul class="dropdown-menu">
				            
							<li>
			                     <a href="/backoffice/tabelle/anagrafica_gestione.php">Anagrafica</a>
			                </li>
				        </ul>
                    </li>
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
					
                    <?php 
                    // se ruolo == SERVICE, REGISTERED USER
	                if ( $_SESSION['myrole'] == 6 || $_SESSION['myrole'] == 7){
					?>
					
					<li class="dropdown">
                    	
                    	<a  class="dropdown-toggle" data-toggle="dropdown" href="#">PACCHETTI<span class="caret"></span></a>
	                    
	                    <ul class="dropdown-menu">
				            
							<li>
			                     <a href="/backoffice/pacchetti/scelta_categoria_pacchetto.php">Acquisto</a>
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
					// se ruolo == SERVICE 
	                if ($_SESSION['myrole'] == 6 ){
					?>
                    <li class="dropdown">
                    	<a  class="dropdown-toggle" data-toggle="dropdown" href="#">PRESTATORI
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
					// se ruolo == SERVICE, REGISTERED USER
					 if ($_SESSION['myrole'] == 7 || $_SESSION['myrole'] == 6  || $_SESSION['myrole'] == 9){
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
					// se ruolo == SERVICE, REGISTERED USER
					 if ($_SESSION['myrole'] == 7 || $_SESSION['myrole'] == 6  || $_SESSION['myrole'] == 9) {
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
					
					<?php 
					// se ruolo == SERVICE, REGISTERED USER
					 if ($_SESSION['myrole'] != 1 && $_SESSION['myrole'] != 2) {
					?>
					<li class="dropdown">
                    	
                    	<?php 
						// se ruolo == SERVICE, REGISTERED USER
						if ($_SESSION['myrole'] == 8) {
						?>
                    	<a  class="dropdown-toggle" data-toggle="dropdown" href="#">DATI FPA-POINT
                    	<?php 	
						}
						else if ($_SESSION['myrole'] == 7 && $_SESSION['tipologiaprestatore'] == 1 ) { // se ruolo == SERVICE, REGISTERED USER
						?>
                    	<a  class="dropdown-toggle" data-toggle="dropdown" href="#">DATI PROFESSIONISTA
                    	<?php 	
						}
						
						// se ruolo == SERVICE, REGISTERED USER
						else if ($_SESSION['myrole'] == 7  && $_SESSION['tipologiaprestatore'] == 2) {
						?>
                    	<a  class="dropdown-toggle" data-toggle="dropdown" href="#">DATI AZIENDA
                    	<?php 	
						}
						 
						// se ruolo == SERVICE, REGISTERED USER
						else if ($_SESSION['myrole'] == 7  && $_SESSION['tipologiaprestatore'] == 5) {
						?>
                    	<a  class="dropdown-toggle" data-toggle="dropdown" href="#">DATI ENTE
                    	<?php 	
						}
						else  {
						?>
                    	<a  class="dropdown-toggle" data-toggle="dropdown" href="#">DATI UTENTE
                    	<?php 
						}	
						?>
                    	<span class="caret"></span>
                    	</a>
	                    
	                    <ul class="dropdown-menu">
				            
							<li>
			                     <a href="/backoffice/tabelle/anagrafica_utente_insmod.php?mod=1">Anagrafica</a>
			                </li>
			                
			                <li>
			                     <a href="/backoffice/tabelle/password_utente_insmod.php?mod=1">Modifica password </a>
			                </li>
			                
	                		<?php 
							// se tipologia_prestatore == PROFESSIONISTA, AZIENDA e ruolo == REGISTERED USER
			                if ( ($_SESSION['tipologiaprestatore'] == 1 || $_SESSION['tipologiaprestatore'] == 2) && ($_SESSION['myrole'] == 7 || $_SESSION['myrole'] == 8)) {
							?>
							<li class="divider"></li>
		                    <li >
		                     	<a href="/backoffice/tabelle/numerazione_fatture_utente_gestione.php">Numerazione fatture </a>
			                </li>
			                
			                <li >
			                     <a href="/backoffice/tabelle/impostazioni_fiscali_utente_gestione.php">Impostazioni fiscali </a>
			                </li>
			                
			                
			                
				            <?php 	
							}
							?>   
			                
			                <?php 
							// se tipologia_prestatore == PROFESSIONISTA, AZIENDA e ruolo == REGISTERED USER
			                if ( ($_SESSION['tipologiaprestatore'] == 1 || $_SESSION['tipologiaprestatore'] == 2) &&  ($_SESSION['myrole'] == 7 || $_SESSION['myrole'] == 8)) {
							?>
							<li class="divider"></li>
			                <li>
			                     <a href="/backoffice/tabelle/impostazione_sdi_utente_insmod.php?mod=1">Impostazioni per ricezione fatture da SDI </a>
			                </li>
			                 <li>
			                     <a href="/backoffice/tabelle/password_pec_utente_insmod.php?mod=1">Modifica password PEC</a>
			                </li>
			                <?php 	
							}
							?>  
			                <li class="divider"></li>
			                <li >
			                     <a href="/backoffice/tabelle/impostazioni_firma_utente_insmod.php?mod=1">Impostazioni firma </a>
			                </li>
			                
				        </ul>
                    </li>
                    <?php 	
					}
					?>
                    <li ><a  href="/backoffice/logout.php">LOGOUT</a></li> 
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
