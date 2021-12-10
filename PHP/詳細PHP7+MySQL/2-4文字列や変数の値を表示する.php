<!-- 文字列連結 -->
<?php
$who = "tanaka";
$age = 35;
print $who . "さん" . $age . "歳";
?>

<!-- デバッグのために変数の値を表示する -->
<?php
$msg = " おはよう　";
$colors = array("red", "blue", "green");
$now = new Datetime();
$tokuten = 45;
$isPass = ($tokuten > 80);
$userName;

var_dump($msg);
var_dump($colors);
var_dump($now);
var_dump($tokuten);
var_dump($isPass);
var_dump($userName);
?>

<!-- <pre>を利用してWebブラウザでも見やすく表示 -->
<pre>
<?php
$colors = array("red", "blue", "green");
var_dump($colors);
?>
</pre>

<!-- 文字列内に変数埋め込み -->
<?php
$total = 80 + 40;
$result = $total - 5;
echo "合計 {$total}、最終結果 {$result}";
?>
