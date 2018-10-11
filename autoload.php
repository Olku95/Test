<?php

//http://php.net/manual/en/mysqli.query.php
//Procedural style
$link = mysqli_connect("localhost", "janek_rights", "123456789", "veebiprogrammeerimine_janek");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
} else {
    echo 'Connection successfully';
}