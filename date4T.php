<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}
table{
    border-collapse:collapse;

}
table td{
    border:1px solid #ccc;
    padding:5px;
    text-align:center;
}
.wrapper{
    display:flex;
    max-width:800px;
    flex-wrap:wrap;
    
}
.calendar{
    width:25%;
    padding:10px;
}
</style>
<h4>月曆練習</h4>
<div>
<form action="?" methou='get'>
    <input type="number" name="year" >
    <input type="submit" name="產生年曆">
    <input:submiT></input:submiT>
</form>

</div>

<?php
if(isset($_GET["year"])){
    $year=$_GET['year'];
}else{
    $year=date('Y');
}

echo"<h4 style='text-align:center'>西元".$year."年曆</h4>";

echo "<div class='wrapper'>";

for($m=1;$m<=12;$m++){
?>
<div class="calendar">
    <table>
    <tr><td colspan="7">月份:<?=$m;?></td></tr>

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
$firstDay="$year-$m-01";

$firstDayWeek=date("w",strtotime($firstDay));
$monthDays=date("t",strtotime($firstDay));

/* echo "第一天星期:".$firstDayWeek."<br>";
echo "月天數:".$monthDays."天"; */
for($i=0;$i<6;$i++){
    echo "<tr>";
    for($j=0;$j<7;$j++){
        if($i==0 && $j<$firstDayWeek){
            echo "<td>";
            echo "</td>";
        }else{
            echo "<td>";
            $num=$i*7+$j+1-$firstDayWeek;
            if($num<=$monthDays){
                echo $num;
            }else{
                echo "　";
            }
            echo "</td>";
        }
    }
    echo "</tr>";   
}    
?>
</table>
</div>
<?php
}
?>

</div>