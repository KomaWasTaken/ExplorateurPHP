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
    $scans = array_diff(scandir($dir), array('.', '..'));
    
    foreach($scans as $scan)
    {
        if (!is_dir($scan))
        {
            echo '<a href="/' . $scan . '">' . $scan . '</a> <br />';
        } else if($scan == ""){
            add_vhost.php
            favicon.ico
            index.php
            test_sockets.php
            testmysql.php
            wamplangues
            wampthemes
        }

        

    }
?>

</body>
</html>