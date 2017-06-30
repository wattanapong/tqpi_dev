<h1>เพิ่มข้อมุล Student</h1>
<?php
/**
 * Created by PhpStorm.
 * User: wattanapong suttapak
 * Date: 26-Jun-17
 * Time: 8:20 PM
 */
require 'config.php';

$sql = "SELECT * FROM student WHERE id = ".$_GET['id'];
$query = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($query) or die("ไม่สามารถหาข้อมูล id = ".@$_GET['id']);
?>
<form method="POST" action="update.php">

    <input type="hidden" name="id" value="<?=@$row['id']?>" >

    <div style="padding:20px;">
        <span>username</span>
        <span><input type="text" name="username" value="<?=@$row['username']?>" ></span>
    </div>

    <div style="padding:20px;">
        <span>password</span>
        <span><input type="text" name="password"  value="<?=@$row['password']?>" ></span>
    </div>

    <div style="padding:20px;">
        <span>name</span>
        <span><input type="text" name="name"  value="<?=@$row['name']?>" ></span>
    </div>

    <div style="padding:20px;">
        <span>sname</span>
        <span><input type="text" name="sname"  value="<?=@$row['sname']?>" ></span>
    </div>

    <div style="padding:20px;">
        <span>code</span>
        <span><input type="text" name="code"  value="<?=@$row['code']?>" ></span>
    </div>

    <div style="padding:20px;">
        <span>major</span>
        <span><input type="text" name="major"  value="<?=@$row['major']?>" ></span>
    </div>

    <div style="padding:20px;">
        <span>faculty</span>
        <span><input type="text" name="faculty"  value="<?=@$row['faculty']?>" ></span>
    </div>

    <div style="padding:20px;">
        <span>university</span>
        <span><input type="text" name="university"  value="<?=@$row['university']?>" ></span>
    </div>

    <div style="padding:20px;">
        <span>gpa</span>
        <span><input type="number" name="gpa"  value="<?=@$row['gpa']?>" ></span>
    </div>

    <div style="padding:20px;">
        <span>gender</span>
        <span><input type="text" name="gender"  value="<?=@$row['gender']?>" ></span>
    </div>

    <div style="padding:20px;">
        <span>birthdate</span>
        <span><input type="date" name="birthdate"  value="<?=date("Y-m-d", strtotime(@$row['birthdate']))?>" ></span>
    </div>

    <input type="submit" value="แก้ไข">
</form>

