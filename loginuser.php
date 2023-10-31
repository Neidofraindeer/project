<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบผู้ใช้งาน</title>
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
  background: rgb(252, 248, 243);
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
.head h2 {
    text-align: center;
    font-weight: 700;
    font-size: 2rem;
}
.image{
    width: 100%;
    height: 100%;
    padding: 20px 5px 20px 35px;
}
.form-group {
  display: flex;
  justify-content: center;
  flex-direction: column;
  border-radius: 15px;
  align-items: center;
  justify-content: center;
  padding: 20px 30px 30px 30px;
}
input {
  border: none;
  background-color: #f3f3f3;
  border-radius: 7px;
  padding: 15px;
  outline: none;
  cursor: pointer;
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
  margin: 10px 0;
}
button {
  display: flex;
  text-align: center;
  justify-content: center;
  align-items: center;
  background-color: #adadad;
  border: none;
  border-radius: 12px;
  margin-top: 10px;
  color: #000000;
  padding: 8px;
  cursor: pointer;
  transition: 0.3s;  
}
button:hover {
  background-color: #ff3535;
  color: #ffffff;
}      
    </style>
</head>
<body>
<form id="form1" name="form1" method="post" action="login_success.php">
        <div class="head">
          <h2>เข้าสู่ระบบผู้ใช้งาน</h2>
        </div>
        <div class="image">
          <img src="assets/images/ผู้ใช้งาน.png" alt="">
        </div>
        <div class="form-group">
          <input name="Username" type="text" id="Username" placeholder="ชื่อผู้ใช้" required><br>
          <input type="password" id="Password" name="Password"  placeholder="รหัสผ่าน"required><br>
          <input type="submit" name="submit" class="btn btn-success" value="เข้าสู่ระบบ"><br>
          <a class="btn btn-success" href='registeruser.php'>สมัครสมาชิก</a><br><br>
          <a class="btn btn-success" href='main.php'>เลือกผู้ใช้งาน</a>
      </form>
</body>
</html>