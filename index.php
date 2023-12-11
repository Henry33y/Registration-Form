<?php
include("config/dbconnect.php");
$first_name = $last_name = $email = $student_id = $password = '';
$sql = "SELECT * FROM user_info";
$result = mysqli_query($conn,$sql);
$info = mysqli_fetch_all($result,MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($conn);

print_r($info);

// if(isset($_POST['submit'])){
//     $first_name = $_POST['first_name'];
//     $last_name = $_POST['last_name'];
//     date_default_timezone_set('UTC');
//     $currentHour = date('H');
//     if ($currentHour < 12) {
//         $greeting = 'Good Morning';
//     } elseif ($currentHour < 17) {
//         $greeting = 'Good Afternoon';
//     } else {
//         $greeting = 'Good Evening';
//     }
//     echo $greeting;

// }
?>

<!DOCTYPE html>
<html lang="en">
    <?php include('templates/header.php')?>
    <h1>Please Register to add user</h1>
    
    <?php include('templates/footer.php')?>
</html>