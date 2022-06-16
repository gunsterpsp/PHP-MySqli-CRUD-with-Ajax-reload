<?php
    include 'connect.php';

    if(isset($_POST['updateid'])){
        $user_id = $_POST['updateid'];


        $sql = "SELECT * FROM `users` WHERE id = '$user_id' ";
        $result = mysqli_query($conn, $sql);

        $response = array();
        while($row = mysqli_fetch_assoc($result)){
            $response = $row;
        }
        echo json_encode($response);
    }else {
        $response['status'] = 200;
        $response['message'] = "Invalid or data not found";
    }

    if(isset($_POST['hiddendata'])){
        $uniqueid = $_POST['hiddendata'];
        $updatename = $_POST['updatename'];
        $updateemail = $_POST['updateemail'];
        $updatemobile = $_POST['updatemobile'];
        $updatecity = $_POST['updatecity'];

        $sql = "UPDATE `users` SET name = '$updatename', 
        email = '$updateemail', mobile = '$updatemobile', 
        city = '$updatecity' WHERE id = '$uniqueid' ";

        $result = mysqli_query($conn, $sql);

    }

?>