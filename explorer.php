<?php
	$base_url = "../";
	if (isset($_GET['dossier'])) {
		$base_url = $base_url.$_GET['dossier'];
	}
    $dirs = scandir($base_url);
    
?>