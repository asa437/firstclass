<h4>字串函式練習</h4>
<div> 字串 aaddw1123 </div>
<?php
$str='aaddw1123';
echo $str[0];
echo"<br>";
// 給一空字串
$str2="";
for($i=0;$i<strlen($str);$i++){

        $str2=$str2."*";
        echo "i=". $i. "=>" . $str2 ."<br>";
}
echo $str2;

echo"<hr>";
echo  "使用取代函式";
echo"<br>";
$str3=str_repeat("*",strlen($str));
echo $str3;

echo"<hr>";
echo str_repeat("*",20);
echo"<hr>";
?>

<h4>字串切割成陣列</h4>
<?php
$str="this,is ,a,book";
$strArray=explode(",",$str);
print_r($strArray);
echo"<br>";
echo $strArray[3];
echo"<hr>";
?>

<h4>[陣列組合成文字]</h4>
<?php
echo"使用join函式，組合陣元素";
echo"<br>";
echo join(" ",$strArray);
echo"<br>";
echo"使用implode函式，組合陣元素";
echo"<br>";
echo implode(" ",$strArray);
echo"<hr>";
?>

<h4>[字串取前十字1]</h4>
<?php
$str="The reason why a great man is great is that he resolves to be a great man";
mb_substr($str,0,10);
echo $str . "...";
echo"<br>";
echo $str . str_repeat(".",3);
echo"<hr>";
?>

<h4>[字串取前十字2]</h4>
<?php
$X="The reason why a great man is great is that he resolves to be a great man";
$strArray=explode(" ",$X);
echo "<pre>";print_r($strArray);echo "</pre>";

for($i=0;$i<10;$i++){
    echo $strArray[$i] . " " ;
}
echo"<hr>";
?>




