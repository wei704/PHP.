<?php
    session_start(); // 啟動 Session 機制，讓程式可以使用 $_SESSION 變數來儲存資料
    if (!isset($_SESSION["counter"]))  // 檢查是否已經存在 counter 的 Session 變數
        $_SESSION["counter"]=1;
    else  
        $_SESSION["counter"]++;  // 如果已存在，表示使用者已經造訪過，將 counter 加 1

    echo "counter=".$_SESSION["counter"];  // 如果已存在，表示使用者已經造訪過，將 counter 加 1
    echo "<br><a href=9.reset_counter.php>重置counter</a>";  // 顯示一個連結，讓使用者點擊後可以重置 counter
                                                            // 這個連結會開啟名為 9.reset_counter.php 的檔案
?>   
