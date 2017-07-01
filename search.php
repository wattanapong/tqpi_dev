
    <h1>หน้าแรกของ STUDENT</h1>
<?php
/**
 * Created by PhpStorm.
 * User: wattanapong suttapak
 * Date: 26-Jun-17
 * Time: 7:52 PM
 */
require 'config.php';

$searchScript = " 1 ";

if ( isset($_POST['username']) && !empty($_POST['username']) )
    $searchScript .= " && username LIKE '%".@$_POST['username']."%'";

if ( isset($_POST['password']) && !empty($_POST['password']) )
    $searchScript .= " && password LIKE '%".@$_POST['password']."%'";

if ( isset($_POST['name']) && !empty($_POST['name']) )
    $searchScript .= " && name LIKE '%".@$_POST['name']."%'";

if ( isset($_POST['sname']) && !empty($_POST['sname']) )
    $searchScript .= " && sname LIKE '%".@$_POST['sname']."%'";

if ( isset($_POST['code']) && !empty($_POST['code']) )
    $searchScript .= " && code LIKE '%".@$_POST['code']."%'";

if ( isset($_POST['major']) && !empty($_POST['major']) )
    $searchScript .= " && major LIKE '%".@$_POST['major']."%'";

if ( isset($_POST['faculty']) && !empty($_POST['faculty']) )
    $searchScript .= " && faculty LIKE '%".@$_POST['faculty']."%'";

if ( isset($_POST['university']) && !empty($_POST['university']) )
    $searchScript .= " && university LIKE '%".@$_POST['university']."%'";

if ( isset($_POST['gpa']) && is_numeric($_POST['gpa']) )
    $searchScript .= " && gpa = ".$_POST['gpa'];

if ( isset($_POST['gender']) && !empty($_POST['gender']) )
    $searchScript .= " && gender LIKE '%".@$_POST['gender']."%'";

if ( isset($_POST['birthdate']) && !empty($_POST['birthdate']) )
    $searchScript .= " && birthdate > '".@$_POST['birthdate']."'";

$sql = "SELECT * FROM student WHERE ".$searchScript;
//die($sql);
$query = mysqli_query($conn,$sql);

if ($query && mysqli_num_rows($query) > 0 ){
    echo "ผลการค้นหา  พบนักเรียนจำนวน ".mysqli_num_rows($query)." คน";
}else{
    echo "ผลการค้นหา  ไม่พบนักเรียน ";
}

?>

    <div><a href="insertform.php">เพิ่มข้อมูล</a></div>

    <?php include 'liststudent.php';?>