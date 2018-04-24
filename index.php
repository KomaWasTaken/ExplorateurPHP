
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
			<?php foreach($dirs as $dir){?>
				<?php if (is_dir($base_url.$dir)){?>
					<?php if ($dir == "..") {?>
						<div>
							<a href="index.php"><?php echo $dir; ?></a><br>
						</div>
					<?php } else {?>
						<div>
							<?php if (isset($_GET['dossier'])) {?>
								<a href="index.php?dossier=<?php echo $_GET['dossier'] ?><?php echo $dir; ?>/"><?php echo $dir; ?></a><br>
							<?php } else {?>
								<a href="index.php?dossier=<?php echo $dir ?>/"><?php echo $dir; ?></a><br>
							<?php }?>
						</div>
					<?php }?>
				<?php } else {?>
					<div>
						<p><?php echo $dir; ?></p>
					</div>
				<?php }?>
                <?php }?>
		</div>
</body>
</html>