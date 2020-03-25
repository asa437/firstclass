<?php


// 宣告一個變數
$a=1;
echo $a;
echo "<br>";

$a=2.1;
echo $a;
echo "<br>";
print($a);
echo "<br>";

$studentInSchool="YES";
$_REQUEST;

/*
宣告一個常數
常數不可被變更
*/

define("PI" , 3.1415927);
echo PI;
echo PI*2*10;

echo "<br>";

define("x",20);
echo x;
echo "<br>";
echo x*5;

echo "<hr>";
//運算子
//一元運算子 !
$a=false;
echo !$a;

echo "<hr>";
//運算子++ $b=$b+1
$b=1;
echo $b++;
echo "<br>";
echo $b+1 ;
echo "<hr>";
//算數運算子
$a=2;
$b=5;
echo $a+$b;

echo "<hr>";

//子串運算子

$a="A";
$b="1";
echo $a;
echo "<br>";
echo $b;
$c=$a . $b ;
$d=$a + $b ;
echo "<hr>";
echo $c; 
echo "<hr>";
echo $d; 

echo "<hr>";

//三元運算子

$a=2;
echo ($a>0)? "很貴":"免費";
echo "<hr>";

if($a>0){
    echo "很貴";
}
else{
    echo"免費;";
}

echo "<hr>";




?>