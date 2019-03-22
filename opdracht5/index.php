<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 21/03/2019
 * Time: 10:14
 */

?>

<html>
<head>
    <title>opdracht5</title>
    <style></style>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div id="kolom1">
<table style="width: 20%">
    <tr>
        <td>De spartelkuikens</td>
        <td>25</td>
    </tr>

    <tr>
        <td>De waterbuffels</td>
        <td>32</td>
    </tr>

    <tr>
        <td>Plonsmderin</td>
        <td>11</td>
    </tr>

    <tr>
        <td>Bommetje</td>
        <td>23</td>
    </tr>
</table>
</div>

<div id="kolom2">
<table>
<?php
$teams = array(25, 32, 11, 23);

foreach ($teams as $team) {
    echo '<tr><td>';
    $aantal = floor($team / 5);
    for ($i = 0; $i < $aantal; $i++) {
        echo "<img  src='pictogram/zwemmen.jpg'>";
    }
    echo '</td></tr>';
}
?>
</table>
</div>
</body>
</html>


