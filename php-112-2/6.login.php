<?php
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");  #conn是格式為....
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user"); 
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   $login=FALSE;   // 初始變數 $login預設是FALSE 即表示尚未登入成功
   while ($row=mysqli_fetch_array($result)) {
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       $login=TRUE;  // 如果都正確 設定 $login為TRUE 表示登入成功
     }
   } 
   if ($login==TRUE)   //根據login的值來回應對應訊息
     echo "登入成功";
  else 
     echo "帳號/密碼 錯誤";
?>
