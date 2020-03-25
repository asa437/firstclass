<?php

//for loop
//99乘法表範例1

//for ($i=0; $i <10 ; $i++)

for ($i=1; $i<=9 ; $i=$i+1) { 
    for($j=1;$j<=9;$j=$j+1) {
        echo $j . " x " . $i . "=" . ($i*$j) . ",";
    }
    echo "<br>";
}

echo "<hr>";
//99乘法表範例2
echo "<table border='1'>";
for ($i=1; $i<=9 ; $i=$i+1) { 
    for($j=1;$j<=9;$j=$j+1) {
        echo  "<td>" . $j . " x " . $i . "=" . ($i*$j) . "</td>";
    }
    echo "</tr>";
}
echo "<table>";


echo "<hr>";
//99乘法表範例3
echo "<table border='1'>";
for ($i=0; $i<=9 ; $i=$i+1) { 
    for($j=0;$j<=9;$j=$j+1) {   
        
        if ($i>0 && $j>0){
            echo  "<td>" . $j . " x " . $i . "=" . ($i*$j) . "</td>";
        }
        }
        echo "</tr>";
}

echo "<table>";




?>