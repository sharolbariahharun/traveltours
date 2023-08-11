<?php
include 'config.php';

if(isset($_POST['btnSave'])){
    $id_tour    = $_POST['title'];
    $name       = $_POST['name'];
    $email      = $_POST['email'];
    $phone      = $_POST['phone'];
    $address    = $_POST['address'];
    $location   = $_POST['location'];
    $arrivals   = $_POST['arrivals'];
    $departure  = $_POST['departure'];
    $adult      = $_POST['adult'];
    $child      = $_POST['child'];
    $tour_title = $_POST['tour_title'];

    $sql = "INSERT INTO `booking_form`(id_tour,name, email, phone, address, location, arrivals, leaving, adult, child) 
    VALUES ('$id_tour','$name','$email','$phone','$address','$location','$arrivals','$departure','$adult','$child')";
    $sql_run = mysqli_query($db, $sql);

    if ($sql_run) {
      header("Location: book.php?msg=New record created successfully");
    }
    echo "Failed: " . mysqli_connect_error($conn);
}
?>