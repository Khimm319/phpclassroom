<?php
  
  $username =  $_GET['data1'];
  $password =  $_GET['data2'];

  if($username == "admin" && $password == "1234"){
    echo "ยินดีต้อนรับเข้าสู่ระบบ";
  }
  else {
    echo "ชื่อผู้ใช้หรือรหัสผ่านผิดพลาด";
  }

?>
