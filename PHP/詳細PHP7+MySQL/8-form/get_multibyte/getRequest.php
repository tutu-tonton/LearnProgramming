<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URLエンコード</title>
</head>

<body>
    <div>
        <?php
        $data = "東京";
        $data = rawurlencode($data);
        $url = "checkData.php";
        echo "<a href={$url}?data={$data}>", "送信する", "</a>";
        ?>
    </div>

</body>

</html>
