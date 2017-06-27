<?php
    $host = "localhost";
    $userdb = "tpqi";
    $passdb = "tpqidev3";
    $db = "tpqi";

    $fieldString = ['username','password','name','sname','code','major','faculty','university','gender','birthdate'];
    $fieldDigit = ['gpa'];

    $conn = mysqli_connect($host,$userdb,$passdb,$db);

    // Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        die();
    }

?>