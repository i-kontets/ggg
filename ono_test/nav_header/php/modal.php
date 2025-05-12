<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modal</title>
    <link rel="stylesheet" href="../css/modal.css">
</head>
<body>

<div class="modal__wrap">
    <input type="radio" id="modal__open" class="modal__open-input" name="modal__trigger"/>
    <label for="modal__open" class="modal__open-label">モーダルを開く</label>
    <input type="radio" id="modal__close" name="modal__trigger"/>
    <div class="modal">
        <div class="modal__content-wrap">
            <label for="modal__close" class="modal__close-label">×</label>
            <div class="modal__content">
              ここにモーダルの中身が入ります。ここにモーダルの中身が入ります。
              <br/>
              ここにモーダルの中身が入ります。ここにモーダルの中身が入ります。
              <br/>
              ここにモーダルの中身が入ります。ここにモーダルの中身が入ります。
              <br>
              こっここっここここここここここここここここここここここここここここここここここここここここここここここここここここここここここここ
            </div>
        </div>
        <label for="modal__close">
            <div class="modal__background"></div>
        </label>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../js/modal.js"></script>
</body>
</html>