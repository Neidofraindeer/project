<?php
        session_start();
        include('conn.php')
        $error = array();
        if(isset($_POST['reg_user'])){
            $Username= mysqli_real_escape_string($conn,$_POST['Username']);
            $Firstname= mysqli_real_escape_string($conn,$_POST['Firstname']);
            $Lastname= mysqli_real_escape_string($conn,$_POST['Lastname']);
            $Email= mysqli_real_escape_string($conn,$_POST['Email']);
            $Password1= mysqli_real_escape_string($conn,$_POST['Password1']);
            $Password2= mysqli_real_escape_string($conn,$_POST['Password2']);
            $Address= mysqli_real_escape_string($conn,$_POST['Address']);
            $Zipcode= mysqli_real_escape_string($conn,$_POST['Zipcode']);
            $Tel= mysqli_real_escape_string($conn,$_POST['Tel']);
            
       


        if(empty( $Username)){
            array_push($error,"ต้องใส่ชื่อผู้ใช้")
        }
        if(empty( $Email)){
            array_push($error,"ต้องใส่อีเมล์")
        }
        if(empty( $Password1)){
            array_push($error,"ต้องใส่รหัสผ่าน")
        }
        if(empty( $Password1 != $Password2)){
            array_push($error,"รหัสไม่ถูกต้อง")
        }
        
        $user_check_query = "SELECT * FROM tb_regis WHERE Username = '$Username' OR Email = '$Email'";
        $query = mysqli_query($conn,$user_check_query);
        $result= mysqli_fetch_assoc($query);

        if($result){
            if($result['Username'] === $Username){
                array_push($error,"ชื่อผู้ใช้นี่มีอยู่แล้ว")
            }
            if($result['Email'] === $Email){
                        array_push($error,"อีเมล์นี่มีอยู่แล้ว")
            }
        }

        if(count($error) == 0){
            $Password = md5($Password1);

            $sql="INSERT INTO tb_regis (Username,Firstname,Lastname,Email,Password,Address,Zipcode,Tel) 
            VALUES ('$Username','$Firstname','$Lastname','$Email','$Password','$Address','$Zipcode','$Tel')";
            mysqli_query($conn,$sql);

            $_SESSION['Username']= $Username;
            $_SESSION['success']= "เข้าสู่ระบบ";
            header('location: index.php');
        }

    }           