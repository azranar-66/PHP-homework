<?php

$fp = fopen("file.txt","w+");
fwrite($fp,"test");
fclose($fp);