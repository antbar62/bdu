 <html>
   <head>
      <title>checking login...</title>
      <script language="javascript">
         function login_ok() {
            
            window.location="../index.php"
         }
         function login_failed() {
             
             window.location="../index.php"
          }
         function attesa() {
            setTimeout("redirect() ", 5000)
         }
      </script>
   </head>

<?php
require_once ("../global/global.php");

ini_set("display_errors", 1); 

error_reporting(0);

session_cache_expire(180);

session_start();

session_start();//per attivare
// impostazione di connessione al database
$host=$DB_nomeHost; // Hostname
$db_username=$DB_utente; // Mysql username
$db_password=$DB_password; // Mysql password
$db_name=$DB_nomeDB; //Nome del Database
$tbl_name="apc_user"; // Nome della Tabella

// Procedimento per connettersi al Database
mysql_connect("$host", "$db_username", "$db_password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB"); 

// Nome utente e password inviate attraverso il form
$myusername=$_POST['utente'];
$mypassword=$_POST['password'];

// impostazione della query
//$sql  = "SELECT apc_user.user_id, apc_user.cognome, apc_user.nome, apc_user.role_id, apc_user.sede_id, apc_user.abilitato, apc_user.email, apc_user.cellulare, fpa_anagrafica_prestatore.tipologia_prestatore_id FROM $tbl_name ";
//$sql .= "LEFT JOIN fpa_anagrafica_prestatore ON apc_user.user_id=fpa_anagrafica_prestatore.user_id ";
//$sql .= "WHERE user='$myusername' and password='$mypassword'";

$sql  = "SELECT apc_user.user_id, ";
$sql .= "apc_user.tipologia_utente, ";
$sql .= "apc_user.cognome, ";
$sql .= "apc_user.nome, ";
$sql .= "apc_user.denominazione, ";
$sql .= "apc_user.url_image, ";
$sql .= "apc_user.role_id, ";
$sql .= "apc_user.sede_id, ";
$sql .= "apc_user.abilitato, ";
$sql .= "apc_user.email, ";
$sql .= "apc_user.cellulare, ";
$sql .= "apc_user.tipologia_utente, ";
$sql .= "apc_user.firma_utente, ";
$sql .= "apc_tipologia_user.nome as nome_tipologia_user, ";
$sql .= "apc_ruolo.nome as nome_ruolo ";
$sql .= "FROM apc_user, apc_tipologia_user, apc_ruolo ";
$sql .= "WHERE apc_user.user='$myusername' and apc_user.password='$mypassword' and ";
$sql .= "apc_user.tipologia_utente = apc_tipologia_user.tipologia_user_id and ";
$sql .= "apc_user.role_id = apc_ruolo.role_id ";

//echo $sql;
//die;
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count>0){
	
	$riga = mysql_fetch_object($result);
	
	// imposto variabile di sessione: myusername
	$_SESSION['myusername'] = $myusername;
	
	// imposto variabile di sessione: mypassword
	$_SESSION['mypassword'] = $mypassword;
	
	// imposto variabile di sessione: mysede
	$_SESSION['mysede'] = $riga->sede_id;
	
	// imposto variabile di sessione: id_operatore
	$_SESSION['id_operatore'] = $riga->user_id;
	
	// imposto variabile di sessione: myrole
	$_SESSION['myrole'] = $riga->role_id;
	
	// imposto variabile di sessione: myrole
	$_SESSION['nomeruolo'] = $riga->nome_ruolo;
	
	// imposto variabile di sessione: myrole
	$_SESSION['myemail'] = $riga->email;
	
	// imposto variabile di sessione: myrole
	$_SESSION['tipologiaprestatore'] = $riga->tipologia_utente;
	
	// imposto variabile di sessione: myrole
	$_SESSION['nometipologiauser'] = $riga->nome_tipologia_user;
	
	// imposto variabile di sessione: urlimage
	$_SESSION['urlimage'] = $riga->url_image;
	
	// imposto variabile di sessione: denominazione
	$_SESSION['denominazione'] = $riga->denominazione;
	
	// imposto variabile di sessione: firma utente
	$_SESSION['firmautente'] = $riga->firma_utente;	
	
	?>
	<body onload="javascript:login_ok();">
      Login effettuato!!!
   </body>
	
<?php	
}
else {
	?>
	<body onload="javascript:login_failed();">
      Attenzione username o password errati
   </body>
<?php		
}
?>
</html>