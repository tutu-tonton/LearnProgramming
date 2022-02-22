<!-- HTMLエスケープを行うユーザ定義関数 -->
<!-- 引数が1個の値でも配列でも、htmlspecialchars()で処理できる -->

<?php
function es($data, $charset)
{
    if (is_array($data)) {
        return array_map(__METHOD__, $data);
    } else {
        return htmlspecialchars($data, ENT_QUOTES, $charset);
    }
}
?>
