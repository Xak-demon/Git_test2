<?php
echo "Hello my Git!!!<br/>";
/*Time old*/
$raw = '22. 11. 1968';
$start = DateTime::createFromFormat('d. m. Y', $raw);
echo "Start date: " . $start->format('m/d/Y') . "<br/>";
/*Time*/
$t=time();
echo "Today is date: ". (date("Y-m-d",$t));
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <link rel="shortcut icon" href="images/6.ico" type="images/x-icon">
    <title>Document</title>
</head>
<body>
<h1>Hi Git!</h1>
    <div class="img_logo"></div>
</body>
</html>
