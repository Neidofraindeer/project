<?php
  session_start();
  include('conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครสมาชิก</title>
<style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-size: 100%;
  font-family: "Roboto", sans-serif;
}
body {
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background: #faaeb0;
  
}
.head {
  text-align: center;
  margin-bottom: 30px;
}
.head h2 {
  font-weight: 500;
  font-size: 250%;
}
.container{
  margin: 20px;
}
input[type="radio"]{
  display:none;
}
label{
  position: relative;
  color: #bfbab6;
  font-family: "Roboto", sans-serif;
  border: 2px solid #f3f3f3;
  border-radius: 5px;
  padding: 10px 30px;
  align-items: center;
  
}
input[type="radio"]:checked + label{
  background-color:#f3f3f3;
  color: #bfbab6;
}
form {
  background-color: #fff;
/*   display: none; */
  border-radius: 15px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  padding: 40px 30px 30px 30px;
}
.form-group {
  display: flex;
  flex-direction: column;
}
input {
  border: none;
  background-color: #f3f3f3;
  border-radius: 7px;
  padding: 15px;
  outline: none;
}
input::placeholder {
  font-style: italic;
  font-size: 90%;
  color: #bbb;
}
input:focus {
  background-color: #fff;
  box-shadow: 0 1px 3px rgba(3, 5, 0, 0.12), 0 1px 2px rgba(3, 5, 0, 0.12);
  transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
}
.bio {
  margin: 15px 0px;
}
textarea{
  background-color: #f3f3f3;
  border-radius: 15px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  padding: 10px 10px;
}
button {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: rgb(91, 91, 92);
  border: none;
  border-radius: 7px;
  margin-top: 10px;
  color: #ffffff;
  padding: 10px 15px;
  cursor: pointer;
  transition: 0.3s;
}
button:hover {
    background-color: #01d00b;
    
}

</style>
</head>
<body>

<form id="form1" name="form1"method="post" action="reg_success.php">  
  <?php include('error.php')?>
  <?php if (isset($_SESSION['error'])): ?>
    <div class="error">
      <h3>
        <?php
          echo $_SESSION['error'];
          unset($_SESSION['error']);
          ?>
      </h3>
    </div>
    <?php endif ?>
        <div class="head"> 
          <h2>สมัครสมาชิกผู้ใช้งาน</h2>
        </div>
        <div class="form-group">
            *<input type="text" placeholder="ชื่อผู้ใช้" id="Username" name="Username">
          <div class="bio">
            <input type="text" placeholder=" ชื่อ"id="Firstname"name="Firstname">
            <input type="text" placeholder="นามสกุล"id="Lastname"name="Lastname">
           </div>
          <div class="form-group">
            *<input type="email" id="Email" name="Email" placeholder="อีเมล์"><br>
            *<input type="password" id="Password" name="Password1" placeholder="รหัสผ่าน">
            *<input type="password" id="Password" name="Password2" placeholder="ยืนยันรหัสผ่าน"><br>
            <textarea name="Address"type="text" id="textarea"  placeholder=" ที่อยู่"></textarea><br>
            <input type="text" id="Zipcode" name="Zipcode" placeholder=" รหัสไปรษณีย์"><br>
            <input type="text" id="Tel" name="Tel" placeholder=" เบอร์"><br>
          </div>
        </div>
        <input type="submit" name="reg_user" class="btn btn-success" value="สมัครสมาชิก"><br>
        <a class="btn btn-success" href='loginuser.php'>เข้าสู่ระบบ</a><br><br>
        <a class="btn btn-success" href='main.php'>เลือกผู้ใช้งาน</a>
      
         

</form> 
</body>
</html>