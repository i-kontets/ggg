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
