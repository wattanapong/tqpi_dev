<h1>เพิ่มข้อมุล Student</h1>
<?php
/**
 * Created by PhpStorm.
 * User: wattanapong suttapak
 * Date: 26-Jun-17
 * Time: 8:20 PM
 */
require 'config.php';
?>
<form method="POST" action="insert.php">

    <div style="padding:20px;">
        <span>username</span>
        <span><input type="text" name="username" ></span>
    </div>

    <div style="padding:20px;">
        <span>password</span>
        <span><input type="text" name="password" ></span>
    </div>

    <div style="padding:20px;">
        <span>name</span>
        <span><input type="text" name="name" ></span>
    </div>

    <div style="padding:20px;">
        <span>sname</span>
        <span><input type="text" name="sname" ></span>
    </div>

    <div style="padding:20px;">
        <span>code</span>
        <span><input type="text" name="code" ></span>
    </div>

    <div style="padding:20px;">
        <span>major</span>
        <span><input type="text" name="major" ></span>
    </div>

    <div style="padding:20px;">
        <span>faculty</span>
        <span><input type="text" name="faculty" ></span>
    </div>

    <div style="padding:20px;">
        <span>university</span>
        <span><input type="text" name="university" ></span>
    </div>

    <div style="padding:20px;">
        <span>gpa</span>
        <span><input type="number" name="gpa" ></span>
    </div>

    <div style="padding:20px;">
        <span>gender</span>
        <span><input type="text" name="gender" ></span>
    </div>

    <div style="padding:20px;">
        <span>gender</span>
        <span><input type="date" name="birthdate" ></span>
    </div>

    <input type="submit" value="เพิ่ม">
</form>

