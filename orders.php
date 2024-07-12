<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $amount = intval($_POST['amount']);
    $date = htmlspecialchars($_POST['date']);

    // validasi
    if (empty($name) || empty($email) || empty($phone) || empty($amount) || empty($date)) {
        $responseMessage = "All fields are required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $responseMessage = "Invalid email format.";
    } elseif (!is_numeric($phone)) {
        $responseMessage = "Phone number must be numeric.";
    } elseif ($amount < 1) {
        $responseMessage = "Amount must be at least 1.";
    } else {
        
        $orderData = "Name: $name\nEmail: $email\nPhone: $phone\nAmount: $amount\nDate: $date\n\n";
        $filePath = "save.txt";

       
        file_put_contents($filePath, $orderData, FILE_APPEND);

        $responseMessage = "Order submitted successfully!";
    }

    echo "<script>alert('$responseMessage');</script>";
    }

?>
