<!-- XSS対策を行うには,rawurldecode()でURLデコードしたあとで -->
<!-- htmlspecialchars()を使って不正な文字を取り除くHTMLエスケープ実行 -->
<!-- この処理はユーザから受け取ったデータをブラウザに表示する前にかならず行う -->
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>受け取ったデータをHTMLエスケープする</title>
</head>

<body>
    <?php
    $data = $_GET["data"];
    $data = rawurldecode($data);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    echo "{$data}を受け取りました"
    ?>

</body>

</html>
