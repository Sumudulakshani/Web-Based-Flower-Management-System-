<?php

@include 'config.php';

if (isset($_POST['submit'])) {

    $filter_name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $name = mysqli_real_escape_string($conn, $filter_name);
    $filter_email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $email = mysqli_real_escape_string($conn, $filter_email);
    $filter_pass = filter_var($_POST['pass'], FILTER_SANITIZE_STRING);
    $filter_cpass = filter_var($_POST['cpass'], FILTER_SANITIZE_STRING);

    // Check password length
    if (strlen($filter_pass) < 6) {
        $message[] = 'Password must be at least 6 characters long!';
    } else {
        $pass = mysqli_real_escape_string($conn, md5($filter_pass));
        $cpass = mysqli_real_escape_string($conn, md5($filter_cpass));

        $select_users = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'") or die('query failed');

        if (mysqli_num_rows($select_users) > 0) {
            $message[] = 'User already exists!';
        } else {
            if ($pass != $cpass) {
                $message[] = 'Confirm password does not match!';
            } else {
                mysqli_query($conn, "INSERT INTO users(name, email, password) VALUES('$name', '$email', '$pass')") or die('query failed');
                $message[] = 'Registered successfully!';
                header('location:login.php');
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- Font Awesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Custom CSS File Link -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php
if (isset($message)) {
    foreach ($message as $message) {
        echo '<div class="message">
                <span>' . $message . '</span>
                <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
              </div>';
    }
}
?>

<section class="form-container">

    <form action="" method="post">
        <h3>Register Now</h3>
        <input type="text" name="name" class="box" placeholder="Enter your username" required>
        <input type="email" name="email" class="box" placeholder="Enter your email" required>
        <input type="password" name="pass" class="box" placeholder="Enter your password" minlength="6" required>
        <input type="password" name="cpass" class="box" placeholder="Confirm your password" minlength="6" required>
        <input type="submit" class="btn" name="submit" value="Register Now">
        <p>Already have an account? <a href="login.php">Login Now</a></p>
    </form>

</section>

</body>
</html>
