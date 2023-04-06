<?php


$link = mysqli_connect("sdb-58.hosting.stackcp.net", "student88-35303137e789", "ua92-studentAc", "student88-35303137e789");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $pname = $_POST['pname'];
    $lname = $_POST['lname'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $sql = "INSERT INTO p1(pname,lname,address,email) VALUES ('$pname','$lname','$address','$email')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>