<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require 'conn.php';

        $Username=$_POST['Username'];
        $Password=$_POST['Password'];

        $Password=hash('sha512','&Password');
        $sql_update="INSERT INTO tb_loginuser(Username,Password) VALUES ('$Username','$Password')";
        
        $result= $conn->query($sql_update);
        if(!$result) {
        die("Error God Damn it : ". $conn->error);
        } else {
            echo "<script> alert('เข้าสู่ระบบสำเร็จ'); </script>";
            header("refresh: 1; url=http://localhost/project/index.php");
        }
    ?>
</body>
</html>