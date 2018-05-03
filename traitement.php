<?php
	$base_url = "../"; //Définit le dossier racine
	if (isset($dossier)) {
		$base_url = $base_url.$dossier;
	}
	$dirs = array_diff(scandir($base_url), array('.', 'add_vhost.php', 'favicon.ico', 'index.php', 'test_sockets.php', 'testmysql.php',
	'wamplangues', 'wampthemes', '.git')); //Liste les fichiers et dossiers en filtrant ceux dont on ne veut pas
?>
<a class="p15px w20pct box  mt5px" href="index.php"><div class="d-flex text-align-center jc-center align-items-center h100pct">Retour à l'index</div></a><br> <!-- On l'affiche -->
<?php 
foreach($dirs as $dir){
	if (is_dir($base_url.$dir)){ 
		if ($dir == "..") {
			if (isset($dossier)){?>
				<a class="p15px w20pct box mt5px" href="index.php?dossier=<?php echo $dossier.$dir; ?>/"> <div class="d-flex text-align-center jc-center align-items-center h100pct">Retour</div></a>
<?php 		}
		} else { 
			if (isset($dossier)) {?> <!-- Si  le dossier n'est pas null -->
					<a class="flex-row p15px w20pct text-align-center box h30pct mt5px" href="index.php?dossier=<?php echo $dossier.$dir; ?>/"><i class="far fa-folder-open d-flex fs-60 mt5px"></i><?php echo $dir;?></a><br> <!-- l'url prends la valeur du dossier choisi et affiche ce qu'il y a dedans -->
<?php 		} else { ?>
					<a class="p15px w20pct text-align-center box h30pct mt5px" href="index.php?dossier=<?php echo $dir ?>/"><i class="far fa-folder-open d-flex fs-60 mt5px"></i><?php echo $dir; ?></a><br> <!-- Il affiche  -->
<?php 			}
		}
	} else { ?>
		<a class="p15px w20pct text-align-center box h30pct mt5px">
			<p><i class="far fa-file d-flex fs-60"></i> <p class="pt5px"><?php echo $dir; ?></p></p>
		</a>	
	<?php }
} ?>