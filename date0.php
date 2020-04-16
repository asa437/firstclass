<h4>日期/時間函式</h4>
<div>strtotime()-把文字日期轉時間序</div>
<?php
$time="2020-04-16 11:30:20";
echo "strtotime()" . "=>". strtotime($time);
echo "<br>";
$serialTime=strtotime($time);
echo date("Y年n月j日 H:i:s l",$serialTime);
echo"<hr>";
?>

<h4>時間練習</h4>
<div>換算下一次生日還有幾天1</div>
<?php
//先設定自動帶今天的時間
$today=date("Y-m-d");
echo $today;
echo "<br>";
$nextBirth="2020-10-10";
//用strtotime()換算時間單位
echo"換算1"."=>";
$between=strtotime($nextBirth)-strtotime($today);
echo $between;
echo "<br>";
$days=$between/60/60/24;
echo "還有:" .$days."天";
echo "<br>";
echo"換算2-z直接換算天"."=>";
$days=date("z",strtotime($nextBirth))-date("z",strtotime($today));
echo $days;
echo"<hr>";
?>

<h4>date()函式</h4>
<?php
//根據時區問題作正確時間調整
date_default_timezone_set("Asia/Taipei");
echo date("Y-m-d H:i:s",$today);
echo"<hr>";
?>

<h4>strtotime()函式-時間平移</h4>
<div></div>
<?php
$date=strtotime("+3 days ". $today);
//strtotime ("+3days 2020-04-16")
//今天日期+3天
echo date("Y-m-d",$date);

echo"<hr>";
echo date("Y-m-d", strtotime("-7 month 2020-10"));
echo"<br>";
echo date("Y-m-d", strtotime("-7 days 2020-10-07"));

echo"<hr>";
?>
<h4>練習-印出今天起的三十天日期1</h4>
<?php
$today=date("Y-m-d");
for($i=0;$i<30;$i++){
    echo date("Y-m-d",strtotime("+$i day" . $today)). "<br>";
}

// 想法
// echo date("Y-m-d",strtotime("+1 day" . $today)). "<br>"
// echo date("Y-m-d",strtotime("+2 day" . $today)). "<br>"
// echo date("Y-m-d",strtotime("+3 day" . $today)). "<br>"

echo"<hr>";
?>

<h4>練習-印出今天起的三十天日期2-fail</h4>
<?php
$today=date("Y-m-d");
echo $today;
echo"<br>";

$d=10;
echo $today2=date("Y-m-$d");;
echo"<br>";
echo"<hr>";
$d=16;
$m=4;
for($d=16;$d<47;$d++){
    // for($m=4;$m<6;$m++){
    //     if($d>30 && $m)
    // }
 
    echo $today2=date("Y-m-$d") ;
    echo"<br>";
}
echo"<hr>";
?>



