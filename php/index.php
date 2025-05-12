<?php
    echo <<< HTML

    <head>
      <meta charset="UTF-8">
      <title>分離構成のサンプル</title>
      <link rel="stylesheet" href="../css/index.css">
    </head>
    <body>
      <h1>PHP・CSS・JS を分けたサンプルページ</h1>
      <p>現在の日時: <?php echo date('Y年m月d日 H:i:s'); ?></p>

      <button onclick="changeMessage()">メッセージ変更</button>
      <p id="message">ここにメッセージが表示されます。</p><br>
      <p><a href="sub.php">次のページへ</a></p>

      <script src="../js/index.js"></script>
    </body>

    HTML;
?>

