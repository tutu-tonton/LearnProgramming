<!-- フォーマット文字列出力 -->
<?php
echo M_PI;
echo "<br>", PHP_EOL;
printf('%.3f, M_PI');
?>

<?php
$format = '最大値%.1f, 最小値 %.1f';
$a = 15.69;
$b = 11.32;
printf($format, $a, $b);
?>
