<?php
    session_start();  // 啟動 Session 機制，讓程式可以使用 $_SESSION 變數
    unset($_SESSION["id"]);  // 使用 unset 函數來刪除 $_SESSION["id"] 這個變數，達到「登出」的效果
    echo "登出成功....";
    echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";// 使用 HTML 的 meta 標籤設定 3 秒後自動跳轉回登入頁面 (2.login.html)

?>
