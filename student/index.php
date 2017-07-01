
    <h1>หน้าแรกของ STUDENT</h1>
<?php
/**
 * Created by PhpStorm.
 * User: wattanapong suttapak
 * Date: 26-Jun-17
 * Time: 7:52 PM
 */
require 'config.php';

$sql = "SELECT * FROM student";
$query = mysqli_query($conn,$sql);

if (mysqli_num_rows($query) > 0 ){
    echo "มีนักเรียนจำนวน ".mysqli_num_rows($query)." คน";
}else{
    echo "ยังไม่มีนักเรียน ";
}

?>

    <div><a href="insert.php">เพิ่มข้อมูล</a></div>

    <?php include 'list.php';?>