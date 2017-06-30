<?php
/**
 * Created by PhpStorm.
 * User: wattanapong suttapak
 * Date: 26-Jun-17
 * Time: 8:24 PM
 */
require 'config.php';
?>
<br><br><br>
<form method="POST" action="search.php">
    <input type="submit" value="ค้นหา"> <br><br><br>
<table border="1" width="1200px" style="margin:0 auto">
    <thead>
    <tr>
        <th>ชื่อเข้าใช้</th>
        <th>รหัสผ่าน</th>
        <th>ชื่อ</th>
        <th>นามสกุล</th>
        <th>รหัสนิสิต</th>
        <th>สาขาวิชา</th>
        <th>คณะ</th>
        <th>มหาวิทยาลัย</th>
        <th>เกรดเฉลี่ย</th>
        <th>เพศ</th>
        <th>วัน/เดือน/ปี เกิด</th>
        <th>จัดการ</a></th>
    </tr>
    <tr>
        <td><input type="text" name="username" value="<?=@$_POST['username']?>" size="10" ></td>
        <td><input type="text" name="password"  value="<?=@$_POST['password']?>"  size="10"></td>
        <td><input type="text" name="name"  value="<?=@$_POST['name']?>"  size="10"></td>
        <td><input type="text" name="sname"  value="<?=@$_POST['sname']?>"  size="10"></td>
        <td><input type="text" name="code"  value="<?=@$_POST['code']?>"  size="10"></td>
        <td><input type="text" name="major"  value="<?=@$_POST['major']?>"  size="10"></td>
        <td><input type="text" name="faculty"  value="<?=@$_POST['faculty']?>"  size="10"></td>
        <td><input type="text" name="university"  value="<?=@$_POST['university']?>"  size="10"></td>
        <td><input type="number" name="gpa"  value="<?=@$_POST['gpa']?>"  size="10"></td>
        <td><input type="text" name="gender"  value="<?=@$_POST['gender']?>"  size="10"></td>
        <td><input type="date" name="birthdate"  value="<?=@$_POST['birthdate'];?>"  size="10"></td>
    </tr>
    </thead>
    <?php if ($query) { ?>
    <tbody>
        <?php while( $row = mysqli_fetch_array($query) ){ ?>
        <tr>
            <td><?=$row['username']?></td>
            <td><?=$row['password']?></td>
            <td><?=$row['name']?></td>
            <td><?=$row['sname']?></td>
            <td><?=$row['code']?></td>
            <td><?=$row['major']?></td>
            <td><?=$row['faculty']?></td>
            <td><?=$row['university']?></td>
            <td><?=$row['gpa']?></td>
            <td><?=$row['gender']?></td>
            <td><?=date("d/m/Y", strtotime($row['birthdate']))?></td>
            <td>
                <a href="updateform.php?id=<?=$row['id']?>">แก้ไข</a>
                <a href="delete.php?id=<?=$row['id']?>" onclick="return confirm('ยืนยันการลบข้อมูล')">ลบ</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
    <?php } ?>
</table>
</form>