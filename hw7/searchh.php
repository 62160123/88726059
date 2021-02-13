<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "hw6_62160123";

    $mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);
    $mysqli->set_charset("utf8"); //รองรับภาษาไทย 

    // check connection error 
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    } else {
        // connect success, do nothing
        //echo "Connect Success";
    }
    $kw = $_GET['kw'];
    // $kw = $_POST['kw'];
    if($kw == ""){
    }else{
    $sql = "SELECT musicName, musicLenght, albumName, artistName, albumYear
            FROM music
            WHERE musicName LIKE '%$kw%' OR albumName LIKE '%$kw%'";
    $result = $mysqli->query($sql);
    }
    $arr = array();
    if($result->num_rows > 0){
        // Convert MySQL Result Set to PHP Array of object
        while($row = $result->fetch_object())
        {
            $arr[] = $row;
        }
    }else {
      //  echo "Not found";
    }

    echo json_encode($arr);



