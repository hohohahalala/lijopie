<?php

echo exec("convert test.jpg -channel RGBA -fill orange -stroke black -gravity SouthEast -pointsize 64 -annotate +10+5 '2015-04-23 05:51:00' output3.jpg");

?>
