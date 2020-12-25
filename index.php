<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>有馬記念 予想</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <h1>有馬記念 あなたの本命は？</h1>
        <form action="write.php" method="post" class="form" id="form">
            <p id="name">名前：<input type="text" name="name"></p>
            <div class="horse"></div>
            <p><textarea name="text" id="text" placeholder="メッセージを入力"></textarea></p>
            <p><input type="submit" id="vote" value="投票"></p>
            <a href="read.php">結果だけ見る</a>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>