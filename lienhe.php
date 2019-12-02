<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>login</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/style.css"/>


</head>
<body>
<?php
  require_once('connect.php');
  session_start();
?>

    <div class="form" style="width:50%;float:left; margin-left:300px;margin-top:150px; border:none;">
    <h1>LOGIN ADMIN</h1>
                          <form action="./admin/index.php" method="post"  style="margin:auto;border-radius:40px;">
                         
    <fieldset>
        <p>
          <label style="margin-left:200px; margin-top:20px;color:#000;font-size:20px;" for="tai-khoan" >
               <b> Username:</b>
            </label>
          <input type="hidden" name="action" value="login" placeholder="admin">
          <input id="tai-khoan" name="username" type="text" class="txt" maxlength="20" style="width:30%;height:50px; margin-left:20px;"/>
</p>
        <p>
          <label style="margin-left:200px;color:#000;font-size:20px;" for="password">
              <b>  Mật khẩu :</b>
            </label>
          <input id="password" type="password"  name="password" value="" class="txt" maxlength="20" style="margin-left:10px;
            width:30%;height:50px; margin-left:20px;"/>
        </p>
        <?php
          if(isset($_GET['error'])){
            echo "<p style='margin-left:300px; color:red; font-weight: bold'> Tài khoản hoặc mật khẩu sai </p>";
          }
        ?>
        <div style="padding-top: 10px;" class="clearfix">
            <div class="submit" style="width:30%;margin:auto;margin-top:10px;">
                
                <input type="submit" value="LOGIN" name="admin/khoitao.php" style="background-color:#300; margin-left:250px;height:40px;width:60px; color:#FFF"/>
             
          
</body>
</html>