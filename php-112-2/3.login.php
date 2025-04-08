<?php 
    if (($_POST["id"] == "john") && ($_POST["pwd"]=="john1234")) # // 檢查表單中帳號id是否為 john，密碼是否為 john1234
        echo "登入成功";
    else
        echo "登入失敗";
?>
