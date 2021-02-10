<?php
require_once '../etc/config.php';

$lista_trasee = array();
$depozit_id= getRequestParameter('depozit_id', 0);
if ($depozit_id > 0) {
    $lista_trasee = Trasee::getTraseuByDepozitId($depozit_id);
}
?>
<select name="traseu_id" id="traseu_id">
    <option value='0'>- Trasee -</option>
    <? foreach ($lista_trasee as $traseu) { ?>
        <option value='<?= $traseu["id"] ?>'><?= $traseu["nume"] ?></option>
    <? } ?>
</select>