<?php
        include 'conn.php';
        session_start();

        $Username=$_POST['Username'];
        $Password=$_POST['Password'];

        $Password=hash('sha512',$Password);

        $sql="SELECT * FROM tb_regis WHERE Username ='$Username' and Password ='$Password'";
        $result= mysqli_query($conn,$sql);
        $row =mysqli_fetch_array($result);

        if(isset($_SESSION["Username"],$_SESSION["Password"]=$row['Password'])){
            $_SESSION["Username"]=$row['Username'];
            $_SESSION["Password"]=$row['Password'];
            $show=header("refresh: 1; url=http://localhost/project/index.php");
        }else{
            $_SESSION["Error"] = "<p> Your username or password is invaild </p>";
            $show=header("refresh: 1; url=http://localhost/project/loginuser.php");
        }
        echo $show;
        ?>