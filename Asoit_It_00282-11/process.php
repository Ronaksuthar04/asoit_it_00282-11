<?php
if (isset($_GET['name']) && isset($_GET['email']) && isset($_GET['message'])) {
    $name = $_GET['name'];
    $email = $_GET['email'];
    $enrol = $_GET['enrol'];
    $expr = $_GET['expr'];
    $message = $_GET['message'];

    // Perform any desired processing with the form data
    // For example, you can store it in a database or send it via email

    // Display the form data on the page
    echo "<h2>Form Data</h2>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "enrol: " . $enrol . "<br>";
    echo "expr: " . $expr . "<br>";
    echo "Message: " . $message . "<br>";
} else {
    echo "Form data not submitted.";
}
?>