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
?>
<h1>หน้าแรกของ <?=$tbname?></h1>
<?php
$sql = "SELECT * FROM ".$tbname;
$query = mysqli_query($conn,$sql);

if (mysqli_num_rows($query) > 0 ){
    echo "ผลการค้นหา พบ ".mysqli_num_rows($query);
}else{
    echo "ผลการค้นหา ไม่พบข้อมูล ";
}

?>

    <div><a href="insert.php">เพิ่มข้อมูล</a></div>

    <?php include 'list.php';?>