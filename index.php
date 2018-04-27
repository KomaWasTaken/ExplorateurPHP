<?php include("explorer.php");?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway" rel="stylesheet">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
		<link rel="stylesheet" href="style.css">
		<title>C'est très l'exploration</title>
	</head>
	<body class="d-flex jc-center align-items-center flex-column">
		<h1 class="text-align-center color-white montserrat">C'est très l'exploration</h1>

		<div class="h100vh w70pct d-flex flex-row flex-wrap p15px fs-18 raleway word-break">
			
				<a class="p15px w20pct box  mt5px" href="index.php"><div class="d-flex text-align-center jc-center align-items-center h100pct">Retour à l'index</div></a><br> <!-- On l'affiche -->
			
			<?php foreach($dirs as $dir){?> <!--Parcourt le tableau-->
				<?php if (is_dir($base_url.$dir)){?> <!-- Si $base_url.$dir est un dossier -->
					<?php if ($dir == "..") {?> <!-- Si $dir est un parent -->
						<?php if (isset($_GET['dossier'])){?>
							<a class="p15px w20pct box mt5px" href="index.php?dossier=<?php echo $_GET['dossier'] ?><?php echo $dir; ?>/"> <div class="d-flex text-align-center jc-center align-items-center h100pct">Retour</div></a>
						<?php }?> 
						
					<?php } else {?> <!-- Si $dir n'est PAS un parent -->
							<?php if (isset($_GET['dossier'])) {?> <!-- Si  le dossier n'est pas null -->
								
								<a class="flex-row p15px w20pct text-align-center box h30pct mt5px" href="index.php?dossier=<?php echo $_GET['dossier'] ?><?php echo $dir; ?>/"><div class=""><i class="far fa-folder-open d-flex fs-60 mt5px"></i><?php echo $dir;?></div></a><br> <!-- l'url prends la valeur du dossier choisi et affiche ce qu'il y a dedans -->
							<?php } else {?>
								
								<a class="p15px w20pct text-align-center box h30pct mt5px" href="index.php?dossier=<?php echo $dir ?>/"><div class><i class="far fa-folder-open d-flex fs-60 mt5px"></i><?php echo $dir; ?></div></a><br> <!-- Il affiche  -->
							<?php }?>
					<?php }?>
				<?php } else {?>
					<a class="p15px w20pct text-align-center box h30pct mt5px" href="#"><div>
						<p><i class="far fa-file d-flex fs-60"></i> <p class="pt5px"><?php echo $dir; ?></p></p>
					</div></a>
				
				<?php }?>
				<?php }?>
				

		</div>
<footer class="w100pct bg-black d-flex jc-center">
	<div class="d-flex color-gray roboto jc-space-between h100 w80pct">
		<div class="d-flex align-items-center">
			<p>2018 © Copyright - Monica.B, Alpha.B, Valentin.G, Jim.P, Ludovic.R</p>
		</div>
		<div class="d-flex align-items-center">
			<a href="http://facebook.com" target="_blank"><i class="pl15px fab fa-facebook-f fa-2x transition"></i></a>
			<a href="http://twitter.com" target="_blank"><i class="pl15px fab fa-twitter fa-2x transition"></i></a>
			<a href="http://linkedin.com" target="_blank"><i class="pl15px fab fa-linkedin-in fa-2x transition"></i></a>
			<a href="http://mdrgooglepluscestdécédé.com" target="_blank"><i class="pl15px fab fa-google-plus-g fa-2x transition"></i></a>
			<a href="http://instagram.com" target="_blank"><i class="pl15px fab fa-instagram fa-2x transition"></i></a>
			<a href="mailto:jim.p@codeur.online" target="_blank"><i class="pl15px far fa-envelope fa-2x transition"></i></a>
		</div>
	</div>
</footer>

</body>
</html>