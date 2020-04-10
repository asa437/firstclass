<h4>閏年判斷</h4>
<br>
<?php

//閏年判斷3
$year=2000;
// echo "西元年:" .$year;
// echo "<br>";

$year=[];
for ($i=2020;$i<2032;$i++){
    echo "西元年:" . $i. "是";
    if($i%4 == 0 && ($i%100 !=0 || $i%400 == 0) ){
        echo "閏年";
        $year[]=$i;
        // key值方式
        // $year[$i]=$i;
    }else {
        echo "平年";
}
echo "<hr>";
}

echo "閏年陣列";
echo "<pre>";print_r($year);echo "</pre>";

echo "<hr>";
$testYear=rand(2020,2800);
if(in_array($testYear,$year)){
    echo $testYear. "是閏年";
}else{
    echo $testYear. "是平年";
}



?>