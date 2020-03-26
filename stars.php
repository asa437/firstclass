<style>

*{
    font-family:"Courier New";
    line-height:16px;
}

</style>


<?php


//*星星符號排列練習


//直角三角形
for ($i=1 ; $i<=5 ;$i++){
    for ($j=1 ; $j<($i+1) ;$j++){

        echo"*";
    }
    echo"<br>";
}
echo"<hr>";

//倒直角三角形1
for ($i=0 ; $i<=5 ;$i++){
    for ($j=0 ; $j<(5-$i) ;$j++){

        echo"*";
    }
    echo"<br>";
}
echo"<hr>";
//倒直角三角形2
for ($i=5 ; $i>0 ;$i--){
    for ($j=0 ; $j<$i ;$j++){

        echo"*";
    }
    echo"<br>";
}
echo"<hr>";
//正三角形
echo "正三角形1";
echo"<br>";
for ($i=0 ; $i<5 ;$i++){

    for($k=0;$k<(4-$i);$k++){
        echo "&nbsp;" ;  //not break space 沒有斷行的空白
    }
    for ($j=0 ; $j<($i*2+1) ;$j++){
        echo "*"; // 此處印**
    }
    echo"<br>";
}
echo"<hr>";
echo "菱形1"; //正三角形+倒三角形
echo"<br>";
//正三角形
for ($i=0 ; $i<5 ;$i++){

    for($k=0;$k<(4-$i);$k++){
        echo "&nbsp;" ;  //not break space 沒有斷行的空白
    }
    for ($j=0 ; $j<($i*2+1) ;$j++){
        echo "*"; // 此處印**
    }
    echo"<br>";
}
//倒正三角形
for ($i=3 ; $i>=0 ;$i--){

    for($k=0;$k<(4-$i);$k++){
        echo "&nbsp;" ;  //not break space 沒有斷行的空白
    }
    for ($j=0 ; $j<($i*2+1) ;$j++){
        echo "*"; // 此處印**
    }
    echo"<br>";
}
echo"<hr>";

echo "菱形2";

echo"<br>";
for ($i=0;$i<9;$i++){
    //利用判斷式來決定t的值，再用t的值來決定空白及星星的數量
    if($i<=4){
        $t=$i;
    }else{
        $t=8-$i;
    }

//印空白
for($k=0;$k<(4-$t);$k++){
    echo "&nbsp;" ;
}

//印星星
for ($j=0; $j<($t*2+1);$j++){
    echo "*";
}
//斷行
echo"<br>";
}

echo"<hr>";
echo "矩形1";
echo"<br>";

for($i=0;$i<5;$i++){

    if($i==0 || $i==4){

        for($j=0;$j<5;$j++){
            echo "*";
        }

    }else{

        for($k=0;$k<5;$k++){
            if($k==0 || $k==4){
                echo "*";
            }else{
                echo "&nbsp;" ;
            }
        }

    }
    echo"<br>";
}

echo"<hr>";
echo "矩形2";
echo"<br>";

$x=10;

for($i=0;$i<$x;$i++){

    if($i==0 || $i==($x-1)){

        for($j=0;$j<$x;$j++){
            echo "*";
        }

    }else{

        for($k=0;$k<$x;$k++){
            if($k==0 || $k==($x-1) || $k==$i || $k==($x-$i-1)){
                echo "*";
            }else{
                echo "&nbsp;" ;
            }
        }

    }
    echo"<br>";
}













?>