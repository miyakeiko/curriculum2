<?php

    $x=4.7;
    echo ceil ($x);
 
    echo '<br>';
    $x=0.9;
    echo floor($x);

    echo '<br>';
    $x = 0.9;
    echo round($x);

    
    echo '<br>';
    echo pi();
    function circleArea($r) {
        $circle_area = $r * $r * pi();
        echo $circle_area; 
    }
    circleArea(150);

    
    echo '<br>';
    echo mt_rand(1, 1000);

    echo '<br>';
    $str = "apple";
    echo strlen($str);

    echo '<br>';
    $str = "apple";
    echo strpos($str, "a");

    echo '<br>';
    $str = "apple";
    echo substr($str, -3,3);
    
    echo '<br>';
    $str = "apple";
    echo str_replace("p", "P", $str);

    echo '<br>';
    $name = "太郎さん";
    $limit_number = 10;
    echo $name."の残り時間はあと".$limit_number."です";
    echo '<br>';
    printf("%sの残り時間はあと%dです", $name, $limit_number);


    echo '<br>';
    $name = "太郎"; $limit_time = 10; $price = 10000; printf("%sはあと%d時間で%dの罰金です。", $name, $limit_time, $price);

    echo '<br>';
    $limit_hour = 2;
    $limit_minute = 15;
    printf("残り%02d時間%02d分", $limit_hour, $limit_minute);
    echo '<br>';
    $limit_hour = 5;
    $limit_minute = 10;
    printf("残り%02d時間%02d分", $limit_hour, $limit_minute);

    echo '<br>';
    $limit_hour = 3;
    $limit_minute = 5;
    printf("残り%02d時間%02d分", $limit_hour, $limit_minute);
    
?>


