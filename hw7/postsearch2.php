<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Monda">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Advance Search</title>
</head>
<body>
<div id="demo" class="carousel slide" data-ride="carousel" >
  
  <ul class="carousel-indicators" style="width: 70%;">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://sv1.picz.in.th/images/2021/01/06/lkoS31.jpg" width="50px" height="250px">
    </div>
    <div class="carousel-item">
      <img src="https://sv1.picz.in.th/images/2021/01/06/lkl1YQ.jpg" width="50px" height="250px">
    </div>
    <div class="carousel-item">
      <img src="https://sv1.picz.in.th/images/2021/01/07/l3P8X1.png" width="50px" height="250px">
    </div>
  </div>
</div>
<br>
<h4>Search Music</h4>
<center><input type="text" id="kw">
<select id="typ">
    <!--<option value="1">Folk music</option>
    <option value="2">HipHop music</option>
    <option value="3">Pop music</option>-->

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

    $sql = "SELECT albumName
            FROM music
            WHERE albumName LIKE '%$kw%'";
    $result = $mysqli->query($sql);

    while($row = $result->fetch_object())
    {
        echo "<option value='$row->albumName'>$row->albumName</option>";
    }
?>
</select>
<button onclick="search()" class="btn btn-primary">Search</button>
<a href="search.html" class="btn btn-success">Basic Search</a></center>
<div id="disp"></div>

<script>
    function search(){
        kw = document.getElementById('kw').value;
        typ = document.getElementById('typ').value;
        //alert(kw);
        console.log("kw=" +kw);
        console.log("typ=" +typ);
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function(){
            if (this.readyState == 4 && this.status == 200) {
                //document.getElementById('disp').innerHTML = this.responseText;
                arr = JSON.parse(this.responseText);
                console.log(arr);
                if(arr.length == 0){
                    document.getElementById('disp').innerHTML = "Not found";
                } else {
                    html ="";
                    for (i = 0; i < arr.length; i++) {
                        html +='<b>Music name : </b>'+arr[i].musicName +"<br> "+ 
                        '<b>Music Lenght : </b>'+arr[i].musicLenght +"<br> "+ 
                        '<b>Album Name : </b>'+arr[i].albumName +"<br> "+ 
                        '<b>Artist Name : </b>'+arr[i].artistName +"<br>"+
                        '<b>Album Year : </b>'+arr[i].albumYear +"<br><br>";
                    }
                    document.getElementById('disp').innerHTML = html;
                }
            }
        }
        parameters = "kw=" + kw + "&typ=" + typ;
        xmlhttp.open("post", "postsearchh.php");
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send(parameters);
    }
</script>
</body>
</html>
