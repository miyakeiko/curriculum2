<?php
$members = ["abe", "meguro", "iwamoto", "sakuma"];
echo count($members);
echo '<br>';
var_dump($members);
echo '<br>';

$numbers = [10, 90, 20, 15, 60];
sort($numbers);
var_dump($numbers);
echo '<br>';


$members = ["abe", "meguro", "iwamoto", "sakuma"];
var_dump(in_array("iwamoto", $members));
echo '<br>';


$members = ["abe", "meguro", "iwamoto", "sakuma"];
if (in_array("tanaka", $members)) {
    echo "田中さんがいるよ！";
} else {
    echo "田中さんはいないよ！";
}
echo '<br>';

$members = ["abe", "meguro", "iwamoto", "sakuma"];
$atstr = implode("@", $members);
var_dump($atstr);
echo '<br>';

$members = ["abe", "meguro", "iwamoto", "sakuma"];
$atstr = implode($members);
var_dump($atstr);
echo '<br>';

$members = ["abe", "meguro", "iwamoto", "sakuma"];
$atstr = implode("@", $members);
var_dump($atstr);
echo '<br>';
$re_members = explode("@", $atstr);
var_dump($re_members);

echo '<br>';

$str = "2,3,6,9,5";
$array = explode(",",$str);
var_dump($array);
echo '<br>';
?>
