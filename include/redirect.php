<?php
session_start();

if (!isset($_SESSION['myusername']) || !isset($_SESSION['myrole']) || $_SESSION['myrole']=='' || $_SESSION['myrole']==0) {
	header("location: /backoffice/index.php");
}
?>