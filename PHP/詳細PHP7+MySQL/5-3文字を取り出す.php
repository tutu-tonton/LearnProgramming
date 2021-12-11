<!-- 文字数を調べる -->
<?php
function price($str)
{
    $kakaku = 3000;
    $length = mb_strlen($str);
    if ($length > 10) {
        $kakaku += ($length - 10) * 100;
    }
    $kakaku = number_format($kakaku);
    $result = "{$length}文字 {$kakaku}円";
    return $result;
}
?>

<!-- 文字列から文字を取り出す -->
<?php
$msg = "吾輩は猫である。名前はまだない。";
echo mb_strlen($msg), "\n";
echo mb_substr($msg, 4), "\n";
echo mb_substr($msg, 4, 10), "\n";
echo mb_substr($msg, -6);
?>

<!-- 最後の文字削除 -->
<?php
$msg2 = "春はあけぼの。";
$msg2 = mb_substr($msg, 0, -1);
echo $msg2;
?>

<!-- 一文字づつ順に取り出す -->
<?php
$id = "Peace";
$length = strlen($id);
for ($i = 0; $i < $length; $i++) {
    $chr = $id{
        $i};
    echo "{$i}-", $chr, "\n";
}
?>
