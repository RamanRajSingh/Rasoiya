<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $userType = $_POST["Customer/Provider"];

    // Create an array with the form data
    $formData = array(
        $username,
        $password,
        $email,
        $contact,
        $userType
    );

    // Path to the CSV file
    $filePath = "registor.csv";

    // Open the file in append mode
    $file = fopen($filePath, "a");

    // Write the form data to the file as CSV
    fputcsv($file, $formData);

    // Close the file
    fclose($file);

    // Redirect to a success page or display a success message
    header("Location: success.html");
    exit();
}
?>
