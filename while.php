<?php
//while 迴圈
// 練習1
$str="today is a good day";
$find="a";
/*
for ($i=0)
*/



$status=false;
$position=0;

while($status==false){
    $tmp=mb_substr($str,$position,1,"utf8");  //利用函式mb_substr()來取得某個位置的字元

    if($tmp==$find){
        echo "字元".$find."在".$str."的第".$position."個位置";
        $status=true;
    } 
    $position++;
}

echo "p=" .$position;

echo "<hr>";
//*星星符號排列練習
//直角三角形
//倒直角三角形
//菱形
//矩形
for ($i=1 ; $i<=5 ;$i++){
     echo"*";

}












?>

