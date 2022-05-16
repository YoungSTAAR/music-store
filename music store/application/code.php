<?php
session_start();
include('../database/connection.php');
?>
<!-- register php -->
<?php
    if (isset($_POST['submit'])) {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);

        // encrypt the data
        $pass = password_hash($password, PASSWORD_BCRYPT);
        $cpass = password_hash($cpassword, PASSWORD_BCRYPT);
        
        // process start
        $emailquery = "SELECT * FROM users WHERE email = '$email'";
        $emailquery_run = mysqli_query($conn, $emailquery);
        $emailcount = mysqli_num_rows($emailquery_run) > 0;
        if ($emailcount) {
            echo "email already exist.";
        } else {
            if ($password === $cpassword) {
                $insertquery = "INSERT INTO users (`name` , `email` , `password` , `phone` ) VALUES ('$name','$email','$pass','$phone')";
                $insertqueryrun = mysqli_query($conn, $insertquery);
                if ($insertqueryrun) {
                    echo "You are successfully registered.";
                    header('location:login.php');
                } else {
                    echo "not saved";
                    header('loaction:login.php');
                }
            } else {
                echo "password is not matching.";
                header('loaction:login.php');
            }
        }
    }
?>

<!-- php for login -->
    <?php
        if(isset($_POST['login'])){
            $email = mysqli_real_escape_string($conn,$_POST['email']);
            $password = mysqli_real_escape_string($conn,$_POST['password']);

            $select = "SELECT * FROM `users` WHERE email = '$email' ";
            $select_run = mysqli_query($conn,$select);
            $email_count = mysqli_num_rows($select_run);

            if($email == "admin@example.com" && $password == "admin"){
                header('location:../admin/index.php');
            }
            else if($email_count>0){
                $pass_fetch = mysqli_fetch_assoc($select_run);

                $pass = $pass_fetch['password'];

                $_SESSION['username']= $pass_fetch['name'];
                $v_pass = password_verify($password,$pass);
                if($v_pass){
                    echo "<script>alert('login successfull');</script>";
                    header('location:index.php');
                }else{
                    echo "<script>alert('Incorrect Password');</script>";
                    header('loaction:login.php');
                }
            }else{
                echo "<script>alert('Incorrect Email.');</script>";
                header('loaction:login.php');
            }

        }
    ?>
