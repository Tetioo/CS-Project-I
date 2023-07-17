<?php require("../config.php");

function sendMail($email)
{
    // Your email sending code here
}

if (isset($_POST["reset-password-submit"])) {
    // Grab data inside the form
    $password = $_POST["password"];
    $passwordReset = $_POST["pwd-repeat"];

    // Check if password is entered
    if (empty($password) || empty($passwordReset)) {
        header("Location: create-newpass.php?newpwd=empty");
        exit();
    } elseif ($password !== $passwordReset) {
        // Error message
        header("Location: create-newpass.php?newpwd=pwdnotsame");
        exit();
    }

    function createRandomPassword()
    {
        $chars = "ABCDEFGHJKLMNOPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz0123456789";
        $i = 0;
        $pass = '';

        while ($i <= 8) {
            $num = mt_rand(0, 61);
            $tmp = substr($chars, $num, 1);
            $pass = $pass . $tmp;
            $i++;
        }
        return $pass;
    }

    $pw = createRandomPassword();
    $query = "UPDATE users SET password = SHA1('$pw') WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $query3 = "SELECT * FROM users WHERE email = '$email'";
        $sql = mysqli_query($conn, $query3) or die(mysqli_error());
        $rownum = mysqli_num_rows($sql);

        if (!$rownum) {
            echo "We cannot find your email in our records";
        }

        if ($result) {
            sendMail($email);
            header('location: login2.php');
            exit();
        }
    }
}
 ?>