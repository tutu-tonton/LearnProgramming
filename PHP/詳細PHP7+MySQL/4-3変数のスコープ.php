<!-- グローバルスコープ変数を使用するには -->
<?php
$tax = 0.10;
function taxPrice($unitPrice, $qty)
{
    global $tax;
    $price = $unitPrice * $qty * (1 + $tax);
    echo "{$price}円です";
}
taxPrice(250, 4);
echo "税込み" . $tax * 100, "%";
?>
