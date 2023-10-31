<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="databooking.php">
    <?php
        require 'conn.php';
        $sql_update="INSERT INTO tb_order (Date,Name_pck,Firstname,Lastname,Email,Tel,Price,File_pay,Date_pay,Comment) 
        VALUES ('$_POST[Date]','$_POST[Name_pck]','$_POST[Firstname]','$_POST[Lastname]','$_POST[Email]','$_POST[Tel]','$_POST[Price]','$_POST[File_pay]','$_POST[Date_pay]','$_POST[Comment]')";

        $result= $conn->query($sql_update);

        if(!$result) {
        die("Error God Damn it : ". $conn->error);
        } else {

        echo "การจองสำเร็จ <br>";
        header("refresh: 1; url=http://localhost/project/databooking.php");
        }

    ?>
    </form >
</body>
</html>