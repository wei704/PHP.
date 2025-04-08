<?php
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");  // 使用 mysqli_query從資料庫發出查詢指令，選取 user 資料表中的所有資料
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   while ($row=mysqli_fetch_array($result)) {   // 每次迴圈會抓出一筆資料，直到沒有資料為止
     echo $row["id"]." ".$row["pwd"]."<br>";
   } 
?>
