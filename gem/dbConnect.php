<?php
$dbConnection = mysqli_connect("localhost","root","","php_gem");


//檢查連線是否成功
if(mysqli_connect_errno()){
    echo"連線成功";
}

//echo"成功連線";

//將文字編碼設為UTF-8以正確顯示中文
mysqli_set_charset($dbConnection,"utf8");