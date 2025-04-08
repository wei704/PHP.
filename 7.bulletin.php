<?php
    error_reporting(0);
    $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
    $result=mysqli_query($conn, "select * from bulletin");
    echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";  // 輸出表格的標題列
    while ($row=mysqli_fetch_array($result)){  // 使用迴圈逐筆讀取查詢結果中的資料列
        echo "<tr><td>";
        echo $row["bid"];  // 佈告編號
        echo "</td><td>";
        echo $row["type"];
        echo "</td><td>"; 
        echo $row["title"];  // 輸出標題
        echo "</td><td>";
        echo $row["content"];   //佈告內容
        echo "</td><td>";
        echo $row["time"];  //時間
        echo "</td></tr>";
    }
    echo "</table>"
?>
