<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$con = new mysqli("localhost", "root", "", "de");
if ($con->connect_error) {
    die("Failed to Connect:" . $con->connect_error);
} else {
    $stmt = $con->prepare("select * from register where email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();

    if ($stmt_result->num_rows > 0) {
        $data = $stmt_result->fetch_assoc();
        $name = $data['name'];
        if ($data['password'] === $password) {
            // Start session and store user's email
            $_SESSION['email'] = $email;
            $_SESSION['name'] = $name;
           // echo "Name: " . $name;
            echo "<h2> Login Successfully</h2>";
            echo '<script>window.location.href = "index2.php";</script>';
           // exit();

        } else {
            echo "<h2>Invalid Email or Password";
            echo '<script>window.location.href = "index.html";</script>';
            exit();
        }
    } else {
        echo "<h2>Invalid Email or Password";
        echo '<script>window.location.href = "index.html";</script>';
        exit();
    }

}

?>