<h4>威力彩號碼</h4>
<hr>
<?php

echo"<亂數函式>";
// $num[];
// $num=rand(1,49);

echo"<br>";

for($i=0;$i<6;$i++){
    $num[]=rand(1,38);
}
echo"<先列印出來>";
echo "<pre>";print_r($num);echo "</pre>";

//檢查有無重覆
echo"<去除重覆1>";
for($i=0;$i<6;$i++){

    if($num[$i]==$num[$i]){

        for($j=0;$j<5;$j++){

            if($i!=$j && $num[$j]==$num[$i])
                // unset($num[$j]);
                // array_splice($num,$j,1);
                $num[$j]=rand(1,38);
        }
    }
}
echo "<pre>";print_r($num);echo "</pre>";

// foreach($num as $n){
//     echo $n . "," ;
// }
echo"<hr>";
?>

<h4>威力彩號碼-while</h4>
<br>
<?php

$num=[];
$counts=0;
while(count($num)<6){
    $counts++;
    if(count($num)>0){
        $tmp=rand(1,38);
        if(!in_array($tmp,$num)){
            $num[]=$tmp;
        }else{
            echo"有重覆" . $tmp;
        }
    }else{
        //放第一個元素
        $num[]=rand(1,38);
    }



}

echo "<pre>";print_r($num);echo "</pre>";

?>
