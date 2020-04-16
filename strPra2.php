<h4>[字串"好的，中國武漢肺炎"，請將"武漢肺炎"四字放大並變色]</h4>

<?php
$str="好的，中國武漢肺炎";
$search="中國";
$target="<span style='color:green;font-size:36px'>中國</span>";
echo"<br>";
echo str_replace($search,$target,$str);
echo"<br>";

echo str_replace("武漢肺炎","<span style='color:red;font-size:24px'>武漢肺炎</span>",$str);
echo"<hr>";
?>
好的，中國<span style="color:red;font-size:24px">武漢肺炎</span>




