<?php
$myfile = fopen("A064_TulsiVaidya.txt", "w") or die("Unable to open file!");
$txt = "Hi, I'm Tulsi, Roll no = 64 from batch no = 3 & currently \n";
fwrite($myfile, $txt);
$txt = "pursuing MCA from MPSTME\n";
fwrite($myfile, $txt);
fclose($myfile);
?>