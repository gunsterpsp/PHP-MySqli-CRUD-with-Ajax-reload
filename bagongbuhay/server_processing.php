<?php
include 'connect.php';

$sql = mysqli_query($conn, "SELECT * FROM users");

$data = array();
while ($row = mysqli_fetch_assoc($sql))
{
    $update_delete = '<button class="btn btn-warning" onclick="GetDetails('.$row['id'].')" data-bs-toggle="modal" data-bs-target="#updateModal"">UPDATE</button>
    <button onclick="DeleteUser('.$row['id'].')" class="btn btn-danger">Delete</button>';
    $data[] = array(
        "id"=> $row['id'],
        "name"=> $row['name'],
        "email"=> $row['email'],
        "mobile"=> $row['mobile'],
        "city"=> $row['city'],
        "update"=>$update_delete,


    );
}
 
echo json_encode($data);

?>