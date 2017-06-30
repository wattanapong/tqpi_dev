<?php
/**
 * Created by PhpStorm.
 * User: wattanapong suttapak
 * Date: 26-Jun-17
 * Time: 8:13 PM
 */

require 'config.php';

$sql = "INSERT INTO STUDENT(username,password,name,sname,code,major,faculty,university,gpa,gender,birthdate)";
$sql .= " VALUES( '".$_POST['username']."','".$_POST['password']."','".$_POST['name']."','".$_POST['sname']."',
'".$_POST['code']."','".$_POST['major']."','".$_POST['faculty']."','".$_POST['university']."',
".$_POST['gpa'].",'".$_POST['gender']."','".$_POST['birthdate']."'
)";

$query = mysqli_query($conn,$sql);

if ($query){
    echo "เพิ่มข้อมูลสำเร็จ<br>";
    echo "<a href='index.php'>ดูทั้งหมด</a><br>";
    echo "<a href='insertform.php'>เพิ่มข้อมูลใหม่</a>";
}else{
    echo "ไม่สามารถเพิ่มข้อมูลได้<br>";
    echo mysqli_error($conn);
}
