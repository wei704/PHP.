<?php
    error_reporting(0);// 關閉錯誤報告不顯示警告
    session_start();// 啟動 session 機制，才能使用 $_SESSION
    if (!$_SESSION["id"]) { // 檢查是否已登入（也就是是否有 $_SESSION["id"]） 
        echo "請先登入";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 如果沒有登入，提示使用者，並在 3 秒後跳轉回登入頁面
    }
    else{// 如果已登入，顯示歡迎訊息，並提供功能連結：登出、管理使用者、新增佈告
        echo "歡迎, ".$_SESSION["id"]."[<a href=12.logout.php>登出</a>] [<a href=18.user.php>管理使用者</a>] [<a href=22.bulletin_add_form.php>新增佈告</a>]<br>";
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); // 建立與資料庫的連線
        $result=mysqli_query($conn, "select * from bulletin");
        echo "<table border=2><tr><td></td><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";// 開始輸出 HTML 表格，包含欄位名稱
        while ($row=mysqli_fetch_array($result)){  // 使用 while 迴圈逐筆顯示每一筆佈告資料
            echo "<tr><td><a href=26.bulletin_edit_form.php?bid={$row["bid"]}>修改</a> 
            <a href=28.bulletin_delete.php?bid={$row["bid"]}>刪除</a></td><td>";
            echo $row["bid"];
            echo "</td><td>";
            echo $row["type"];
            echo "</td><td>"; 
            echo $row["title"]; // 標題
            echo "</td><td>";
            echo $row["content"];  // 佈告內容
            echo "</td><td>";
            echo $row["time"]; //時間
            echo "</td></tr>";
        }
        echo "</table>";
    
    }

?>
