<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title> Pie chart </title>
	<link rel="stylesheet" type="text/css" href="pie.css">
</head>


<?php
      include 'gironde_pie.php';
$z = 50;
$values = array($z,100-$z);
$values = array(45,15,30,10);
?>

<body>

<?php
for ($i = 0; $i < 10; $i++) {
    $values = array(10+2*$i,5+3*$i,15+1.5*$i,70-6.5*$i);
    gironde_pie($values,'piegreen');
}
?>
<br/>

<?php
    for ($j = 1; $j < 4; $j++) {
    for ($i = 0; $i < 10; $i++) {
        $values = array(10+2*$i,5+3*$i,15+1.5*$i,70-6.5*$i);
        gironde_pie($values,'piegreen'.$j);
    }
    echo "<br/>";
}
?>
<br/>

<?php
for ($i = 0; $i < 10; $i++) {
    $values = array(10+2*$i,5+3*$i,15+1.5*$i,70-6.5*$i);
    gironde_pie($values,'piergby');
}
?>
<br/>

<?php
for ($i = 0; $i < 10; $i++) {
    $values = array(10+2*$i,5+3*$i,15+1.5*$i,70-6.5*$i);
    gironde_pie($values,'piecompl');
}
?>
<br/>

<?php
for ($i = 0; $i < 10; $i++) {
    $values = array(10+2*$i,5+3*$i,15+1.5*$i,70-6.5*$i);
    gironde_pie($values,'piecompl1');
}
?>
<br/>

<?php
for ($i = 0; $i < 10; $i++) {
    $values = array(10+7*$i,90-7*$i);
    gironde_pie($values,'piebw');
}
?>

</body>
</html>
