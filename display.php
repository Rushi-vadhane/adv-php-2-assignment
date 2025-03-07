<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture user input from the form
    $user_id = $_POST['user_id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    // Display the user details
    echo "<h2>User Details</h2>";
    echo "<p><strong>User ID:</strong> $user_id</p>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Address:</strong> $address</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Mobile No:</strong> $mobile</p>";
}
?>
