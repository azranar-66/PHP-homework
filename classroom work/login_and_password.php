<?php

$log=$_POST["log"];
$pass=$_POST["pass"];

if ($log=="admin" and $pass=="123"){echo "Welcome Admin";
}

else {
    echo "БУВАЙ ХЛОПЧЫК!";
}