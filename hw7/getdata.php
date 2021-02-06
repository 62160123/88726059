<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "hw6_62160123";

    $mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);
    $mysqli->set_charset("utf8");

    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    } else {
        // connect success, do nothing
    }

    $sql = "SELECT *
            FROM music
            ORDER BY 1";
    $result = $mysqli->query($sql);

    $arr = array();
    while($row = $result->fetch_object())
    {
        $arr[] = $row;
    }

    echo json_encode($arr);
