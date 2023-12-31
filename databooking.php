<?php
    require 'conn.php';
    $sql = "SELECT * FROM tb_order";
    $result = $conn->query($sql);
    if(!$result){
        die("Error : ". $conn->$conn_error);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>ข้อมูลการจองแพ็คเกจ</title>
</head>
<body>
    <div class="container"><br>
    <a class="btn btn-success" href='#databooking'>ข้อมูลการจองแพ็คเกจ</a>
    <a class="btn btn-success" href='datapackage.php'>ข้อมูลแพ็คเกจ</a><br><br>
        <h1>ข้อมูลการจองแพ็คเกจ</h1><br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">รหัสการจอง</th>
                    <th scope="col-4">วันที่ต้องการจอง</th>
                    <th scope="col-4">ชื่อแพ็คเกจ</th>
                    <th scope="col-4">ชื่อ</th>
                    <th scope="col-4">นามสกุล</th>
                    <th scope="col-4">อีเมล์</th>
                    <th scope="col-4">เบอร์ติดต่อ</th>
                    <th scope="col-4">ราคา</th>
                    <th scope="col-4">หลักฐานการชำระเงิน</th>
                    <th scope="col-4">วันที่ชำระเงิน</th>
                    <th scope="col-4">หมายเหตุ</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr> 
                            <td>".$row["Id_order"]."</td>".
                            "<td>".$row["Date"]."</td>".
                            "<td>".$row["Name_pck"]."</td>".
                            "<td>".$row["Firstname"]."</td>".
                            "<td>".$row["Lastname"]."</td>".
                            "<td>".$row["Email"]."</td>".
                            "<td>".$row["Tel"]."</td>".
                            "<td>".$row["Price"]."</td>".
                            '<td><img src="./assets/images/'.$row["File_pay"].'" width="64px"'."></td>".
                            "<td>".$row["Date_pay"]."</td>".
                            "<td>".$row["Comment"]."</td>";
                            echo "</tr>";    
                        }
                    }else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </tbody>
        </table>
        <a class='btn btn-danger' href='loginadmin.php'>ออกจากระบบ</a>
    </div>
</body>

</html>