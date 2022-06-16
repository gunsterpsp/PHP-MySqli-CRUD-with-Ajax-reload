<?php

include 'connect.php' ;

if(isset($_POST['deleteid'])){

    $userid = $_POST['deleteid'];
    $delete_query = "DELETE FROM users WHERE id = '$userid' ";
    mysqli_query($conn, $delete_query);
}

?>