 <html>
   <head>
      <title>checking login...</title>
      <script language="javascript">
         function check_ok() {
            attesa();
            window.location="../index.php"
         }
         function chek_failed() {
             
             window.location="../check_control_code_error.php"
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

// Procedimento per connettersi al Database
mysql_connect("$host", "$db_username", "$db_password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB"); 

// impostazione della query
$sql  = "SELECT * from fpa_codice_controllo ";
$sql .= "WHERE codice_controllo=".$_SESSION["sCodiceControllo"]. " and data_scadenza > now()";

echo $sql;
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count>0) {
	?>
	<body onload="javascript:check_ok();">
      check codice controllo effettuato con esito positivo
   </body>
	
<?php	
}
else {
	?>
	<body onload="javascript:check_failed();">
      Attenzione il codice controllo &egrave; scaduto. Ripetere l'operazione dall'inizio.
   </body>
<?php		
}
?>
</html>