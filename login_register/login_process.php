<?php
include '../config.php';

session_start();

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = md5($_POST['password']);

    $select = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        $count = mysqli_num_rows($result);

        if ($row['user_type'] == 'home') {
            $_SESSION['email'] = $row['email'];
            ob_start();
            echo '<script>alert("Login Successful"); window.location.href = "../index/index.php";</script>';
            ob_end_flush();
        } elseif ($row['user_type'] == 'company') {
            $_SESSION['email'] = $row['email'];
            ob_start();
            header('location: ../companyforms.php');
            ob_end_flush();
        }
    } else {
        $error[] = 'Incorrect email or password!';
    }
}
end();
?>