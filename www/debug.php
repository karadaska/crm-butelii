<?php
require_once('etc/config.php');
$handle = fopen("DEBUG_FILE", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
       echo $line ."<br/>";
    }
    fclose($handle);
} else {
    echo "nu am putut citi";
}
?>
