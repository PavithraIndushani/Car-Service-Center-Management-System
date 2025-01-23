<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "servicecenter";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstName = $_POST["firstname"];
    $lastName = $_POST["lastname"];
    $nic = $_POST["nic"];
    $contactNumber = $_POST["contact"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $vehicleBrand = $_POST["browser"];
    $vehicleModel = $_POST["model"];
    $vehicleLicense = $_POST["license"];
    $reservationDate = $_POST["date"];
    $preferredTime = $_POST["time"];
    $services = implode(", ", $_POST['services'] ?? []);

    // Insert data into the reservation table
    $sql = "INSERT INTO reservation (first_name, last_name, nic, contact_number, email, address, vehicle_brand, vehicle_model, vehicle_license, reservation_date, services, preferred_time)
            VALUES ('$firstName', '$lastName', '$nic', '$contactNumber', '$email', '$address', '$vehicleBrand', '$vehicleModel', '$vehicleLicense', '$reservationDate', '$services', '$preferredTime')";

    if ($conn->query($sql) === TRUE) {
        echo "Reservation submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
