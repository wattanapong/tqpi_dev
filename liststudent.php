<?php
/**
 * Created by PhpStorm.
 * User: wattanapong suttapak
 * Date: 26-Jun-17
 * Time: 8:24 PM
 */
require 'config.php';
?>
<table border="1" width="1200px" style="margin:0 auto">
    <thead><tr>
        <?php for($i=0;$i<sizeof($field);$i++){ ?>
            <td><?php echo $field[$i];?></td>
        <?php } ?>
    </tr></thead>

</table>