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

    <input type="hidden" name="id" value="<?=$_GET['id']?>">
        <?php
        for($i=0;$i<sizeof($fieldString);$i++){
            $text = "text";
            $value = @$row[$fieldString[$i]];
            if ($fieldString[$i] == "birthdate") {
                $text = "date";
                $value = date("Y-m-d", strtotime($value));
            }
        ?>
            <div style="padding:20px;">
                <span><?=$fieldString[$i];?></span>
                <span><input type="<?=$text?>" name="<?=$fieldString[$i];?>" value="<?=$value?>"></span>
            </div>
        <?php } ?>
    <?php for($i=0;$i<sizeof($fieldDigit);$i++){ ?>
        <div style="padding:20px;">
            <span><?=$fieldDigit[$i];?></span>
            <span><input type="text" name="<?=$fieldDigit[$i];?>" value="<?=@$row[$fieldDigit[$i]]?>"></span>
        </div>
    <?php } ?>
    <input type="submit" value="เพิ่ม">
</form>

