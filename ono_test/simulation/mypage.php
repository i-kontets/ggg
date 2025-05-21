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
<script src="js/standard.js"></script>
</body>
</html>