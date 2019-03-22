<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 20/03/2019
 * Time: 12:32
 */
?>

<html>
<head>
    <title>opdracht4</title>
    <style></style>
</head>
<body>
<?php
$leeftijd = 12;
$bedrag = 10;
if($leeftijd > 65) {
  $bedrag = $bedrag * 0.5;
}

if($leeftijd <= 12) {
    $bedrag = $bedrag * 0.5;
}

if($leeftijd < 3) {
     $bedrag = 0;
}

echo $bedrag;
?>
</body>
</html>
