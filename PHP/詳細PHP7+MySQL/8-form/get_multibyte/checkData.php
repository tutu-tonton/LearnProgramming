<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>リクエスト処理</title>
</head>

<body>
    <div>
        <?php
        $data = $_GET["data"];
        $data = rawurldecode($data);
        echo "{$data}を受け取りました";
        ?>
    </div>

</body>

</html>
