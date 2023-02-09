<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Mr.Vipul\n";
fwrite($myfile, $txt);
$txt = "Welcome\n";
fwrite($myfile, $txt);
fclose($myfile);
?>