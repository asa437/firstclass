<style>
    table{
        border-collagse:colapse;
    }
    table td{
        border:1px solid#ccc;
        padding:5px;
        text-align:center;
    }
</style>

<h4>日歷製作</h4>
<div>月份:4</div>
<table>
    <tr>
        <td>日</td>
        <td>一</td>
        <td>二</td>
        <td>三</td>
        <td>四</td>
        <td>五</td>
        <td>六</td>
    </tr>    
<?php
$firstDay="2020-04-01";
$firstDayWeek=date("w",strtotime($firstDay));
echo $firstDayWeek;
echo "<br>";
echo date("t");

$monthDays=date("t",strtotime($firstDay));
echo"第一天星期:" . $firstDayWeek . "天";
echo"月天數:" . $monthDays . "天";

for($i=0;$i<6;$i++){
    echo "<tr>";
    for($j=0;$j<7;$j++){
        if($i==0 && $j<$firstDayWeek){
            echo "<td>";
            echo "</td>";
        }else{
            echo "<td>";
            $num=$i*7+$j+1-$firstDayWeek;
            if ($num<=$monthDays){
                echo $num;
            }
            echo "</td>";
        }
    }
    echo "</tr>";
}


echo "<hr>";
?>





</table>

<hr>

<h4>日歷製作-test</h4>

<div>月份:4</div>
<table>
    <tr>
        <td>日</td>
        <td>一</td>
        <td>二</td>
        <td>三</td>
        <td>四</td>
        <td>五</td>
        <td>六</td>
    </tr>    
<?php
$firstDay="2020-01-01";
$firstDayWeek=date("w",strtotime($firstDay));
$firstMonth=date("m",strtotime($firstDay));
echo $firstMonth;
echo "<br>";
echo $firstDayWeek;
echo "<br>";
echo date("t");

$monthDays=date("t",strtotime($firstDay));
echo"第一天星期:" . $firstDayWeek . "天";
echo"月天數:" . $monthDays . "天";

for($i=0;$i<6;$i++){
    echo "<tr>";
    for($j=0;$j<7;$j++){
        if($i==0 && $j<$firstDayWeek){
            echo "<td>";
            echo "</td>";
        }else{
            echo "<td>";
            $num=$i*7+$j+1-$firstDayWeek;
            if ($num<=$monthDays){
                echo $num;
            }
            echo "</td>";
        }
    }
    echo "</tr>";
}


echo "<hr>";
?>
</table>




?>


