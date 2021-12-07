<?php
$price = 0;
for ($kazu = 1; $kazu <= 6; $kazu++) {
    if ($kazu <= 3) {
        $price += 1000;
    } else {
        $price += 500;
    }
    echo "{$kazu}人、{$price}円。";
}
?>

<!--  繰り返しの中断 -->
<!-- break -->
<?php
$list = array(20, -32, 50, -5, 40);
$count = count($list);
$sum = 0;
for ($i = 0; $i < $count; $i++) {
    $value = $list[$i];
    if ($value < 0) {
        $sum = "マイナスの値{$value}が含まれていたので処理を中断しました";
        break;
    } else {
        $sum += $value;
    }
}
echo "合計: {$sum}"
?>

<!-- 繰り返しスキップ -->
<!-- continue -->
<?php
$list = array(20, -32, 50, -5, 40);
$count = count($list);
$sum = 0;
for ($i = 0; $i < $count; $i++) {
    $value = $list[$i];
    if ($value < 0) {
        continue;
    }
    $sum += $value;
}
echo "合計: {$sum}"
?>

<!-- 繰り返しスキップ -->
<!-- continue -->
