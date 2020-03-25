<?php
// if 判斷式
$score=70;
if($score>=60){
    echo "及格";
}else{
    echo "不及格";
}
echo "<hr>";

//判斷成績
$score=70;
 echo"成績:" . $score;
 echo"<br>";
 echo"等級:";

if($score>=90){
    echo "A";
}else if($score>=75){
    echo "B";
}else if($score>=60){
    echo "C";
}else {
    echo "D";
}
echo "<hr>";
//閏年判斷1
$year=2003;
echo "西元年:" .$year;
if($year%4 !=0){
    echo "平年";
}else {
    echo "閏年";
}
echo "<hr>";
//閏年判斷2
$year=2004;
echo "西元年:" .$year;
if($year%4 == 0){
    echo "閏年";
}else {
    echo "平年";
}
echo "<hr>";


//閏年判斷
/*起因為地球對太陽的公轉一年的真實時間大約是365天5小時48分46秒，因此以365天定為一年 的狀況下，每年會多出近六小時的時間，所以每隔四年設置一個閏年來消除這多出來的一天，
公元年分除以4不可整除，為平年。--> 除4可整除
公元年分除以4可整除但除以100不可整除，為閏年。--> 除4可整除 且 除100不可整除是為閏年
公元年分除以100可整除但除以400不可整除，為平年。--> 除4可整除 且(除100不可整除 or 除以400可整除) 為閏年
公元年分除以400可整除但除以3200不可整除，為閏年--> 且除400可整除 且除以3200
*/

//閏年判斷3
$year=2000;
echo "西元年:" .$year;
if($year%4 == 0 && ($year%100 !=0 || $year%400 == 0) ){
    echo "閏年";
}else {
    echo "平年";
}
    echo "<hr>";

$level="A";
echo"等級:" .$level;
echo "<br>";
 switch($level){
     case "A";
        echo "非常好，請努力保持";
    break;
     case "B";
        echo "可圈可點，但還有進步的空間";
    break;
     case "C";
        echo "一般水平，需要更多的努力";
    break;
     case "D";
        echo "用心不足，請加強";
    break;
 }

 echo"<hr>";
//判斷成績2
$score=95;
$level="";
if($score>=90){
    $level="A";
}else if($score>=75){
    $level="B";
}else if($score>=60){
    $level="C";
}else {
    $level="D";
}
 echo"成績:".$score;
 echo"<br>";
 echo"等級:".$level;
 echo "<br>";
  switch($level){
      case "A";
         echo "非常好，請努力保持";
     break;
      case "B";
         echo "可圈可點，但還有進步的空間";
     break;
      case "C";
         echo "一般水平，需要更多的努力";
     break;
      case "D";
         echo "用心不足，請加強";
     break;
     default:
  }
  
  echo"<hr>";


// if 判斷式 + 三元運算子

$score=70;

if($score>=60){
    echo "及格";
}else{
    echo "不及格";
}
echo "<br>";

$result="";
if($score>=60){
    $result="及格";
}else{
    $result="不及格";
}
echo $result;
echo "<br>";

$result=($score>=60)?"及格":"不及格";
echo $result;




echo "<hr>";





?>