<?php
$data = print_r($_POST, TRUE);
$fp = fopen('cspdata.txt', 'a');
fwrite($fp, "$HTTP_RAW_POST_DATA" . "\n");
fclose($fp);
?>
