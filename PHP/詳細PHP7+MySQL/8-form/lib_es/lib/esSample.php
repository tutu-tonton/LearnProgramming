<!-- 実行結果 -->
<!-- ブラウザにはへえんすうと配列の値がそのまま表示される -->
<!-- 実際に出力された結果を確認すると値に含まれている特殊文字がエンティティ変換されている -->
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XSS対策</title>
</head>

<body>
    <div>
        <pre>
           <?php
            require_once("lib/util.php");
            $myCode = "<h2>テスト</h2>";
            $myArray = [
                "a" => "<p>赤</p>",
                "b" => "<script>alert('hello')</script>"
            ];
            echo '$myCodeの値：', es($myCode);
            echo "\n\n";
            echo 'myArrayの値：';
            print_r(es($myArray));
            ?>
       </pre>
    </div>
</body>

</html>
