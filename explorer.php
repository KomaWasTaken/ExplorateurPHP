<?php
	$base_url = "../"; //Définit le dossier racine
	if (isset($_GET['dossier'])) {
		$dossier = $_GET['dossier'];
		$base_url = $base_url.$_GET['dossier'];
	}
	$dirs = array_diff(scandir($base_url), array('.', 'add_vhost.php', 'favicon.ico', 'index.php', 'test_sockets.php', 'testmysql.php',
	'wamplangues', 'wampthemes', '.git')); //Liste les fichiers et dossiers en filtrant ceux dont on ne veut pas
    
?>