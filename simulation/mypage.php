<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mypage</title>
    <link rel="stylesheet" href="css/standard.css">
    <link rel="stylesheet" href="css/mypage.css">
</head>
<body>
    <?php
        require "nav_header/php/nav_header.php";
    ?>
    <!--ログインや新規登録をさせる場合はこのページでa hrefを設置するかnav_header.phpで条件分岐して対応-->
    <div class="main" id="myMain">
        <div class="my_icon">
            <p class="my_title">
                My Page
            </p>
            <img src="img/gyo.JPG" alt="" class="my_img">
            <table class="my_table">
                <tr>
                    <td class="my_nic">
                        ニックネーム
                    </td>
                </tr>
                <!-- <tr class="table_furigana">
                    <td>
                        アキナシ
                    </td>
                    <td>
                        マヒト
                    </td>
                </tr> -->
                <tr>
                    <td class="my_user_name">
                        春夏冬まひと
                    </td>
                </tr>
            </table>
        </div>
</div>
<script>
    //以下headerの高さを取得してmainの開始位置を指定
    // DOMが完全に読み込まれてから実行
    document.addEventListener('DOMContentLoaded', function() {
        const header = document.getElementById('myHeader');
        const main = document.getElementById('myMain');

        // ヘッダーの高さを取得
        const headerHeight = header.offsetHeight;
        console.log(headerHeight);
        
        // mainタグのpadding-topに設定
        main.style.paddingTop = headerHeight + 'px';

        // ウィンドウのリサイズ時にも高さを再調整する
        window.addEventListener('resize', function() {
            const updatedHeaderHeight = header.offsetHeight;
            main.style.paddingTop = updatedHeaderHeight + 'px';
        });
    });
</script>
</body>
</html>