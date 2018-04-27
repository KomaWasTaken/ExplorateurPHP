<?php include("explorer.php");?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">
		<title>C'est très l'exploration</title>
	</head>
	<body class="d-flex jc-center align-items-center flex-column">
		<h1 class="text-align-center">C'est très l'exploration</h1>

		<div class="w60pct h80pct d-flex flex-row flex-wrap jc-space-around p15px ">
			<div class="p15px w20pct text-align-center box h30pct borderBox mt2px">
				<a href="index.php">Retour à l'index</a><br> <!-- On l'affiche -->
			</div>
			<?php foreach($dirs as $dir){?> <!--Parcourt le tableau-->
				<?php if (is_dir($base_url.$dir)){?> <!-- Si $base_url.$dir est un dossier -->
					<?php if ($dir == "..") {?> <!-- Si $dir est un parent -->
						<?php if (isset($_GET['dossier'])){?>
							<a class="p15px w20pct text-align-center box h30pct borderBox mt2px" href="index.php?dossier=<?php echo $_GET['dossier'] ?><?php echo $dir; ?>/">Retour</a>
						<?php }?> 
						
					<?php } else {?> <!-- Si $dir n'est PAS un parent -->
						
							<?php if (isset($_GET['dossier'])) {?> <!-- Si  le dossier n'est pas null -->
								
								<a class="flex-row p15px w20pct text-align-center box h30pct borderBox mt2px" href="index.php?dossier=<?php echo $_GET['dossier'] ?><?php echo $dir; ?>/"><div><i class="far fa-folder-open d-flex fs-60"></i><?php echo $dir;?></div></a><br> <!-- l'url prends la valeur du dossier choisi et affiche ce qu'il y a dedans -->
							<?php } else {?>
								
								<a class="p15px w20pct text-align-center box h30pct borderBox mt2px" href="index.php?dossier=<?php echo $dir ?>/"><div><i class="far fa-folder-open d-flex fs-60"></i><?php echo $dir; ?></div></a><br> <!-- Il affiche  -->
							<?php }?>
						
					<?php }?>
				<?php } else {?>
					<a class="p15px w20pct text-align-center box h30pct borderBox mt2px" href="#"><div>
						<p><i class="far fa-file d-flex fs-60"></i><?php echo $dir; ?></p>
					</div></a>
					
					
				<?php }?>
                <?php }?>
		</div>
</body>
</html>