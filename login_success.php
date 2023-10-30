<?php
        session_start();
        include ('conn.php');
        
        $error = array();

        if(isset($_POST['login_user'])){
            $Username= mysqli_real_escape_string($conn,$_POST['Username']);
            $Password= mysqli_real_escape_string($conn,$_POST['Password']);
        }
        
        if(empty($Username)){
            array_push($error,"ต้องใส่ชื่อผู้ใช้");
        }
        if(empty($Password)){
            array_push($error,"ต้องใส่รหัสผ่าน");
        }

        if(count($error) == 0){
            $Password = md5($Password1);
            $query = "SELECT * FROM tb_regis WHERE Username ='$Username' and Password ='$Password'";
            $result = mysqli_query($conn, $query);
            
            if(mysqli_num_rows($result) == 1){
                $_SESSION['Username'] = $Username;
                $_SESSION['success'] = "เข้าสู่ระบบสำเร็จ";
                header("location: index.php");
            }else{
                array_push($error,"ชื่อผู้ใช้/รหัสผ่านไม่ถูกต้อง");
                $_SESSION['error'] = "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
                header("location: loginuser.php");
            }
        }