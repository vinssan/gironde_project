<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title> Pie chart </title>
	<link rel="stylesheet" type="text/css" href="pie.css">
</head>


<?php
   $values = array(15,25,40,20);
   $sum = 0;
?>

<body>

<svg height="300px" width="300px" viewBox="-20 -20 40 40">
<circle r="10" cx="10" cy="10" fill="white" />
<?php
   foreach ($values as $i => $p) {
      echo "<circle class='pie$i' r='5' cx='0' cy='0' fill='transparent' ";
      echo "stroke-width='10' ";
      echo "stroke-dasharray='", $p*2*M_PI*5/100, " ", 2*M_PI*5, "' ";
      echo "transform='rotate(",-90+360*$sum/100," 0 0)'/>\n";
      echo "<text class='pielab' ";
      echo "x='",sin(2*M_PI*($sum+$p/2)/100)*12.5,"' ";
      echo "y='",-cos(2*M_PI*($sum+$p/2)/100)*12.5,"'>";
      echo $p,"%";
      echo "</text>";

      $sum = $sum + $p;
   }
?>
</svg>
</body>
</html>
