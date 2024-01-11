<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Open a file to write form data
    $file = 'advert_data.txt';
    $current = file_get_contents($file);

    // Append form data to the file
    $current .= "Name: " . $name . "\nEmail: " . $email . "\n\nSubject: " . $subject . "\n\n\nMessage: " . $message . "\n\n\n\n";
    file_put_contents($file, $current);
}
?>
