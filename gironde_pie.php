<?php
include "gironde_utils.php";
function gironde_pie($values, $class = 'pie') {
    echo "<svg height='175px' width='175px' viewBox='-20 -20 40 40' class='$class'>\n";
    echo "<circle r='10' cx='10' cy='10' fill='white' />\n";
    
    $sum = 0;
    foreach ($values as $i => $p) {
        echo "<circle class='color$i' r='5' cx='0' cy='0' fill='transparent' ";
        echo "stroke-width='",10,"' ";
        if (gironde_detect_browser() == 'Safari') {
            echo "stroke-dasharray='", $p*2*M_PI*5*97.75/100/100, " ", 2*M_PI*5, "' ";
            echo "transform='rotate(",-90+360*$sum*99.95/100/100," 0 0)'/>\n";
        } else if (gironde_detect_browser() == 'Firefox'){
            echo "stroke-dasharray='", $p*2*M_PI*5*100./100/100, " ", 2*M_PI*5, "' ";
            echo "transform='rotate(",-90+360*$sum*100./100/100," 0 0)'/>\n";
        } else if (gironde_detect_browser() == 'Opera'){
            echo "stroke-dasharray='", $p*2*M_PI*5*100./100/100, " ", 2*M_PI*5, "' ";
            echo "transform='rotate(",-90+360*$sum*100./100/100," 0 0)'/>\n";
        } else if (gironde_detect_browser() == 'Chrome'){
            echo "stroke-dasharray='", $p*2*M_PI*5*100./100/100, " ", 2*M_PI*5, "' ";
            echo "transform='rotate(",-90+360*$sum*100./100/100," 0 0)'/>\n";
        } else {
            echo "stroke-dasharray='", $p*2*M_PI*5*100./100/100, " ", 2*M_PI*5, "' ";
            echo "transform='rotate(",-90+360*$sum*100./100/100," 0 0)'/>\n";
        }
        echo "<text class='pielab' ";
        echo "x='",sin(2*M_PI*($sum+$p/2)/100.)*13.75,"' ";
        echo "y='",-cos(2*M_PI*($sum+$p/2)/100.)*12.75,"'>";
        echo $p,"%";
        echo "</text>\n";
        
        $sum = $sum + $p;
    }

    echo "</svg>\n";
}
?>
