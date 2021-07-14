<?php

$num=1;

while($a < 40){
    $x=mt_rand(1, 6);
    echo $num."回目=".$x;  
    echo '<br>';
    $num++; 
    $a=$a+$x;
}
echo "合計".$num."回でゴールしました";
echo '<br>';
?>

<?php
    date("Y/m/d H:i:s");
    echo '<br/>';
    $time = date("H");
    if ($time <= 11){
        echo "今" .$time. "時台です";
        echo '<br>';
        echo "おはようございます";
    }elseif($time <= 18){
        echo "今" .$time. "時台です";
        echo '<br>';
        echo "こんにちは"; 
    }elseif($time <=5){
        echo "今" .$time. "時台です";
        echo '<br>';
        echo "こんばんは";
    }
?>