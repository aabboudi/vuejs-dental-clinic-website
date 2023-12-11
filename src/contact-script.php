<?php
// Start or resume a session
session_start();

// Define variables to store form data and error messages
$firstName = $lastName = $email = $phone = $services = "";
$firstNameErr = $lastNameErr = $emailErr = $phoneErr = $servicesErr = "";

// Function to sanitize and validate input data
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Function to generate and validate CSRF tokens
function generateCSRFToken() {
    $token = bin2hex(random_bytes(32));
    $_SESSION['csrf_token'] = $token;
    return $token;
}

function validateCSRFToken($token) {
    return isset($_SESSION['csrf_token']) && $_SESSION['csrf_token'] === $token;
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check CSRF token
    $csrfToken = sanitizeInput($_POST["csrf_token"]);
    if (!validateCSRFToken($csrfToken)) {
        // Handle CSRF attack, e.g., log the incident and exit
        error_log("CSRF Attack Detected", 3, "/csrf_logfile.log");
        exit("CSRF Attack Detected");
    }

    // Validate First Name
    if (empty($_POST["firstName"])) {
        $firstNameErr = "Le prenom est requis";
    } else {
        $firstName = sanitizeInput($_POST["firstName"]);
    }

    // Validate Last Name
    if (empty($_POST["lastName"])) {
        $lastNameErr = "Le nom est requis";
    } else {
        $lastName = sanitizeInput($_POST["lastName"]);
    }

    // Validate Email
    if (empty($_POST["email"])) {
        $emailErr = "L'email est requis";
    } else {
        $email = sanitizeInput($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    // Validate Phone Number
    if (empty($_POST["phone"])) {
        $phoneErr = "Le telephone est requis";
    } else {
        $phone = sanitizeInput($_POST["phone"]);
        // You can add additional phone number validation if needed
    }

    // Validate Services
    if (empty($_POST["services"])) {
        $servicesErr = "Le choix du service est requis";
    } else {
        $services = sanitizeInput($_POST["services"]);
    }

    // If there are no errors, you can proceed to process the form data
    if (empty($firstNameErr) && empty($lastNameErr) && empty($emailErr) && empty($phoneErr) && empty($servicesErr)) {
        // Process the form data here, e.g., send an email, save to a database, etc.
        
        // Example: Send an email
        $to = "your@example.com";
        $subject = "New Form Submission";
        $message = "Name: $firstName $lastName\nEmail: $email\nPhone: $phone\nServices: $services";
        mail($to, $subject, $message);

        // Log successful form submissions
        error_log("Form submitted successfully: $firstName $lastName, $email, $phone, $services", 3, "/logfile.log");

        // You may redirect the user to a thank you page after processing the form.
        header("Location: http://example.com/thank_you.php");
        exit();
    }
}
?>
