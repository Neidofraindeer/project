<?php
require('conn.php');

$Id_pck = $_GET["Id_pck"];

$sql = "DELETE FROM tb_package WHERE Id_pck=$Id_pck";
$result = $conn->query($sql);

if(!$result) {
  die("Error God Damn it : ". $conn->error);
  } else {

      echo "<script> alert('ลบข้อมูลสำเร็จ'); </script>";
      header("refresh: 1; url=http://localhost/project/datapackage.php");
  }