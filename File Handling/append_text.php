<?php
$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
$txt = "Atul Tiwari\n";
fwrite($myfile, $txt);
$txt = "Abhi Upadhyay\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
