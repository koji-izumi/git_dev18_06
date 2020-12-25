<?php
$fileName = "./data/vote.txt";
$ret_array = file($fileName);
$count = array_count_values($ret_array);
$json_data = json_encode($count);

?>
<script type="text/javascript">
    let js_data = <?php echo $json_data; ?>;
</script>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投票結果</title>
</head>

<body>
    <div class="header">
        <h1>有馬記念 予想対決</h1>
        <a href="index.php">投票画面に戻る</a>
    </div>
    <canvas id="myBarChart"></canvas>
    <?php
    $openFile = fopen("./data/msg.txt", "r");
    while ($line = fgets($openFile)) {
        echo nl2br($line);
    }
    fclose($openFile);
    ?>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.0/Chart.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="js/main.js"></script>
    <script type="text/javascript" src="js/chart.js"></script>

    <style>
        .header {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .header h1 {
            margin: 5px auto;
        }
    </style>

</body>

</html>