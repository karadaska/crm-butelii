<?php
require_once '../etc/config.php';

$lista_localitati = array();
$judet_id = getRequestParameter('judet_id', 0);
if ($judet_id > 0) {
    $lista_localitati = Zone::getLocalitatiByJudet($judet_id);
}
?>
<select name="localitate_id" id="localitate_id">
    <option value='0'>- localitate -</option>
    <? foreach ($lista_localitati as $localitate) { ?>
        <option value='<?= $localitate["id"] ?>'><?= $localitate["nume"] ?></option>
    <? } ?>
</select>