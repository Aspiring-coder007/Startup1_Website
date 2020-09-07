<?php

$SERVER = "localhost";
$USERNAME ="root";
$PASSWORD ="";
$DATABASENAME ="business";


    $conn = mysqli_connect($SERVER, $USERNAME, $PASSWORD, $DATABASENAME);


    if($conn)
    {
        echo "DCS";
    }
    else
    {
        echo "Please try Again!";
    }







?>