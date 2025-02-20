<?php



include 'dbconnect.php';



if (isset($_POST['signin'])) {
    $Email = $_POST['email'];
    $Password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM user WHERE email = ?");
    $stmt->bind_param("s", $Email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($Password, $row['password'])) {
            session_start();
            $_SESSION['email'] = $row['email'];
            header("Location: homepage.php");
            exit();
        } else {
            echo "Incorrect Email or Password";
        }
    } else {
        echo "Not Found, Incorrect Email or Password";
    }

    $stmt->close();
}

?>
