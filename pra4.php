<h4>天干地支年別1</h4>
<br>
<?php

$start=1024;
$sky=['甲', '乙', '丙', '丁', '戊', '己', '庚', '辛', '壬', '癸'];
$land=['子', '丑', '寅', '卯', '辰', '巳', '午', '未', '申', '酉', '戌', '亥'];

$year=2023;
$arr1=[];
for($i=1024;$i<1084;$i++){
    // $arr[]=$i;
    $arr1[$i]=$sky[($i%10+6)%10] . $land[($i%12+8)%12];
}

// echo "<pre>";print_r($arr1);echo "</pre>";

echo $year .'是'. $arr1[$year]. '年';
?>

<h4>天干地支年別2</h4>
<br>
<?php

$start=1024;
$sky=[ '庚', '辛', '壬', '癸', '甲', '乙', '丙', '丁', '戊', '己'];
$land=['申', '酉', '戌', '亥', '子', '丑', '寅', '卯', '辰', '巳', '午', '未'];

$year=2023;
$arr2=[];
for($i=1024;$i<1060;$i++){
    // $arr[]=$i;
    $arr2[$i]=$sky[$i%10] . $land[$i%12];
}

echo "<pre>";print_r($arr2);echo "</pre>";

echo $year . '是' . $arr2[$year]. '年';


?>

