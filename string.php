<h4>字串處理</h4>
<hr>
<h5>1.子字串 substr() / mb_substr() (multi byte) </h5>
<?php

$s="Hello World";
echo $s;
echo "<br>";
echo substr($s,6,3);

$a="哈囉 今天天氣好嗎?";
echo "$a";
echo "<br>";
echo substr($a,0,6);
//注意:中文字是三個字元
echo"<hr>";


echo str_repeat("*",5);
echo"<hr>";
$ss=str_replace("今天","明天",$a);
echo $ss;
echo str_replace("今天","明天",$a);
echo"<hr>";

$str_split=explode(" ", $s);
echo "<pre>" ;print_r($str_split); "</pre>";
echo $str_split[0];
echo"<hr>";

echo mb_strpos($a, "天");
//注意:中文字是三個字元
echo"<hr>";




?>
