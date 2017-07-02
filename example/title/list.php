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
<br><br><br>
<form method="POST" action="search.php">
    <input type="submit" value="ค้นหา"> <br><br><br>
<table border="1" width="1200px" style="margin:0 auto">
    <thead>
    <tr>
        <?php foreach($attributes as $a){ ?>
        <th><?=$a?></th>
		<?php } ?>
        <th>จัดการ</th>
    </tr>
    <tr>
		<?php foreach($attributes as $key=>$value){ ?>
        <td><input type="text" name="<?=$key?>" value="<?=@$_POST[$key]?>" size="10" ></td>
		<?php } ?>
    </tr>
    </thead>
    <?php if ($query) { ?>
    <tbody>
        <?php while( $row = mysqli_fetch_array($query) ){ ?>
        <tr>
		<?php foreach($attributes as $key=>$value){ ?>
            <td><?=$row[$key]?></td>
        <?php } ?>
            <td>
                <a href="update.php?id=<?=$row['id']?>">แก้ไข</a>
                <a href="delete.php?id=<?=$row['id']?>" onclick="return confirm('ยืนยันการลบข้อมูล')">ลบ</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
    <?php } ?>
</table>
</form>