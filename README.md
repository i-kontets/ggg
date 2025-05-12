# ga-ga-ga-magician

[figma](https://www.figma.com/design/sBSrbMEUC80rd8677YUqiI/%E7%84%A1%E9%A1%8C?m=auto&t=kq7qfQeiJovPpyBW-6)

2025年進級制作用
## コーディング規約

###カラーコード  
    青：0056BB  
    黄：FFFF31  

##githubにコミットする際はsummaryに簡潔にコメントを書く

class名には**完結に何用なのか**と"_"で結合する
``` html:sample

<form action="#" class="scan_form">
    <label>
        <input type="text" placeholder="キーワードを入力">
    </label>
    <button type="submit" aria-label="検索"></button>
</form>

```

**本番用のファイル**は以下の形式で作成して下さい(css,js,phpはフォルダーでなくても良い)
* FT_mtry
    * img
    * header
        * header.css
        * header.js
        * header.php
    * footer
        * footer.css
        * footer.js
        * footer.php
    * deteil
        * deteil.css
        * deteil.js
        * deteil.php

jsを読み込む場合はbodyの締めタグの直前に記述する
``` html:sample

<!DOCTYPE html>
<html lang="ja">
<head>	
     <meta charset="utf-8">
     <title>サイトタイトル</title>
     <meta name="description" content="サイトの概要を記載">
     <link rel="stylesheet" href="style.css">
</head>
<body>


    <script>
        document.addEventListener('click', (e) => {
            if (!e.target.closest('.nav') && !e.target.closest('.hamburger') && nav.classList.contains('active')) {
            hamburger.classList.remove('active');
            nav.classList.remove('active');
            hamburger.setAttribute('aria-expanded', false);
            nav.setAttribute('aria-hidden', true);
          }
        });
    </script>
</body>
</html>

```

データベース構築文例
``` sql:sample

--データベース構築
CREATE DATABASE sample
CHARACTER SET utf8mb4
COLLATE utf8mb4_general_ci;

--ユーザー作成
CREATE USER 'player'@'localhost' IDENTIFIED BY 'securepass123';

--権限付与と権限反映
GRANT ALL PRIVILEGS ON blog_db.* TO 'user'@'localhost';
FLUSH PRIVILEGES;

--使用するデータベースの選択
USE　blog_db;

--テーブル作成
CREATE TABLE sample(
    id int AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) not null,
    content text not null
);
