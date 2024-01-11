<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    

    // Open a file to write form data
    $file = 'newsletter_data.txt';
    $current = file_get_contents($file);

    // Append form data to the file
    $current .= "Email: " . $email . "\n";
    file_put_contents($file, $current);
}
?>