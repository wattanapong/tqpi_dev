
    <h1>หน้าแรกของ STUDENT</h1>
<?php
/**
 * Created by PhpStorm.
 * User: wattanapong suttapak
 * Date: 26-Jun-17
 * Time: 7:52 PM
 */
require 'config.php';

$search = @$_POST['search'];

$searchScript = [];
for($i=0;$i<sizeof($fieldString);$i++) {
    $searchScript[] = $fieldString[$i]." LIKE '%".$search."%'";
}

for($i=0;$i<sizeof($fieldDigit);$i++) {
    if (!is_numeric($search)) break;
    $searchScript[] = $fieldDigit[$i]." = ".$search;
}

$_searchScript = implode(" || ",$searchScript);
$sql = "SELECT * FROM student WHERE ".$_searchScript;

//die($sql);
$query = mysqli_query($conn,$sql);

if (mysqli_num_rows($query) > 0 ){
    echo "ผลการค้นหา คำว่า \"".$search."\" พบนักเรียนจำนวน ".mysqli_num_rows($query)." คน";
}else{
    echo "ผลการค้นหา คำว่า \"".$search."\" ไม่พบนักเรียน ";
}

?>

    <div><a href="insert.php">เพิ่มข้อมูล</a></div>

    <?php include 'list.php';?>