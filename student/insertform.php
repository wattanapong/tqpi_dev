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
        <?php
        for($i=0;$i<sizeof($fieldString);$i++){
            $text = "text";
            if ($fieldString[$i] == "birthdate") $text = "date";
        ?>
            <div style="padding:20px;">
                <span><?=$fieldString[$i];?></span>
                <span><input type="<?=$text?>" name="<?=$fieldString[$i];?>" ></span>
            </div>
        <?php } ?>
    <?php for($i=0;$i<sizeof($fieldDigit);$i++){ ?>
        <div style="padding:20px;">
            <span><?=$fieldDigit[$i];?></span>
            <span><input type="text" name="<?=$fieldDigit[$i];?>"></span>
        </div>
    <?php } ?>
    <input type="submit" value="เพิ่ม">
</form>

