<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $position = $_POST['position'];
    $email = $_POST['careerEmail'];
    $name = $_POST['careerName'];

    // File upload handling
    $uploadDir = __DIR__ . '/uploads/';
    $uploadedFile = $_FILES['careerFile']['tmp_name'];
    $fileName = $_FILES['careerFile']['name'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '<script>alert("Invalid email address.");</script>';
        exit; // Stop execution if validation fails
    }


    if (move_uploaded_file($uploadedFile, $uploadDir . $fileName)) {
        // Email content
        $to = 'admin@greenstem.com.my';  // Change this to your recipient email
        $subject = 'Job Application Submission';
        $messageBody = "Position: $position <br>";
        $messageBody .= "Name: $name <br>";
        $messageBody .= "Email: $email <br><br>";

        // Attach the uploaded file to the email
        $fileContent = file_get_contents($uploadDir . $fileName);
        $fileAttachment = chunk_split(base64_encode($fileContent));

        $boundary = md5(time());
        $headers = "From: admin@greenstem.com.my\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";
        $message = "--$boundary\r\n";
        $message .= "Content-Type: text/html; charset=\"utf-8\"\r\n";
        $message .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
        $message .= "$messageBody\r\n";
        $message .= "--$boundary\r\n";
        $message .= "Content-Type: application/pdf; name=\"$fileName\"\r\n";
        $message .= "Content-Transfer-Encoding: base64\r\n";
        $message .= "Content-Disposition: attachment; filename=\"$fileName\"\r\n\r\n";
        $message .= "$fileAttachment\r\n";
        $message .= "--$boundary--";

        // Send the email
        if (mail($to, $subject, $message, $headers)) {
            echo '<script>alert("Application submitted successfully!");</script>';
        } else {
            echo '<script>alert("Application submission failed. Please check the server logs for more information.");</script>';
        }
    } else {
        echo '<script>alert("File upload failed. Please check the server logs for more information.");</script>';
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="keywords" content="Accounting Software, Spare Parts System, Workshop System" />
    <meta name="description"
        content="An accounting software company in Malaysia. Specifically Designed for spare parts to improve efficiency and productivity." />
    <title>Career</title>
    <link rel="shortcut icon" type="image/x-icon" href="/pic/icon.webp" />

    <?php include("link.php"); ?>

    <!--Custom Css-->
    <link rel="stylesheet" href="/source/style.css">
    <link rel="stylesheet" href="/source/career.css">
    <link rel="stylesheet" href="/source/device.css">
</head>

<body>
    <?php include("navigation.php"); ?>

    <div class="content container-fluid">
        <div class="career-bg"></div>
        <h1>Career Opportunities</h1>


        <div class="career-intro">
            <div class="career-desc">
                <h3 class="career-title">Join Us in Something Bigger</h3>
                <h4 class="career-subtitle">Explore Opportunities at Greenstem</h4>
                <p class="career-content">
                    Join the Greenstem family and be part of our mission to innovate in the software industry. Whether
                    you're an experienced IT professional or a fresh graduate, we welcome you to contribute to shaping
                    the future of information technology. Explore exciting opportunities and make a meaningful impact
                    with us!
                </p>
            </div>

            <div class='career-img'><img src="/pic/career/career_1.svg" alt="team"></div>
        </div>

        <form action="" method="post" enctype="multipart/form-data" onsubmit="return formValidation()"
            class="career-form">
            <h3>Join Our Team</h3>
            <select name="position" id="position" class="form-select" required>
                <option selected disabled>*Select Position</option>
                <option value="Sales Executive">Software Sales Executive</option>
                <option value="Web Programmer">Web Programmer</option>
                <option value="Apps Programmer">Apps Programmer</option>
                <option value="UI/UX Designer">UI/UX Designer</option>
                <option value="Accounting System Support">Accounting System Support</option>
                <option value="Technical Support">Technical Support</option>
            </select>

            <div class="form-floating">
                <input type="email" class="form-control" id="careerEmail" name="careerEmail"
                    placeholder="name@example.com" required>
                <label for="careerEmail">Email address</label>
            </div>

            <div class="form-floating">
                <input type="text" class="form-control" id="careerName" name="careerName" placeholder="xxx" required>
                <label for="careerName">Name</label>
            </div>

            <div class="file">
                <span>*Please attach a copy of your Resume or CV*</span>
                <input type="file" name="careerFile" id="careerFile" required accept=".pdf" required>
            </div>

            <button type="submit" onmouseover="changeButtonStyle(this,true)">Send</button>

        </form>
    </div>

    <?php include('footer.php'); ?>

    <script src="/source/script.js"></script>
</body>

</html>