<?php

$status="fail";
//如果$_POST不是空的
if(!empty($_POST)){
   
    $acc=$_POST["acc"];
    $pw=$_POST["pw"];
    echo "acc:" . $acc . "<br>";
    echo "pw:" . $pw . "<br>";

    if($acc=='admin' && $pw=='1234'){
        echo "登入成功";
        $status="login";
    }else{  
        echo "帳號密碼錯誤"  ;
    }
}


?>


<a href="login.php?status=<?$status;?>">回首頁</a>