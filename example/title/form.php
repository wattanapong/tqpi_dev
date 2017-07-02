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
<h1><?=isset($_GET['id'])?"แก้ไข":"เพิ่ม"?>ข้อมุล <?=$tbname?></h1>
<form method="POST" action="<?=isset($_GET['id'])?"update.php":"insert.php"?>">
	
	<?php if (isset($_GET['id']) ) { ?>
		<input type="hidden" name="id" value="<?=$_GET['id']?>">
	<?php } ?>
	
	<?php foreach($attributes as $key=>$value){ ?>
    <div style="padding:20px;">
        <span><?=$key?></span>
        <span><input type="text" name="<?=$key?>" value="<?=@$row[$key]?>" ></span>
    </div>
	<?php } ?>

    <input type="submit" value="<?=isset($_GET['id'])?"แก้ไข":"เพิ่ม"?>">
</form>

