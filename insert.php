<?php
/**
 * Created by PhpStorm.
 * User: wattanapong suttapak
 * Date: 26-Jun-17
 * Time: 8:13 PM
 */

require 'config.php';

$valueString = "";
for($i=0;$i<sizeof($fieldString);$i++) {
    $valueString[] = $_POST[$fieldString[$i]];
}

$valueDigit = "";
for($i=0;$i<sizeof($fieldDigit);$i++) {
    $valueDigit[] = $_POST[$fieldDigit[$i]];
}

$_value = implode("','",$valueString);
$_value .= "',".implode(",",$valueDigit);

$_field = implode(",",$fieldString);
$_field .= ",".implode(",",$fieldDigit);

$sql = "INSERT INTO STUDENT($_field)";
$sql .= " VALUES( '$_value )";

$query = mysqli_query($conn,$sql);

if ($query){
    echo "เพิ่มข้อมูลสำเร็จ";
    echo "<a href='liststudent.php'>ดูทั้งหมด</a>";
    echo "<a href='insertform.php;>เพิ่มข้อมูลใหม่</a>";
}else{
    echo "ไม่สามารถเพิ่มข้อมูลได้<br>";
    echo mysqli_error($conn);
}
