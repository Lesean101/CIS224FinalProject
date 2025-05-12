<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and store form inputs
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    // Basic validation
    if (!empty($name) && !empty($email) && !empty($message)) {
        echo "<h1>Thank you, $name!</h1>";
        echo "<p>We received your message:</p>";
        echo "<blockquote>$message</blockquote>";
        echo "<p>We will contact you at <strong>$email</strong> soon.</p>";
    } else {
        echo "<h1>Error</h1>";
        echo "<p>Please fill in all fields.</p>";
    }
} else {
    echo "<h1>Access Denied</h1>";
    echo "<p>This page can only be accessed through the form.</p>";
}
?>
