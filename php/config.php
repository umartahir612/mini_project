<?php
include('config.php');
$host="localhost";
$user="root";
$password="";
$db="HealthLab";

$conn = mysqli_connect($host, $user, $password, $db);
if(!$conn){
    die("Connection Failed:".mysqli_connect_error());
}

if(isset($_POST['singlebutton'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $time = mysqli_real_escape_string($conn, $_POST['time']);
    $department = mysqli_real_escape_string($conn, $_POST['department']);

    $sql = "INSERT INTO appointment(full_name, email, date_, time_)
    VALUES ('$name', '$email', '$date', '$time', '$department')";

    if(mysqli_query($conn, $sql)){
        echo "data inserted";
    }else{"error".mysqli_error($conn);
    }
    
}


$conn = mysqli_connect($host, $user, $password, $db);
if(!$conn){
    die("Connection Failed:".mysqli_connect_error());
}

if(isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($conn, $_POST['your_name']);
    $email = mysqli_real_escape_string($conn, $_POST['your_email']);
    $number = mysqli_real_escape_string($conn, $_POST['your_number']);
    $message = mysqli_real_escape_string($conn, $_POST['your_message']);
    

    $sql = "INSERT INTO Contact us(your_name, your_email, your_number, your_message)
    VALUES ('$name', '$your_email', '$your_number', '$your_message', )";

    if(mysqli_query($conn, $sql)){
        echo "Thaks for contacting us";
    }else{"error".mysqli_error($conn);
    }
    
}


