<?php 

include './global/global.php';
// impostazione di connessione al database
$host=$DB_nomeHost; // Hostname
$db_username=$DB_utente; // Mysql username
$db_password=$DB_password; // Mysql password
$db_name=$DB_nomeDB; //Nome del Database

// Procedimento per connettersi al Database
mysql_connect("$host", "$db_username", "$db_password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB"); 

//-----------------------------------------------------------
// CONTEGGIO FATTURE TOTALI
//-----------------------------------------------------------
// conteggio numero fatture compilate
$query  = "SELECT * ";
$query .= "FROM fpa_elaborazioni ";
$query .= "WHERE ";
$query .= " id_elaborazione > 0  ";
if ($_SESSION['myrole'] > 4){ // COMPILATORE CARTACEE				
	$query .= " and fpa_elaborazioni.user_id=".$_SESSION['id_operatore'];
}
else { // COMPILATORE CARTACEE				
	$query .= " and fpa_elaborazioni.operatore_id=".$_SESSION['id_operatore'];
}
$query .= " and year(fpa_elaborazioni.data_elaborazione)=YEAR(CURDATE()) ";

$result = mysql_query($query);
if ($result !=null) {
	$numeroFattureCompilate = mysql_num_rows($result);
}
else {
	$numeroFattureCompilate = 0;
}

// conteggio numero fatture consegnate
$query  = "SELECT * ";
$query .= "FROM fpa_elaborazioni ";
$query .= "WHERE ";
$query .= " id_elaborazione > 0  ";
if ($_SESSION['myrole'] > 4){ // COMPILATORE CARTACEE				
	$query .= " and fpa_elaborazioni.user_id=".$_SESSION['id_operatore'];
}
else { // COMPILATORE CARTACEE				
	$query .= " and fpa_elaborazioni.operatore_id=".$_SESSION['id_operatore'];
}
$query .= " and year(fpa_elaborazioni.data_elaborazione)=YEAR(CURDATE()) ";
$query .= " and stato_esito=5 ";
$result = mysql_query($query);
if ($result !=null) {
	$numeroFattureConsegnate = mysql_num_rows($result);
}
else {
	$numeroFattureConsegnate = 0;
}

// conteggio numero fatture accettate
$query  = "SELECT * ";
$query .= "FROM fpa_elaborazioni ";
$query .= "WHERE ";
$query .= " id_elaborazione > 0  ";

if ($_SESSION['myrole'] > 4){ // COMPILATORE CARTACEE				
	$query .= " and fpa_elaborazioni.user_id=".$_SESSION['id_operatore'];
}
else { // COMPILATORE CARTACEE				
	$query .= " and fpa_elaborazioni.operatore_id=".$_SESSION['id_operatore'];
}
$query .= " and year(fpa_elaborazioni.data_elaborazione)=YEAR(CURDATE()) ";
$query .= " and (stato_esito=1 or stato_esito=4)";
$result = mysql_query($query);
if ($result !=null) {
	$numeroFattureAccettate = mysql_num_rows($result);
}
else {
	$numeroFattureAccettate = 0;
}

// conteggio numero fatture scartate
$query  = "SELECT * ";
$query .= "FROM fpa_elaborazioni ";
$query .= "WHERE ";
$query .= " id_elaborazione > 0  ";
if ($_SESSION['myrole'] > 4){ // COMPILATORE CARTACEE				
	$query .= " and fpa_elaborazioni.user_id=".$_SESSION['id_operatore'];
}
else { // COMPILATORE CARTACEE				
	$query .= " and fpa_elaborazioni.operatore_id=".$_SESSION['id_operatore'];
}
$query .= " and year(fpa_elaborazioni.data_elaborazione)=YEAR(CURDATE()) ";
$query .= " and stato_esito=2 ";
$result = mysql_query($query);
if ($result !=null) {
	$numeroFattureScartate = mysql_num_rows($result);
}
else {
	$numeroFattureScartate = 0;
}

// conteggio numero fatture rifiutate
$query  = "SELECT * ";
$query .= "FROM fpa_elaborazioni ";
$query .= "WHERE ";
$query .= " id_elaborazione > 0  ";
if ($_SESSION['myrole'] > 4){ // COMPILATORE CARTACEE				
	$query .= " and fpa_elaborazioni.user_id=".$_SESSION['id_operatore'];
}
else { // COMPILATORE CARTACEE				
	$query .= " and fpa_elaborazioni.operatore_id=".$_SESSION['id_operatore'];
}
$query .= " and year(fpa_elaborazioni.data_elaborazione)=YEAR(CURDATE()) ";
$query .= " and stato_esito=3 ";
$result = mysql_query($query);
if ($result !=null) {
	$numeroFattureRifiutate = mysql_num_rows($result);
}
else {
	$numeroFattureRifiutate = 0;
}


