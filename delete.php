<?php
/**
 * Created by PhpStorm.
 * User: wattanapong suttapak
 * Date: 26-Jun-17
 * Time: 8:13 PM
 */

require 'config.php';

$valueString = "";

$sql = "DELETE FROM STUDENT WHERE id = ".$_GET['id'];

$query = mysqli_query($conn,$sql);

if ($query){
    echo "ลบข้อมูลสำเร็จ<br>";
    echo "<a href='index.php'>ดูทั้งหมด</a><br>";
    echo "<a href='insertform.php'>เพิ่มข้อมูลใหม่</a>";
}else{
    echo "ไม่สามารถลบข้อมูลได้<br>";
    echo mysqli_error($conn);
}
