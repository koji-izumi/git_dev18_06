<?php
$name = $_POST['name'];
$horse = $_POST['horse'];
$msg = $_POST['text'];

// 投票された馬名を書き込み
$voteFile = fopen("./data/vote.txt", "a");
fwrite($voteFile, $horse . "\n");
fclose($votefile);

// メッセージがなければそのまま、あればmsg.txtに書き込み
if ($msg == '') {;
} else {
    $msgFile = fopen("./data/msg.txt", "a");
    fwrite($msgFile, "名前：" . $name . "  " . "投票馬：" . $horse . "  " . "メッセージ：" . $msg . "\n");
    fclose($msgFile);
}

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投票完了</title>
</head>

<body>
    <div class="container">
        <h2 st>投票が完了しました！</h2>
        <div class="btn">
            <a href="read.php">結果を見る</a>
            <a href="index.php">投票画面に戻る</a>
        </div>
    </div>

    <style>
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        h2 {
            font-size: 60px
        }

        .btn {
            display: flex;
        }

        .btn a:not(:last-child) {
            margin-right: 100px;
        }

        .btn a {
            font-size: 20px;
        }
    </style>
</body>

</html>