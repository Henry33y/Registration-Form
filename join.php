<?php
include("config/dbconnect.php");
if(isset($_POST['submit'])){
    print_r($_POST['submit']);
}

?>

<!DOCTYPE html>
<html lang="en">
    <?php include('templates/header.php')?>
    <h1 class="text-center">Register to join us</h1>
    <form action="join.php" method="POST" id="join_form" class="col-6 border mx-auto p-2 shadow-sm rounded-3" autocomplete="off">
        <div>
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" class="form-control" name="first_name" id="first_name">
            <div class="error msg"></div>
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" class="form-control" name="last_name" id="last_name">
            <div class="error msg"></div>
            <label for="student_id" class="form-label">Student ID</label>
            <input type="text" class="form-control" name="student_id" id="student_id" autocomplete="off">
            <div class="error msg"></div>
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="testemail@example.com">
            <div class="error msg"></div>
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" autocomplete="off">
            <div class="error msg"></div>
            <label for="password2" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" name="password2" id="password2" autocomplete="off">
            <div class="error msg"></div>
            <input type="checkbox" name="" id="show_password">Show Password
            <div class="d-flex justify-content-center">
                <input type="submit" value="Submit" id="submit_btn" class="btn btn-primary px-4 py-2">
            </div>
        </div>
    </form>
    <?php include('templates/footer.php')?>

    <script defer>
        window.onload = setTimeout(()=>{
            document.getElementById('student_id').value = '';
            document.getElementById('password').value = '';
        },1000)
    </script>
</html>