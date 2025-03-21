<<<<<<< HEAD
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input
    $firstName = htmlspecialchars(strip_tags($_POST['firstName']));
    $lastName = htmlspecialchars(strip_tags($_POST['lastName']));
    $email = htmlspecialchars(strip_tags($_POST['email']));
    $age = htmlspecialchars(strip_tags($_POST['age']));
    $gender = htmlspecialchars(strip_tags($_POST['gender']));

    // Validate input
    if(empty($firstName) || empty($lastName) || !filter_var($email, FILTER_VALIDATE_EMAIL) || empty($age) || empty($gender)) {
        // Handle error - input is not valid
        echo "Please fill in all the fields correctly.";
    } else {
        // Process the input - example: send an email
        $to = 'shaanr@hotmail.co.uk'; // replace with your email
        $subject = 'Form Submission';
        $message = "Name: $firstName $lastName\nEmail: $email\nAge: $age\nGender: $gender";
        $headers = 'From: webmaster@example.com'; // replace with a valid domain email

        if(mail($to, $subject, $message, $headers)) {
            echo "Thank you for your submission.";
        } else {
            echo "Unable to send email. Check your PHP mail configuration.";
        }
    }
}
?>
=======
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input
    $firstName = htmlspecialchars(strip_tags($_POST['firstName']));
    $lastName = htmlspecialchars(strip_tags($_POST['lastName']));
    $email = htmlspecialchars(strip_tags($_POST['email']));
    $age = htmlspecialchars(strip_tags($_POST['age']));
    $gender = htmlspecialchars(strip_tags($_POST['gender']));

    // Validate input
    if(empty($firstName) || empty($lastName) || !filter_var($email, FILTER_VALIDATE_EMAIL) || empty($age) || empty($gender)) {
        // Handle error - input is not valid
        echo "Please fill in all the fields correctly.";
    } else {
        // Process the input - example: send an email
        $to = 'shaanr@hotmail.co.uk'; // replace with your email
        $subject = 'Form Submission';
        $message = "Name: $firstName $lastName\nEmail: $email\nAge: $age\nGender: $gender";
        $headers = 'From: webmaster@example.com'; // replace with a valid domain email

        if(mail($to, $subject, $message, $headers)) {
            echo "Thank you for your submission.";
        } else {
            echo "Unable to send email. Check your PHP mail configuration.";
        }
    }
}
?>
>>>>>>> c84ff84904cd0ef1a6cb571022ce0be3424bae30
