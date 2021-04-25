<?php
echo "1. パフォーマンス"."<br>";
echo "コンピュータなどの機器やソフトウェア、システムなどの処理性能や実行速度、通信回線・ネットワークなどの伝送速度・容量などのことを指すことが多い。"."<br>";
echo "2. スロークエリ"."<br>";
echo "データベースにおいて、時間のかかっているSQL(遅いSQL)のことをスロークエリと呼びます。 基本的には、MySQLやPostgreSQLの設定により取得することができ、どの程度遅いものを対象とするか等を指定することが出来ます。"."<br>";
echo "3. クエリログ"."<br>";
echo "クライアントからの MySQL Server への接続・接続解除の情報、およびクライアントから実行された全ての SQL クエリを出力してくれるログです。 "."<br>";
echo '<br>'.'<br>';
?>

<?php
$num = 1; 
while($num <= 100) {

    if($num%3 ==0 && $num%5 == 0){
        echo "FizzBuzz!!";
    }elseif($num%5 == 0){
        echo "Buzz!";
    }elseif($num%3 ==0 ){
        echo "Fizz!";
    }else{
        echo $num;
    }
    $num++;
    echo '<br>';
}
?>

