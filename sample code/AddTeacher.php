<?php


$link = mysqli_connect("sdb-58.hosting.stackcp.net", "student88-35303137e789", "ua92-studentAc", "student88-35303137e789");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $tname = $_POST['tname'];
    $lname = $_POST['lname'];
    $address=$_POST['address'];
    $email=$_POST['email'];
   

    $sql = "INSERT INTO t1(tname,lname,address,email) VALUES ('$tname','$lname','$address','email')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>