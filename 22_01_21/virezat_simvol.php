<?php
$text ="Каждый охотник желает знать, где сидит фазан";
$newtext = wordwrap($text, 17,"<br>\n",1);
echo "$newtext\n";