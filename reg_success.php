<?php
        include 'conn.php';

        $Username=$_POST['Username'];
        $Firstname=$_POST['Firstname'];
        $Lastname=$_POST['Lastname'];
        $Email=$_POST['Email'];
        $Password=$_POST['Password'];
        $Address=$_POST['Address'];
        $Zipcode=$_POST['Zipcode'];
        $Tel=$_POST['Tel'];
        
        $Password=hash('sha512',$Password);

        $sql="INSERT INTO tb_regis(Username,Firstname,Lastname,Email,Password,Address,Zipcode,Tel) 
        VALUES ('$Username','$Firstname','$Lastname','$Email','$Password','$Address','$Zipcode','$Tel')";
         
        $result= mysqli_query($conn,$sql);
        
        if($result) {
            echo "<script> alert('สมัครสมาชิกสำเร็จ'); </script>";
            echo "<script> window.location='loginuser.php'; </script>";
            
        } else {
            echo "Error:".$sql."br" . mysqli_error($conn);
            echo "<script> alert('สมัครสมาชิกไม่สำเร็จ'); </script>";
        }
        mysqli_close($conn);
        ?>



