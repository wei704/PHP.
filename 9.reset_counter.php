<?php
    session_start();  // 啟動 Session 機制，這樣才能操作 $_SESSION 變數
    unset($_SESSION["counter"]);  // 使用 函式將 $_SESSION["counter"] 這個變數刪除，達到「重置」的效果
    echo "counter重置成功....";  // 顯示訊息 告訴使用者 counter 已經被重置成功
    echo "<meta http-equiv=REFRESH content='2; url=8.counter.php'>";  // 使用 HTML 的 meta 標籤設定 2 秒後自動重新導向（跳轉）到 8.counter.php 頁面

?>