?>
<section id="services">

<div class="container-fluid bg-3 text-center" >
		 
		  <div class="row" style="padding-top: 20px;padding-bottom: 20px;">
		  		<?php 
                if ($_SESSION['myrole'] == 5){ // COMPILATORE CARTACEE
				?>
				 <div class="col-sm-2"> 
				      <a href="./iscrizioni/iscrizioni_gestione_ricerca.php"><img src="images/ico_compila.png" alt="fatture inviate" width="125" height="125" width="125" height="125"></a>
				      <p class="info">Fatture inviate</p>
			     </div>
			    
			     <div class="col-sm-2">
				      <a href="./pacchetti/pacchetti_gestione_ricerca.php"><img src="images/ico_pacchetti.png" alt="Pacchetti" width="125" height="125" width="125" height="125"></a>
				      <p class="info">Pacchetti</p>
				 </div>
			    
			    <div class="col-sm-2">
			      	<a href="./tabelle/anagrafica_utente_insmod.php?mod=1"><img src="images/utente.jpg" alt="Anagrafica utente" width="125" height="125" width="125" height="125"></a>
			      	<p class="info">Anagrafica utente</p>
			    </div>
			    
			     <div class="col-sm-2">
			      	<a href="./tabelle/password_utente_insmod.php?mod=1"><img src="images/chiave_password.jpg" alt="Password utente" width="125" height="125" width="125" height="125"></a>
			      	<p class="info">Modifica password</p>
			    </div>
				<?php 	
				}
				?>
				
				<?php 
				if ($_SESSION['myrole'] == 1){ // SUPER AMMINISTRATORE
				?>
					<div class="col-sm-2">
				      <a href="./iscrizioni/iscrizioni_gestione_ricerca.php"><img src="images/ico_compila.png" alt="fatture inviate" width="125" height="125" width="125" height="125"></a>
				      <p class="info">Fatture</p>
				    </div>
					
					<div class="col-sm-2">
				      <a href="./invio_conservazione/iscrizioni_gestione_ricerca.php"><img src="images/ico_conserva.png" alt="Conservazione" width="125" height="125" width="125" height="125"></a>
				      <p class="info">Conservazione</p>
				    </div>
				    
				    <div class="col-sm-2">
				      <a href="./pacchetti/pacchetti_gestione_ricerca.php"><img src="images/ico_pacchetti.png" alt="Pacchetti" width="125" height="125"></a>
				      <p class="info">Pacchetti</p>
				    </div>
				    
				    <div class="col-sm-2">
				      <a href="./quietanze/compilazione_quietanza.php"><img src="images/quietanze.png" alt="Quietanze" width="125" height="125"></a>
				      <p class="info">Quietanze</p>
				    </div>
				    
				    <div class="col-sm-2">
				      <a href="./visure/index_visure_camerali.php"><img src="images/visure.png" alt="Visure" width="125" height="125"></a>
				      <p class="info">Visure camerali</p>
				    </div>
				    
				    <div class="col-sm-2">
				      <a href="./convenzioni/convenzionati_gestione_ricerca.php"><img src="images/convenzioni.png" alt="Convenzioni" width="125" height="125"></a>
				      <p class="info">Convenzioni</p>
				    </div>
				   
				    
				<?php 	
				}
				?>
			    
			    <?php 
				if ($_SESSION['myrole'] == 2){ // AMMINISTRATORE
				?>
					<div class="col-sm-2">
				      <a href="./iscrizioni/iscrizioni_gestione_ricerca.php"><img src="images/ico_compila.png" alt="fatture inviate" width="125" height="125"></a>
				      <p class="info">Fatture</p>
				    </div>
				    
				    <div class="col-sm-2">
				      <a href="./pacchetti_gestione_ricerca.php"><img src="images/ico_pacchetti.png" alt="Pacchetti" width="125" height="125"></a>
				      <p class="info">Pacchetti</p>
				    </div>
				    
				    <div class="col-sm-2">
				      <a href="./quietanze/compilazione_quietanza.php"><img src="images/quietanze.png" alt="Quietanze" width="125" height="125"></a>
				      <p class="info">Quietanze</p>
				    </div>
				    				    
				    <div class="col-sm-2">
				      <a href="./index_movimenti_bancari.php"><img src="images/euro.png" alt="Movimenti bancari" width="125" height="125"></a>
				      <p class="info">Movimenti bancari</p>
				    </div>
				    
				<?php 	
				}
				?>
				<?php 
				 if ( $_SESSION['myrole'] == 4 ){ // COMMERCIALISTA
				?>
					<div class="col-sm-2">
				      <a href="./iscrizioni/iscrizioni_gestione_ricerca.php"><img src="images/ico_compila.png" alt="fatture inviate" width="125" height="125"></a>
				      <p class="info">Fatture inviate</p>
				    </div>                   
                   
                    <div class="col-sm-2">
				      <a href="./pacchetti/pacchetti_gestione_ricerca.php"><img src="images/ico_pacchetti.png" alt="Pacchetti" width="125" height="125"></a>
				      <p class="info">Pacchetti</p>
				    </div>
				    
				    
                   <?php 	
				}
				?>
				
				
				<?php 
				 if ( $_SESSION['myrole'] == 6 ){ // SERVICE
				?>
					<div class="col-sm-2">
				      <a href="./iscrizioni/iscrizioni_gestione_ricerca.php"><img src="images/ico_compila.png" alt="fatture inviate" width="125" height="125"></a>
				      <p class="info">Fatture inviate</p>
				    </div>                   
                   
                    <div class="col-sm-2">
				      <a href="./pacchetti/pacchetti_gestione_ricerca.php"><img src="images/ico_pacchetti.png" alt="Pacchetti" width="125" height="125"></a>
				      <p class="info">Pacchetti</p>
				    </div>
				    
                    <div class="col-sm-2">
				      <a href="./tabelle/anagrafica_gestione.php"><img src="images/ico_professionisti.png" alt="Prestatore" width="125" height="125"></a>
				      <p class="info">Prestatori</p>
				    </div>
				    
				    <div class="col-sm-2">
				      <a href="./tabelle/anagrafica_committenti_gestione.php"><img src="images/quietanze.png" alt="Committente" width="125" height="125"></a>
				      <p class="info">Committenti</p>
				    </div>
				    
				    <div class="col-sm-2">
				      <a href="./dashboard/dashboard_gestione.php"><img src="images/statistiche.jpg" alt="Statistiche" width="125" height="125"></a>
				      <p class="info">Statistiche</p>
				    </div>
				    
                   <?php 	
				}
				?>
				
				<?php 
				 if ( $_SESSION['myrole'] == 7 ){ // REGISTERED USER
				?>
				<div class="col-sm-1"></div>  
				<div class="col-sm-2">
				      <a href="./iscrizioni/iscrizioni_gestione_ricerca.php"><img src="images/ico_compila.png" alt="fatture inviate" width="125" height="125"></a>
				      <p class="info">Fatture inviate</p>
				</div>                   
                   
                 <div class="col-sm-2">
				      <a href="./pacchetti/pacchetti_gestione_ricerca.php"><img src="images/ico_pacchetti.png" alt="Pacchetti" width="125" height="125"></a>
				      <p class="info">Pacchetti</p>
				 </div>
				 
				 <div class="col-sm-2">
				      <a href="./tabelle/anagrafica_committenti_gestione.php"><img src="images/quietanze.png" alt="Committente" width="125" height="125"></a>
				      <p class="info">Committenti</p>
				 </div>
				    
			    <div class="col-sm-2">
			      <a href="./tabelle/anagrafica_utente_insmod.php?mod=1"><img src="images/utente.jpg" alt="Anagrafica utente" width="125" height="125"></a>
			      <p class="info">Anagrafica utente</p>
			    </div>
			    
			     <div class="col-sm-2">
			      <a href="./tabelle/password_utente_insmod.php?mod=1"><img src="images/chiave_password.jpg" alt="Password utente" width="125" height="125"></a>
			      <p class="info">Modifica password</p>
			    </div>
			    
			    <div class="col-sm-1"></div> 
			    
			    <?php 	
				}
				?>
				
				<?php 
				 if ( $_SESSION['myrole'] == 8 ){ // FPA-POINT
				?>
					<div class="col-sm-1"></div>  
				<div class="col-sm-2">
				      <a href="./iscrizioni/iscrizioni_gestione_ricerca.php"><img src="images/ico_compila.png" alt="fatture inviate" width="125" height="125"></a>
				      <p class="info">Fatture inviate</p>
				</div>                   
                   
                 <div class="col-sm-2">
				      <a href="./pacchetti/pacchetti_gestione_ricerca.php"><img src="images/ico_pacchetti.png" alt="Pacchetti" width="125" height="125"></a>
				      <p class="info">Pacchetti</p>
				 </div>
				 
				 <div class="col-sm-2">
				      <a href="./tabelle/anagrafica_committenti_gestione.php"><img src="images/quietanze.png" alt="Committente" width="125" height="125"></a>
				      <p class="info">Committenti</p>
				 </div>
				    
			    <div class="col-sm-2">
			      <a href="./tabelle/anagrafica_utente_insmod.php?mod=1"><img src="images/utente.jpg" alt="Anagrafica utente" width="125" height="125"></a>
			      <p class="info">Anagrafica utente</p>
			    </div>
			    
			     <div class="col-sm-2">
			      <a href="./tabelle/password_utente_insmod.php?mod=1"><img src="images/chiave_password.jpg" alt="Password utente" width="125" height="125"></a>
			      <p class="info">Modifica password</p>
			    </div>
			    
			    <div class="col-sm-1"></div> 
				    
                   <?php 	
				}
				?>
			
			</div> <!-- FINE PRIMA RIGA -->
		  
			
			
			<?php 
			 if ( $_SESSION['myrole'] != 4) { // TUTTI TRANNE COMMERCIALISTA
			?>
			
			<div class="row" style="padding-top: 20px;padding-bottom: 20px;">
			
                    <div class="col-sm-2 col-lg-2 col-md-2">
                    	 
                    	 <div class="panel panel-default">
                            <div class="panel-heading">
	                            <i class="fa fa-fw"></i> Anno 2018
	                        </div>
                        </div>
                        
                        <div class="panel panel-compilate">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                        
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
                                        <?php echo $numeroFattureCompilate; ?>
                                        </div>
                                        <div>Fatture compilate</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <div class="panel panel-consegnate">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                        
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $numeroFattureConsegnate; ?></div>
                                        <div>Fatture consegnate</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <div class="panel panel-accettate">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                        
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $numeroFattureAccettate; ?></div>
                                        <div>Fatture accettate</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="panel panel-rifiutate">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $numeroFattureRifiutate; ?></div>
                                        <div>Fatture rifiutate</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div> <!-- FINE PRIMA COLONNA - SECONDA RIGA -->           
                    
                    <div class="col-sm-5 col-lg-5 col-md-5"> <!-- INIZIO SECONDA  COLONNA - SECONDA RIGA -->
                    
	                    <div class="panel panel-default">
	                        <div class="panel-heading">
	                            <i class="fa fa-bell fa-fw"></i> Notifiche dallo SDI
	                        </div>
	                        <!-- /.panel-heading -->
	                        <div class="panel-body">
	                        <?php 
	                        $query  = "select ";
							$query  .= "fpa_notifiche_fatture.data_notifica, ";
							$query  .= "fpa_notifiche_fatture.codice_fiscale,  ";
							$query  .= "fpa_notifiche_fatture.numero_invio,  ";
							$query  .= "fpa_notifiche_fatture.numero_pa,  ";
							$query  .= "fpa_notifiche_fatture.stato_notifica,  ";
							$query  .= "fpa_notifiche_fatture.motivazione,  ";
							$query  .= "fpa_stato_esito.Descrizione,  ";
							$query  .= "fpa_notifiche_fatture.nome_file_xml  ";
							$query  .= "from fpa_notifiche_fatture, fpa_stato_esito, fpa_elaborazioni  ";
							$query  .= "where  ";
							$query  .= "fpa_notifiche_fatture.stato_notifica = fpa_stato_esito.id and ";
							$query  .= "fpa_notifiche_fatture.nome_file_xml = fpa_elaborazioni.nome_file_xml  ";
							
							if ( $_SESSION['myrole'] > 5){ // REGISTERED USER
								$query  .= "and fpa_elaborazioni.user_id =". $_SESSION['id_operatore']."  ";
							}
							$query  .= "order by data_notifica DESC, codice_fiscale, numero_invio  ";
							$query  .= "LIMIT 5  ";
							//echo $query;
	                        $result = mysql_query($query);
	                        while (($riga = mysql_fetch_object($result))) {
	                        		$xml = simplexml_load_file("../out_fatture/".$riga->nome_file_xml);
							?>
		                            <div class="list-group">
		                                <a href="#" class="list-group-item">
		                                    <i class="fa fa-comment fa-fw"></i> 
		                                    documento nr. <b><?php echo $xml->FatturaElettronicaBody->DatiGenerali->DatiGeneraliDocumento->Numero;?></b> 
		                                    inviato a <b><?php echo $xml->FatturaElettronicaHeader->CessionarioCommittente->DatiAnagrafici->Anagrafica->Denominazione;?></b>,		                                    
		                                    con esito <b><?php echo $riga->Descrizione;?></b>
		                                    <span class="pull-right text-muted small">
		                                    <em><?php echo decodeDayDatetime($riga->data_notifica);?> - <?php echo decodeHourDatetime($riga->data_notifica);?></em>
		                                    </span>
		                                </a>
		                            </div>
                            <?php 
                            }	
							?>
                            <!-- /.list-group -->
                            
                            </div>
                        </div>
                        
                  	</div> <!-- FINE SECONDA COLONNA - SECONDA RIGA -->           
                  	
                  	<div class="col-sm-5 col-lg-5 col-md-5"> <!-- INIZIO TERZA  COLONNA - SECONDA RIGA -->
                    
		                    <div class="panel panel-default">
		                        
		                        <div class="panel-heading">
		                            <i class="fa fa-bell fa-fw"></i> Ultime fatture
		                        </div> <!-- /.panel-heading -->
		                        
		                        <div class="panel-body">
		                        <?php 
		                        $query2  = "SELECT ";
								$query2 .= "fpa_elaborazioni.id_elaborazione, ";
								$query2 .= "fpa_elaborazioni.data_elaborazione, ";
								$query2 .= "fpa_elaborazioni.cognome, ";
								$query2 .= "fpa_elaborazioni.nome, ";
								$query2 .= "fpa_elaborazioni.codice_fiscale, ";
								$query2 .= "fpa_elaborazioni.partita_iva, ";
								$query2 .= "fpa_elaborazioni.denominazione, ";
								$query2 .= "fpa_elaborazioni.email, ";
								$query2 .= "fpa_elaborazioni.nome_file_xml, ";
								$query2 .= "fpa_elaborazioni.nome_file_pdf, ";
								$query2 .= "fpa_elaborazioni.stato, ";
								$query2 .= "fpa_elaborazioni.operatore_id, ";
								$query2 .= "fpa_elaborazioni.tipo_richiesta, ";
								$query2 .= "fpa_elaborazioni.stato_firma, ";
								$query2 .= "fpa_elaborazioni.stato_invio, ";
								$query2 .= "fpa_elaborazioni.stato_esito, ";
								$query2 .= "fpa_elaborazioni.stato_conservazione, ";
								$query2 .= "fpa_stato_conservazione.descrizione as descrizione_stato_conservazione, ";
								$query2 .= "fpa_elaborazioni.data_elaborazione, ";
								$query2 .= "fpa_elaborazioni.codice_pacchetto, ";
								$query2 .= "fpa_elaborazioni.modalita_pagamento, ";
								$query2 .= "fpa_pacchetti.qta_iniziale, ";
														
								if ($_SESSION['myrole'] < 7){
									$query2 .= "fpa_pacchetti.qta, ";
									$query2 .= "apc_user.role_id, ";
									$query2 .= "apc_user.user, ";
									$query2 .= "apc_user.nome as nome_user ";
								}
								else{
									$query2 .= "fpa_pacchetti.qta ";
								}
							
								$query2 .= "FROM fpa_elaborazioni ";
								$query2 .= "LEFT JOIN fpa_pacchetti ON fpa_elaborazioni.codice_pacchetto = fpa_pacchetti.codice ";
								
								if ($_SESSION['myrole'] < 7 || $_SESSION['myrole'] == 8){
									$query2 .= "LEFT JOIN apc_user ON fpa_elaborazioni.operatore_id=apc_user.user_id ";
								}
								
								$query2 .= "LEFT JOIN fpa_stato_conservazione ON fpa_elaborazioni.stato_conservazione=fpa_stato_conservazione.id ";
								$query2 .= "WHERE id_elaborazione > 0 and year(fpa_elaborazioni.data_elaborazione)=2018 ";
								
								if ($_SESSION['myrole'] == 6){
									$query2 .= "and fpa_elaborazioni.user_id=".$_SESSION['id_operatore'] ." ";
								}
								
								if ($_SESSION['myrole'] == 7){
									$query2 .= "and fpa_elaborazioni.user_id=".$_SESSION['id_operatore'] ." ";
								}
								
			 					if ($_SESSION['myrole'] == 8){
									$query2 .= "and fpa_elaborazioni.user_id=".$_SESSION['id_operatore'] ." ";
								}
								$query2 .= "ORDER BY id_elaborazione DESC ";
		                        $query2 .= "LIMIT 5 ";
		                        //echo $query2."<br>";
		                        $result2 = mysql_query($query2);
		                       
		                        
		                        ?>
		                        <table class="table myTableFormat" > 
									<thead style="background-color: orange;">	
									    <tr >
											<th >Data</th>
											<th >Ora</th>
											<th >Codice</th>
											<th >Committente</th>
											<th >Tipologia</th>
											<th >Numero</th>
											<th >Data</th>
											
									    </tr>
									</thead>
									<tbody>
										<?php
										 while (($riga2 = mysql_fetch_object($result2))) {
										 		$temp = file_get_contents("http://www.fatturarepa.it/out_fatture/".$riga2->nome_file_xml);
 												$xml2 = simplexml_load_string($temp);
	                        					//$xml2 = simplexml_load_file($_SERVER['DOCUMENT_ROOT']."/out_fatture/".$riga2->nome_file_xml);
										?>
										<tr >
												<td align="center"><?php echo decodeDayDatetime($riga2->data_elaborazione);?></td>
												<td align="center"><?php echo decodeHourDatetime($riga2->data_elaborazione);?></td>
												<td align="center">
													<?php
													echo $xml2->FatturaElettronicaHeader->DatiTrasmissione->CodiceDestinatario;
													?>
												</td>
												<td align="center">
													<?php
													echo $xml2->FatturaElettronicaHeader->CessionarioCommittente->DatiAnagrafici->Anagrafica->Denominazione;
													?>
												</td>
												
												<td align="center">
													<?php
													echo $xml2->FatturaElettronicaBody->DatiGenerali->DatiGeneraliDocumento->TipoDocumento;
													?>
												</td>
												
												<td align="center">
													<?php
													echo $xml2->FatturaElettronicaBody->DatiGenerali->DatiGeneraliDocumento->Numero;
													?>
												</td>
												
												<td align="center">
													<?php
													echo $xml2->FatturaElettronicaBody->DatiGenerali->DatiGeneraliDocumento->Data;
													?>
												</td>	
												
		                       			<tr >
		                       			<?php 	
										}
										?>
		                       		</tbody>
		                        </table>	
	                            <!-- /.list-group -->
	                            <a href="http://www.fatturarepa.it/backoffice/iscrizioni/iscrizioni_gestione.php" class="btn btn-default btn-block">Vedi tutte le fatture</a>
	                        </div>
                        <!-- /.panel-body -->
		                        </div>
		                        
		                    </div>    
		                        
                  	</div>                  
              	</div>  <!-- FINE TERZA COLONNA - SECONDA RIGA -->                
			</div> <!-- FINE SECONDA RIGA -->
			<?php 	
			}
			?>
		 
	</div> 
</section>
<?php 
function convertiData($dataEur) {
	$rsl = explode ('/',$dataEur);
	$rsl = array_reverse($rsl);
	return implode($rsl,'-');
}
function convertiDataDaLineaAPunto($dataEur) {
	$rsl = explode ('/',$dataEur);
	return implode($rsl,'.');
}
function decodeData($dataUsa) {
	if ($dataUsa=='0000-00-00') {
		return '';
	}
	$rsl = explode ('-',$dataUsa);
	$rsl = array_reverse($rsl);
	return implode($rsl,'/');
}
function decodeDayDatetime($datetimeUsa) {
	$rsl = substr($datetimeUsa, 0, 10);
	$rsl = explode ('-',$rsl);
	$rsl = array_reverse($rsl);
	return implode($rsl,'/');
}
function decodeHourDatetime($datetimeUsa) {
	$rsl = substr($datetimeUsa, 11, 8);
	return convertiOra2HHMM($rsl);
}
function convertiOra2HHMM($oraHHMMSS) {
	//print($oraHHMMSS);
	$rsl = explode (':',$oraHHMMSS);
	//print(var_dump($rsl));
	$rsNew = $rsl['0'].":".$rsl['1'];
	return $rsNew;
}
?>
