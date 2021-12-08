<!-- 値渡し -->
<?php
function oneUp($var)
{
    $var += 1;
}
$num = 5;
oneUp($num);
echo $num;  // 5
?>

<!-- 参照渡し -->
<?php
function oneUp2(&$var)
{
    $var += 1;
}
$num2 = 5;
oneUp($num2);
echo $num2; // 6
?>

<!-- 引数の個数を固定しない -->
<?php
function myFunc()
{
    $allArgs = func_get_args(); // array
    $total = array_sum($allArgs);
    $numArgs = func_num_args(); // int
    if ($numArgs > 0) {
        $average = $total / $numArgs;
        $lastValue = func_get_arg($numArgs - 1);
    } else {
        $lastValue = $average = $total = "(データなし)";
    }
    echo "合計点", $total, "\n";
    echo "平均点", $average, "\n";
    echo "最後の点数", $lastValue, "\n";
}
myFunc(43, 67, 55, 75);
?>

<!-- 可変変数 -->
<?php
$color = "red";
$$color = 125;
echo $red;
?>

<!-- 可変変数を使って計算式の変数を入れ替え -->
<?php
$unitPrice = 230;
$quantity = 5;
$tanka = "unitPrice";
$kosu = "quantity";
$ryoukin = $$tanka * $$kosu;
echo $ryoukin;
?>

<!-- 可変関数 -->
<?php
function hello($who)
{
    echo "{$who}さん、こんにちは";
}
function bye($who)
{
    echo "{$who}さん、さようなら";
}
$msg = "bye";
if (function_exists($msg)) {
    $msg("金太郎");
}

?>

<!-- 無名関数 -->
<?php
$myFun = function ($who) {
    echo "{$who}さん、こんにちは";
}; // *代入文なのでセミコロン必要
$myFunc("tanaka");
?>
