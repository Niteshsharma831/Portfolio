<?php
// Connect to the database
$con = mysqli_connect("localhost", "root", "", "portfolio");

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if (isset($_POST['Submit'])) {
    // Collect form data
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $purpose = mysqli_real_escape_string($con, $_POST['purpose']);
    $other = mysqli_real_escape_string($con, $_POST['other']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $country = mysqli_real_escape_string($con, $_POST['country']);
    $state = mysqli_real_escape_string($con, $_POST['state']);
    $pin = mysqli_real_escape_string($con, $_POST['pin']);
    $message = mysqli_real_escape_string($con, $_POST['message']);

    // SQL query to insert data into the database
    $InsertQuery = "INSERT INTO contacts (name, email, phone, purpose, other, address, country, state, pincode, message) 
                    VALUES ('$name', '$email', '$phone', '$purpose', '$other', '$address', '$country', '$state', '$pin', '$message')";

    // Execute query and check for success
    if (mysqli_query($con, $InsertQuery)) {
        echo "<script>alert('Data inserted successfully!'); window.location.href='index.html';</script>";
    } else {
        echo "Error: " . $InsertQuery . "<br>" . mysqli_error($con);
    }
}

// Close the database connection
mysqli_close($con);
?>