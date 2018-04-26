<?php include("explorer.php");?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>C'est très l'exploration</title>
	</head>
	<body>
		<h1>C'est très l'exploration</h1>

		<div>
			<div>
				<a href="index.php">Retour à l'index</a><br> <!-- On l'affiche -->
			</div>
			<?php foreach($dirs as $dir){?> <!--Parcourt le tableau-->
				<?php if (is_dir($base_url.$dir)){?> <!-- Si $base_url.$dir est un dossier -->
					
					<?php if ($dir == "../") {?> <!-- Si $dir est un parent -->
					<?php } else {?> <!-- Si $dir n'est PAS un parent -->
						<div>
							<?php if (isset($_GET['dossier'])) {?> <!-- Si  le dossier n'est pas null -->
								<a href="index.php?dossier=<?php echo $_GET['dossier'] ;?><?php echo $dir; ?>/"><?php echo $dir;?></a><br /> <!-- l'url prends la valeur du dossier choisi et affiche ce qu'il y a dedans -->
							<?php } else {?>
								<a href="index.php?dossier=<?php echo $dir; ?>/"><?php echo $dir; ?></a><br /> <!-- Il affiche  -->
							<?php }?>
						</div>
					<?php }?>
				<?php } else {?>
				
					<div>
						<?php echo $dir; ?>
					</div>
				<?php }?>
                <?php }?>
		</div>
</body>
</html>