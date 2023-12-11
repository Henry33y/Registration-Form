<?php
    $conn = mysqli_connect("localhost","Henry","1234567","login_db1");
    if($conn){
        echo "Connection Successful";
    }
    else{
        echo "Connection Error: ". mysqli_connect_error();
    }
?>