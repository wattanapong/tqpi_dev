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

if ( isset($_POST ) ) {
	
	$value = [];
	$field = [];
	foreach($attributes as $key=>$attribute) {
		$value[] = $_POST[$key];
		$field[] = $key;
	}

	$_value = implode("','",$value)."'";
	$_field = implode(",",$field);

	$sql = "INSERT INTO ".$tbname."($_field)";
	$sql .= " VALUES( '$_value )";

	$query = mysqli_query($conn,$sql);

	if ($query){
		echo "เพิ่มข้อมูลสำเร็จ<br>";
		echo "<a href='index.php'>ดูทั้งหมด</a><br>";
		echo "<a href='insertform.php'>เพิ่มข้อมูลใหม่</a>";
	}else{
		echo "ไม่สามารถเพิ่มข้อมูลได้<br>";
		echo mysqli_error($conn);
	}
}else{
	include 'form.php';
}
