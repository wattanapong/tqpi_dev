<?php
/**
 * Created by PhpStorm.
 * User: wattanapong suttapak
 * Date: 26-Jun-17
 * Time: 8:13 PM
 */

require 'config.php';

// sql
// UPDATE STUDENT SET username='u1',password='1234' WHERE id = 1
$value = "username='".$_POST['username']."'";//username='u1'
$value .= ",password='".md5($_POST['password'])."'";//password='1234'
$value .= ",name='".$_POST['name']."'";
$value .= ",sname='".$_POST['sname']."'";
$value .= ",code='".$_POST['code']."'";
$value .= ",major='".$_POST['major']."'";
$value .= ",faculty='".$_POST['faculty']."'";
$value .= ",university='".$_POST['university']."'";
$value .= ",gpa='".$_POST['gpa']."'";
$value .= ",gender='".$_POST['gender']."'";
$value .= ",birthdate='".$_POST['birthdate']."'";

$sql = "UPDATE STUDENT  SET ".$value." WHERE id = ".$_POST['id'];

$query = mysqli_query($conn,$sql);

if ($query){
    echo "แก้ไขข้อมูลสำเร็จแล้ว<br>";
    echo "<a href='index.php'>ดูทั้งหมด</a><br>";
    echo "<a href='insertform.php'>เพิ่มข้อมูลใหม่</a>";
}else{
    echo "ไม่สามารถแก้ไขข้อมูลได้<br>";
    echo mysqli_error($conn);
}