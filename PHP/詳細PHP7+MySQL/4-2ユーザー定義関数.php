<!-- * ミニマム関数 -->
<?php
function double($n)
{
    $result = $n * 2;
    return $result;
}
?>
<!-- // 料金計算 -->
<?php
function totalPrice($unitPrice, $qty)
{
    $shippingFee = 250;
    $price = $unitPrice * $qty;
    if ($price < 5000) {
        $price += $shippingFee;
    }
    return $price;
}
?>
<?php
$totalPrice1 = totalPrice(2400, 2);
$totalPrice2 = totalPrice(1200, 5);
echo "金額1は{$totalPrice1}円" . "<br>" . PHP_EOL;
echo "金額2は{$totalPrice2}円";
?>

<!-- * 関数の中断 -->
<?php
function warikan($total, $ninzu)
{
    if ($ninzu <= 0) {
        return;
    }
    $result = $total / $ninzu;
    echo "{$total}円を{$ninzu}人で分けると、{$result}円";
    echo "<br>" . PHP_EOL;
}
warikan(2500, 2);
warikan(3000, 0);
warikan(5500, 4);
?>

<!-- 可変引数 -->
<?php
function team1($name, ...$members)
{
    print_r($name . PHP_EOL);
    print_r($members);
}
team1("Peach", "satou", "tanaka", "katou");
?>

<!-- implode() -->
<!-- 配列の要素を連結して文字列として返す -->
<?php
function team($name, ...$members)
{
    $membersString = implode(",", $members);
    return "{$name}: {$membersString}";
}
$team1 = team("Peach", "satou", "tanaka", "katou");
$team2 = team("kaposu", "hiroshi", "kieko");
echo $team1 . "<br>" . PHP_EOL;
echo $team2;
?>

<!-- 型ヒント -->
<!-- *その型に変換される！！！ -->
<?php
function twice(int $var)
{
    $var *= 2;
    return $var;
}
$num = 10.8;
$result = twice($num);
echo "{$num}の2倍は", $result;
?>
