<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/h_nav.css">
    <title>h_nav</title>
</head>
<body>
    <button class="hamburger" aria-label="メニュー" aria-controls="nav-menu" aria-expanded="false">
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
    </button>
    <nav id="nav-menu" class="nav" aria-hidden="true">
        <ul class="nav__list">
            <li class="nav__item"><a href="#" class="nav__link">マイページ</a></li>
            <!--個人情報、資格、希望職種、希望する会社-->
            <li class="nav__item"><a href="#" class="nav__link">求人ページ</a></li>
            <!--従来通りの求人サイト-->
            <li class="nav__item"><a href="#" class="nav__link">履歴書作成</a></li>
            <!--入力されたデータなどからAIを使いある程度サポートをし、履歴書を作成-->
            <li class="nav__item"><a href="#" class="nav__link">面接練習</a></li>
            <!--チャットbot形式での練習（一度履歴書を作成するなどの条件をさっていした方がいいかも）-->
            <li class="nav__item"><a href="#" class="nav__link">FAQ</a></li>
            <!--想定される質問はプルダウンメニューで表示、LLMやMCPにデータを食わしてチャットbotでの受け答え-->
            <li class="nav__item"><a href="#" class="nav__link">お問い合わせ</a></li>
            <!--チーム共通のアカウントにメールを送信できるようにする-->
            <li class="nav__item"><a href="#" class="nav__link">ボランティア募集</a></li>
            <!--チーム合同の許可が降りた際に本格的に作成する-->
        </ul>
    </nav>
    <script src="../js/h_nav.js"></script>
</body>
</html>