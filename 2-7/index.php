<?php
$colors = ["red" => "赤", "blue" => "青", "green" => "緑"];
var_dump($colors);
echo '<br>';
$colors = ["red" => "赤", "blue" => "青", "green" => "緑"];
$colors["yellow"]="黄色";
var_dump($colors);
?>

<?php 
echo '<br>'.'<br>';
echo "1. プルリクエスト（マージリクエスト）"."<br>";
echo "コードの変更をレビュワーに通知し、マージを依頼する機能。"."<br>";
echo "2. Git Flow"."<br>";
echo "プラグイン(ツール)のこと。"."<br>";
echo "3. CRON"."<br>";
echo "多くのUNIX系OSで標準的に利用される常駐プログラム（デーモン）の一種で、利用者の設定したスケジュールに従って指定されたプログラムを定期的に起動してくれるもの。"."<br>";
?>