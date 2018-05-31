<?php
	session_set_cookie_params('36000'); // 1 hour
	session_start();
	require_once ("global/global.php");
	/*
	echo '<pre>';
	var_dump($_SESSION);
	echo '</pre>';
	*/
	$_SESSION['sMessaggioInArrivo']="No";	

	//ini_set("display_errors", 1);  
	
	// impostazione di connessione al database
	$db_host=$DB_nomeHost; // Hostname
	$db_username=$DB_utente; // Mysql username
	$db_password=$DB_password; // Mysql password
	$db_name=$DB_nomeDB; //Nome del Database
	
	$link = mysqli_connect("$db_host", "$db_username", "$db_password", "$db_name");
	
	if (mysqli_connect_errno()) {
	    printf("Connect failed: %s\n", mysqli_connect_error());
	    ?>
	    <h1>
		ATTENZIONE!!! Si &egrave; verificato un errore inatteso.<br>
		Ti preghiamo di riprovare pi&ugrave; tardi.
		</h1>
		<?php 
		die();
	}
	
	$query  = "SELECT * FROM fpa_anagrafica_utente_messaggi ";
	$query .= "WHERE id_anagrafica_utente=".$_SESSION['id_operatore']." ";
	$query .= "AND letto=0 ";
	$query .= "ORDER BY 1 DESC";
	
	//print($query);
	
	$result=mysqli_query($link, $query);
	
	if ($result != null) {
		if (mysqli_num_rows($result) > 0) {
			
			$riga = mysqli_fetch_object($result);
			$tipologia_messaggio = $riga->tipologia_messaggio_id;	
			
			$messaggio = utf8_encode($riga->messaggio); 
			$_SESSION['sMessaggio']=$messaggio;
			//echo $messaggio;
			//print($messaggio);
			$_SESSION['sMessaggioInArrivo']="Si";
			$_SESSION['sIdMessaggio']=$riga->id_messaggio;
			$_SESSION['sTipologiaMessaggio']=$riga->tipologia_messaggio_id;	
		}
	}
	
?>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BDU ON-LINE</title>

    <!-- Bootstrap Core CSS -->
    <link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="./vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="./dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="./vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	
    <script language="javascript">
		
	    $(document).ready(function() {
	    	
    		<?php 
    		if ($_SESSION['sMessaggioInArrivo']=="Si" ) {
    		?>
				$('#modal').show();
    		<?php
    		}
    		?>
    		$("#btnClose").click(function(){
    					$('#modal').hide();
    					<?php 
    	    			// Procedimento per connettersi al Database
						mysql_connect("$db_host", "$db_username", "$db_password")or die("cannot connect");
						mysql_select_db("$db_name")or die("cannot select DB"); 
    					
    					
    					$queryUpdate  = "UPDATE fpa_anagrafica_utente_messaggi ";
    					$queryUpdate .= "SET letto=1 ";
    					$queryUpdate .= "WHERE id_messaggio=".$_SESSION['sIdMessaggio']." ";
    					
    					$resultUpdate = mysql_query($queryUpdate);
    					
    					$_SESSION['sMessaggioInArrivo']="No";
    					
    					?>
    					
			});
	    	
		});
	</script>	
	
</head>

<body id="page-top">
	<?php 
	// se non loggato mostro form di login e menu standard
    if (!isset($_SESSION['myusername'])) {
    ?>  
    	
	    
	     <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Login</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" name="frmLogin" id="frmLogin"  action="login/check_login.php" method="POST">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Utente" name="utente" type="text" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input name="remember" type="checkbox" value="RememberMe">Ricordami
                                        </label>
                                    </div>
                                    <!-- Change this to a button or input when using this as a form -->
                                    <input type="submit" class="btn btn-lg btn-primary btn-block" value="Entra">
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

	    
    <?php 
    }
    else { // se loggato mostro menu dinamico
    ?>
    	    	 
    	 <!-- menu dinamico -->
	    <?php include './include/menu_top_dinamico.php'; ?>
	    
	    <!-- intestazione contenente logo, titolo, info utente -->
	    <?php 
	    $_SESSION['TITOLO']="SERVIZI DISPONIBILI";
	    include './include/header_content.php'; 
	    ?>
	    
	    <!-- menu grafico_dinamico -->
	    <?php include './include/menu_middle_dinamico.php'; ?>
	    
	    <?php include './include/messaggio_middle_dinamico.php'; ?>
	    
	    <?php include './include/footer.php'; ?>   	 
    	 
	    
	    
    <?php
    }
    ?>
    
   <!-- jQuery -->
    <script src="./vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="./vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="./vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="./dist/js/sb-admin-2.js"></script>

</body>

</html>

