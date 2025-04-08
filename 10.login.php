<?php
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");  
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   $login=FALSE;  // 初始化登入狀態變數，預設為 FALSE，表示尚未登入
   while ($row=mysqli_fetch_array($result)) {  // 使用迴圈逐筆檢查資料表中的帳號與密碼是否與使用者輸入的相符
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {  // 比對使用者輸入的帳號與密碼是否與目前資料列相符
       $login=TRUE;  // 登入成功，設為 TRUE
     }
   } 
   if ($login==TRUE) { // 判斷登入成功
    session_start();
    $_SESSION["id"]=$_POST["id"];  // 將使用者輸入的 id 儲存到 Session 中，供之後辨識身份使用 
    echo "登入成功";
    echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";   // 使用 meta 標籤在 3 秒後自動跳轉到 11.bulletin.php（登入後的主頁）
   }

  else{
    echo "帳號/密碼 錯誤";  //顯示失敗
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";   // 3 秒後自動跳轉回登入頁面（2.login.html）
  }
?>
