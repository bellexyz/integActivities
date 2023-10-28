<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $hostname = "localhost";  
    $username = "root";       
    $password = "";           
    $database = "registration"; 

    try {
        $conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $email = $_POST['email'];
        $password = $_POST['password'];

        $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email AND password = :password");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            header("Location: main_dashboard.html");
            exit();
        } else {
            echo "Login failed. Please check your credentials.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else { 
    echo "Invalid request method.";
}
?>
