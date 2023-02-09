<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Vipul Kumar\n";
fwrite($myfile, $txt);
$txt = "Vipul Kumar\n";
fwrite($myfile, $txt);
fclose($myfile);
?>