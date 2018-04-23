<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
<?php
     $dir = '../';
    $scans = scandir($dir);

    foreach($scans as $scan)
    {
        if (!is_dir($scan))
        {
            echo $scan.'<br />';
        }
    }
?>

</body>
</html>