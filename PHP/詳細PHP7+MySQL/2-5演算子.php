<!-- 値がNULLだったときに初期値設定 -->
<?php
$price = 250 * ($kosu ?? 2);
var_dump($kosu);
echo $price;
?>

<!-- 三項演算子 -->
<?php
$a = mt_rand(0, 50);
$b = mt_rand(0, 50);
$bigger = ($a > $b) ? $a : $b;
echo "大きい値は {$bigger}、\$aは{$a}、\$bは{$b}";
?>

<!-- キャスト演算子 -->
<?php
$theDate = new DateTime();
$isAccess = (bool)$theDate;
var_dump($isAccess);
?>

<!-- 型演算子 -->
<?php
$now = new DateTime();
$isDate = $now instanceof DateTime;
var_dump($isDate);
?>
