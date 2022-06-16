<?php
    include 'connect.php';

extract($_POST);

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['city'])){

    $sql = "INSERT INTO users (name, email, mobile, city) VALUES ('$name', '$email', '$mobile', '$city')";

    $result = mysqli_query($conn, $sql);

}



?>