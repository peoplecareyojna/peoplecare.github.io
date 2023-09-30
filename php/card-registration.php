<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "peoplecare";

// Create connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
$last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
$father = mysqli_real_escape_string($conn, $_POST['father']);
$mother = mysqli_real_escape_string($conn, $_POST['mother']);
$dob = mysqli_real_escape_string($conn, $_POST['dob']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$occupation = mysqli_real_escape_string($conn, $_POST['occupation']);
$card_id = mysqli_real_escape_string($conn, $_POST['card_id']);
$file_name = $_FILES['photo']['name'];
$file_size = $_FILES['photo']['size'];
$file_type = $_FILES['photo']['type'];
$file_temp = $_FILES['photo']['tmp_name'];
$file_name2 = $_FILES['signature']['name'];
$file_size2 = $_FILES['signature']['size'];
$file_type2 = $_FILES['signature']['type'];
$file_temp2 = $_FILES['signature']['tmp_name'];

// Check if file was uploaded successfully
if ($file_size > 0) {
    $file_uploaded = move_uploaded_file($file_temp, "card-img/" . $file_name);
    if (!$file_uploaded) {
        die("File upload failed");
    }
}
// Check if 2nd file was uploaded successfully
if ($file_size2 > 0) {
    $file_uploaded = move_uploaded_file($file_temp2, "card-img/" . $file_name2);
    if (!$file_uploaded) {
        die("File upload failed");
    }
}

$sql = "INSERT INTO cardregistration (first_name, last_name, father, mother, dob, gender, email, phone, address, occupation, card_id, file_name, file_size, file_type, file_name2, file_size2, file_type2) VALUES ('$first_name', '$last_name', '$father', '$mother', '$dob', '$gender', '$email', '$phone', '$address', '$occupation', '$card_id', '$file_name', '$file_size', '$file_type', '$file_name2', '$file_size2', '$file_type2')";

if (mysqli_query($conn, $sql)) {
    echo "Your form Submitted successfully";
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>