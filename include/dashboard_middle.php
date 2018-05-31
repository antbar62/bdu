<?php
session_start();

$colore = "";

$paginaCorrente = 1;

if (isset($_GET["pagina"]))
	$paginaCorrente = intval($_GET["pagina"]);

	$rigaCorrente = 0;
	
//require_once ("../global/global.php");
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
$query .= "id_elaborazione > 0 and ";
$query .= "fpa_elaborazioni.operatore_id=".$_SESSION['id_operatore'];
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
$query .= "id_elaborazione > 0 and ";
$query .= "fpa_elaborazioni.operatore_id=".$_SESSION['id_operatore'];
$query .= " and stato_esito=5";
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
$query .= "id_elaborazione > 0 and ";
$query .= "fpa_elaborazioni.operatore_id=".$_SESSION['id_operatore'];
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
$query .= "id_elaborazione > 0 and ";
$query .= "fpa_elaborazioni.operatore_id=".$_SESSION['id_operatore'];
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
$query .= "id_elaborazione > 0 and ";
$query .= "fpa_elaborazioni.operatore_id=".$_SESSION['id_operatore'];
$query .= " and stato_esito=3 ";
$result = mysql_query($query);
if ($result !=null) {
	$numeroFattureRifiutate = mysql_num_rows($result);
}
else {
	$numeroFattureRifiutate = 0;
}


//ini_set("display_errors", 1); 

?>

<section id="services">
			
	<div class="container-fluid bg-3 text-center" >  
	
               <div class="row">
                    
                    <div class="col-lg-3 col-md-6">
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
                            <!-- 
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">Visualizza fatture compilate</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                             -->
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-consegnate">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $numeroFattureConsegnate; ?></div>
                                        <div>Fatture appena consegnate</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
               </div>
               <!-- /.row -->
               
               <div class="row">
                    <div class="col-lg-3 col-md-6">
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
                            <!-- 
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">Visualizza fatture rifiutate</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                             -->
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-scartate">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $numeroFattureScartate; ?></div>
                                        <div>Fatture scartate</div>
                                    </div>
                                </div>
                            </div>
                            <!-- 
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">Visualizza fatture scartate</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                             -->
                        </div>
                    </div>
                   
                </div>
               
                <!-- /.row -->
                
				                
			</div>	<!-- fine classe contaniner -->	               

</section>	<!-- fine classe section -->	
  	
	