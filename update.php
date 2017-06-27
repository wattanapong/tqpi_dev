<?php
/**
 * Created by PhpStorm.
 * User: wattanapong suttapak
 * Date: 26-Jun-17
 * Time: 8:13 PM
 */

require 'config.php';

$student = "";
for($i=0;$i<sizeof($fieldString);$i++) {
    $student[] = $fieldString[$i] ." = '".$_POST[$fieldString[$i]]."'";
}

for($i=0;$i<sizeof($fieldDigit);$i++) {
    $student[] = $fieldDigit[$i] ." = '".$_POST[$fieldDigit[$i]]."'";
}

$_student = implode(",",$student);

$sql = "UPDATE STUDENT  SET $_student WHERE id = ".$_POST['id'];

$query = mysqli_query($conn,$sql);

if ($query){
    echo "แก้ไขข้อมูลสำเร็จแล้ว<br>";
    echo "<a href='index.php'>ดูทั้งหมด</a><br>";
    echo "<a href='insertform.php'>เพิ่มข้อมูลใหม่</a>";
}else{
    echo "ไม่สามารถแก้ไขข้อมูลได้<br>";
    echo mysqli_error($conn);
}
