<h4>反轉陣列</h4>
<hr>
<?php

$a=[2,4,6,1,8];

// array_reverse($a);
echo "<pre>";print_r(array_reverse($a));echo "</pre>";
echo"地板函數" .floor(count($a)/2). "<br>";
echo "天花板函數" .ceil(count($a)/2). "<br>";

for ($i=0;$i<floor(count($a)/2);$i++){
    $index=count($a)-1-$i;
    $tmp=$a[$i];
    $a[$i]=$a[$index];
    $a[$index]=$tmp;
    // echo "<pre>";print_r(array_reverse($a));echo "</pre>";
}
echo "<pre>";print_r(array_reverse($a));echo "</pre>";

$pp=array_pop($a);
$ss=array_pop($a);
array_push($a,$ss);
array_unshift($a,$pp);
echo $pp . "<br>";
echo $ss . "<br>";

echo "<pre>";print_r(array_reverse($a));echo "</pre>";

?>

<h4>交換變數</h4>
<hr>

$a=5<br>
$b=10<br>
<?php

echo"<br>";
$a=5;
$b=10;

$tmp=$a;
$a=$b;
$b=$tmp;
echo "交換後";
echo"<br>";
echo '$a=' .$a. "<br>";
echo '$b=' .$b ;


?>


