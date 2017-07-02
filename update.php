<?php 
/**
 * Created by PhpStorm.
 * User: wattanapong suttapak
 * Date: 26-Jun-17
 * Time: 7:52 PM
 */
$tbname = basename(__DIR__);
require '../config.php';
require '../'.$tbname.'.php';

if ( isset($_POST[array_keys($attributes)[0]] ) ) {
	// sql
	// UPDATE STUDENT SET username='u1',password='1234' WHERE id = 1
	$value = "";
	foreach($attributes as $key=>$attr){
		$value .= !empty($value)?",":"";
		$value .= $key."='".$_POST[$key]."'";
	}
	$sql = "UPDATE ".$tbname."  SET ".$value." WHERE id = ".$_POST['id'];

	$query = mysqli_query($conn,$sql);

	if ($query){
		echo "แก้ไขข้อมูลสำเร็จแล้ว<br>";
		echo "<a href='index.php'>ดูทั้งหมด</a><br>";
		echo "<a href='insertform.php'>เพิ่มข้อมูลใหม่</a>";
	}else{
		echo "ไม่สามารถแก้ไขข้อมูลได้<br>";
		echo mysqli_error($conn);
	}
}else{
	$sql = "SELECT * FROM ".$tbname." WHERE id = ".$_GET['id'];
	$query = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($query);
	include 'form.php';
}