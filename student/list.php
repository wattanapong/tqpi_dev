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
    ค้นหา <input type="text" name="search" value="<?=@$search?>">
</form>
<table border="1" width="1200px" style="margin:0 auto">
    <thead><tr>
        <?php for($i=0;$i<sizeof($fieldString);$i++){ ?>
            <td><?=$fieldString[$i];?></td>
        <?php } ?>

        <?php for($i=0;$i<sizeof($fieldDigit);$i++){ ?>
            <td><?=$fieldDigit[$i];?></td>
        <?php } ?>

        <td>Manage</a></td>
    </tr></thead>

    <tbody>
    <?php while( $row = mysqli_fetch_array($query) ){ ?>
    <tr>
        <?php for($i=0;$i<sizeof($fieldString);$i++){ ?>
            <td><?php
                if ($fieldString[$i] == "birthdate")
                    echo date("d-m-Y", strtotime($row[$fieldString[$i]]));
                else echo $row[$fieldString[$i]];
                ?></td>
        <?php } ?>

        <?php for($i=0;$i<sizeof($fieldDigit);$i++){ ?>
            <td><?=$row[$fieldDigit[$i]];?></td>
        <?php } ?>

        <td>
        <a href="update.php?id=<?=$row['id']?>">EDIT</a>
        <a href="delete.php?id=<?=$row['id']?>" onclick="return confirm('ยืนยันการลบข้อมูล')">DELETE</a>
        </td>
    </tr>
    <?php } ?>
    </tbody>

</table>