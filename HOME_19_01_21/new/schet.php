<?php

echo $count = file_get_contents("file.txt");
// echo $count += 1;
file_put_contents("file.txt", ++$count);
