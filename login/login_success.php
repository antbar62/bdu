 <?php
// Controlla se la sessione ̬ stata registrata, altrimenti rimanda alla pagina di login
// Questa prima parte dobbiamo inserirla in tutte le pagine che vogliamo proteggere con password prima di qualsiasi altra cosa
session_cache_expire(180);
session_start();
if(!session_is_registered(myusername)){
	header("location:index.html");
} 
echo "login effettuato";
?> 