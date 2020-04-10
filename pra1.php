<h4>陣列練習-學生成績資料設計</h4>
<hr>
<?php
$judy=["國文"=>95,64,70];
$amo=[95,64,70,90,84];
echo "<pre>";print_r($judy);echo "</pre>";
echo"<hr>";

$score=[
    "judy"=>[
        "國文"=>95,
        "英文"=>64,
        "數學"=>74,
        "地理"=>94,
        "歷史"=>87,
    ],
    "amo"=>[
        "國文"=>85,
        "英文"=>94,
        "數學"=>77,
        "地理"=>68,
        "歷史"=>57,
    ],
    "john"=>[
        "國文"=>95,
        "英文"=>67,
        "數學"=>89,
        "地理"=>90,
        "歷史"=>78,
    ],
    "peter"=>[
        "國文"=>88,
        "英文"=>64,
        "數學"=>79,
        "地理"=>99,
        "歷史"=>68,
    ],
    "hebe"=>[
        "國文"=>75,
        "英文"=>74,
        "數學"=>94,
        "地理"=>84,
        "歷史"=>77,
    ],
    ];
    echo "<pre>";print_r($score);echo "</pre>";
    echo"<hr>";
?>
<h4>陣列練習-九九乘法表</h4>

<?php
$a=[];
for ($i=1;$i<=9;$i++){
    for ($j=1;$j<=9;$j++){
        $a[]=$i . "x" . $j . "=" . ($i*$j);
    }
}
echo "<pre>";print_r($a);echo "</pre>";
// echo$a[31];
// $a[31]=999;
// echo"<hr>";
// echo$a[31];
// echo"<hr>";
echo "<hr>";
for($i=0;$i<count($a);$i++){
    echo $a[$i] . ",";
    if($i%9==8){
        echo "<br>";
    }
}
echo "<hr>";
echo "<table border='1'>";
foreach($a as $key => $d){
    echo $d ;
    if($key%9==8){
        echo "<br>";
        // echo "<tr><td>" . ($key) . "</td>" ;
    } 
}




?>
