
<style>
table{
    border:1px solid #999;
    padding:10px;
}
table td{
    padding:5px;
    text-align:center;
    border:1px solid #ccc;
}
table tr:nth-child(1){
    bckground:#bbb;
}
table td:nth-child(1){
    bckground:#bbb;
}
</style>


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
echo "</table>";


echo "<hr>";

//99乘法表範例3
echo "<table border='1'>";
//判斷第一列第一格是否要空白
for ($i=0; $i<10 ; $i=$i+1) { 
    if($i==0){
        echo "<tr><td></td>";
    }else{
        echo "<tr><td>" .$i."</td>";
    }for($j=1;$j<=9;$j=$j+1){
        //判斷第一列如何程現
        if($i==0){
            echo "<td>" . $j. "</td>";
        }else {
            echo "<td>" . ($i*$j) . "</td>" ;
        }
        
        }
    }
    echo"</tr>";
    echo "</table>";


?>