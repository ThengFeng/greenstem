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


    <!--Animate.css library-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!--Bootstrap-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>

    <!--Custom Css-->
    <link rel="stylesheet" href="/source/style.css">
    <link rel="stylesheet" href="/source/career.css">
    <link rel="stylesheet" href="/source/device.css">

    <!--Swiper js-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!--JQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!--Google icon-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

    <script type="application/ld+json" id="json-ld"></script>

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light" id="navigation">
        <div class="container-fluid">
            <a class="navbar-brand excludeHover" href="/index.html">
                <img src="/pic/icon.webp" alt="greenstem logo">
                <p class="company-name">Greenstem Business Software Sdn Bhd</p>
            </a>
            <button class="navbar-toggler collapsed" id="navigationBtn" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="/index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/product.html">
                            Product
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about-us.html">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="/about-us.html#galleryContainer" class="nav-link">Gallery</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Tutorial
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item nav-dropdown"><span class="nav-symboll"></span> Maintenance </a>
                                <ul class="dropdown-menu submenu submenu-left">
                                    <li><a class="dropdown-item nav-dropdown"
                                            href="/video.html?videoPath=Maintenance/Customer.mp4">Customer</a>
                                    </li>
                                    <li><a href="/video.html?videoPath=Maintenance/Stock.mp4"
                                            class="dropdown-item nav-dropdown">Stock</a></li>
                                    <li><a href="/video.html?videoPath=Maintenance/Supplier.mp4"
                                            class="dropdown-item nav-dropdown">Supplier</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item nav-dropdown"><span class="nav-symboll"></span> General
                                    Ledger</a>
                                <ul class="dropdown-menu submenu submenu-left">
                                    <li><a href="/video.html?videoPath=General Ledger/Bank_Reconciliation.mp4"
                                            class="dropdown-item nav-dropdown">Bank
                                            Reconciliation</a></li>
                                    <li><a href="/video.html?videoPath=General Ledger/GL-Payment Quick Entry_Latest.mp4"
                                            class="dropdown-item nav-dropdown">GL-Payment
                                            Quick Entry Latest</a>
                                    <li><a href="/video.html?videoPath=General Ledger/GL-Receipt_Quick_Entry.mp4"
                                            class="dropdown-item nav-dropdown">GL-Receipt
                                            Quick Entry</a></li>
                                    <li><a href="/video.html?videoPath=General Ledger/Journal_Entry.mp4"
                                            class="dropdown-item nav-dropdown">Journal
                                            Entry</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item nav-dropdown"><span class="nav-symboll"></span> Account
                                    Receivable</a>
                                <ul class="dropdown-menu submenu submenu-left">
                                    <li><a href="/video.html?videoPath=Account Receivable/Delivery_Order.mp4"
                                            class="dropdown-item nav-dropdown">Delivery
                                            Order</a></li>
                                    <li><a href="/video.html?videoPath=Account Receivable/Direct_Invoice.mp4"
                                            class="dropdown-item nav-dropdown">Direct
                                            Invoice</a></li>
                                    <li><a href="/video.html?videoPath=Account Receivable/DO-Invoice_Generator.mp4"
                                            class="dropdown-item nav-dropdown">DO-Invoice
                                            Generator</a></li>
                                    <li><a href="/video.html?videoPath=Account Receivable/Invoice_Posting.mp4"
                                            class="dropdown-item nav-dropdown">Invoice
                                            Posting</a></li>
                                    <li><a href="/video.html?videoPath=Account Receivable/Receivable_Credit_Note.mp4"
                                            class="dropdown-item nav-dropdown">Receivable
                                            Credit Note</a></li>
                                    <li><a href="/video.html?videoPath=Account Receivable/Receivable_Debit_Note.mp4"
                                            class="dropdown-item nav-dropdown">Receivable
                                            Debit Note</a></li>
                                    <li><a href="/video.html?videoPath=Account Receivable/Receivable_Receipt.mp4"
                                            class="dropdown-item nav-dropdown">Receivable
                                            Receipt</a></li>
                                    <li><a href="/video.html?videoPath=Account Receivable/Receivable_Report.mp4"
                                            class="dropdown-item nav-dropdown">Receivable
                                            Report</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item nav-dropdown"><span class="nav-symboll"></span> Account
                                    Payable</a>
                                <ul class="dropdown-menu submenu submenu-left">
                                    <li><a href="/video.html?videoPath=Account Payable/Payable_Credit_Note.mp4"
                                            class="dropdown-item nav-dropdown">Payable
                                            Credit Note</a></li>
                                    <li><a href="/video.html?videoPath=Account Payable/Payable_Debit_Note.mp4"
                                            class="dropdown-item nav-dropdown">Payable
                                            Debit Note</a></li>
                                    <li><a href="/video.html?videoPath=Account Payable/Payable_Invoice.mp4"
                                            class="dropdown-item nav-dropdown">Payable
                                            Invoice</a></li>
                                    <li><a href="/video.html?videoPath=Account Payable/Payable_Payment.mp4"
                                            class="dropdown-item nav-dropdown">Payable
                                            Payment</a></li>
                                    <li><a href="/video.html?videoPath=Account Payable/Payable_Report.mp4"
                                            class="dropdown-item nav-dropdown">Payable
                                            Report</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item nav-dropdown"><span class="nav-symboll"></span>
                                    Inventory</a>
                                <ul class="dropdown-menu submenu submenu-left">
                                    <li><a href="/video.html?videoPath=Inventory/Direct_Purchase.mp4"
                                            class="dropdown-item nav-dropdown">Direct
                                            Purchase</a></li>
                                    <li><a href="/video.html?videoPath=Inventory/Purchase_Return.mp4"
                                            class="dropdown-item nav-dropdown">Purchase
                                            Return</a></li>
                                    <li><a href="/video.html?videoPath=Inventory/Stock_Check_Entry.mp4"
                                            class="dropdown-item nav-dropdown">Stock Check
                                            Entry</a></li>
                                    <li><a href="/video.html?videoPath=Inventory/Stock_Check_Transaction.mp4"
                                            class="dropdown-item nav-dropdown">Stock
                                            Check Transaction</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item nav-dropdown"><span class="nav-symboll"></span>
                                    Workshop</a>
                                <ul class="dropdown-menu submenu submenu-left">
                                    <li><a href="/video.html?videoPath=Workshop/Register No Training Video Enhanced vers.mp4"
                                            class="dropdown-item nav-dropdown">Register
                                            No Training Video
                                            Enhanced vers</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="/career.php" class="nav-link">Career</a>
                    </li>
                    <li class="nav-item">
                        <a href="/contact-us.php" class="nav-link">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="content container-fluid">
        <div class="career-bg">
            <h1>Career Opportunities</h1>
        </div>
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
        </div>

        <form action="" method="post" enctype="multipart/form-data" onsubmit="return formValidation()" class="career-form">
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
                <input type="email" class="form-control" id="careerEmail" name="careerEmail" placeholder="name@example.com" required>
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




    <footer>
        <svg class="inner">
            <circle cx="0" cy="0" r="50%" stroke="#fff" stroke-width="0.05vw" fill="none" />
        </svg>

        <svg class="outter">
            <circle cx="0" cy="0" r="80%" stroke="#fff" stroke-width="0.05vw" fill="none" />
        </svg>

        <svg class="bottom">
            <circle cx="0" cy="0" r="70%" stroke="#fff" stroke-width="0.05vw" fill="none" />
        </svg>
        <div class="footer-content">
            <div class="contact-list">
                <div class="contact-list-element phone-number">
                    <a>
                        <span class="material-symbols-outlined footer-icon">
                            call
                        </span>

                        <span class="text">
                            <span onmouseover="hover(this)" onclick="window.location.href='tel:+60362633933'">(6)03 6263
                                3933 <br>
                                <small>Hunting Line</small> <br></span>

                            <span onmouseover="hover(this)"
                                onclick="window.open('https://api.whatsapp.com/send?phone=60162220515','_blank')">+60
                                16-222-0515 <br>
                                <small>Whatsapp</small></span>
                        </span>
                    </a>

                </div>
                <div class="contact-list-element email">
                    <a href="mailto:admin@greenstem.com.my" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Send an email to us">
                        <span class="material-symbols-outlined footer-icon">
                            drafts
                        </span>
                        <span class="text">admin@greenstem.com.my <br>
                            <small>Free Consult</small>
                        </span>
                    </a>
                </div>
                <div class="contact-list-element address">
                    <a href="https://maps.app.goo.gl/ng1pFRbZoRxoBx177" target="_blank">
                        <span class="material-symbols-outlined footer-icon">
                            distance
                        </span>
                        <span class="text">
                            A-3-3A, Block A, <br>
                            Ativo Plaza. <br>
                            Bandar Sri Damansara,<br>
                            52200 Kuala Lumpur.
                        </span>
                    </a>
                </div>
                <div class="contact-list-element contact">
                    <a href="/contact-us.php">
                        <span class="text">GET IN TOUCH</span>
                        <span class="material-symbols-outlined right-arrow footer-icon">
                            keyboard_arrow_right
                        </span>
                    </a>
                </div>

            </div>

            <div class="footer-line"></div>

            <div class="footer-page-link">
                <div class="desc">
                    <div class="desc-header">
                        <img src="/pic/icon.webp" alt="logo">
                        <p>Greenstem Business Software Sdn Bhd <span>(387389-H)</span></p>
                    </div>
                    <div class="desc-content">
                        Elevate your business with Greenstem, delivering top-tier web, mobile, and desktop software
                        solutions, including Accounting and Inventory control. Committed to customer satisfaction and
                        continual innovation, we're your dedicated partner for success.
                    </div>
                </div>
                <div class="page">
                    <p class="page-link-header">PAGES</p>
                    <ul>
                        <li><a href="/index.html"> Home</a></li>
                        <li><a href="/product.html"> Product</a></li>
                        <li><a href="/about-us.html"> About Us</a></li>
                    </ul>
                </div>
                <div class="tutorial-video">
                    <p class="page-link-header">TUTORIAL</p>
                    <ul>
                        <li onclick="showDropdown(this)" id="maintenanceBtn" class="dbtn video">
                            Maintenance
                            <ul class="nested-list" id="maintenanceCollapse">
                                <li><a href="/video.html?videoPath=Maintenance/Customer.mp4">Customer</a>
                                </li>
                                <li><a href="/video.html?videoPath=Maintenance/Stock.mp4">Stock</a></li>
                                <li><a href="/video.html?videoPath=Maintenance/Supplier.mp4">Supplier</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dbtn video" id="glBtn" onclick="showDropdown(this)">
                            General Ledger
                            <ul class="nested-list" id="glCollapse">
                                <li><a href="/video.html?videoPath=General Ledger/Bank_Reconciliation.mp4">Bank
                                        Reconciliation</a></li>
                                <li><a
                                        href="/video.html?videoPath=General Ledger/GL-Payment Quick Entry_Latest.mp4">GL-Payment
                                        Quick Entry Latest</a></li>
                                <li><a
                                        href="/video.html?videoPath=General Ledger/GL-Receipt_Quick_Entry.mp4">DO
                                        GL-Receipt Quick Entry</a></li>
                                <li><a href="/video.html?videoPath=General Ledger/Journal_Entry.mp4">Journal
                                        Entry</a></li>
                            </ul>
                        </li>
                        <li class="dbtn video" id="receivableBtn" onclick="showDropdown(this)">
                            Account Receivable
                            <ul class="nested-list" id="receivableCollapse">
                                <li><a href="/video.html?videoPath=Account Receivable/Delivery_Order.mp4">Delivery
                                        Order</a></li>
                                <li><a href="/video.html?videoPath=Account Receivable/Direct_Invoice.mp4">Direct
                                        Invoice</a></li>
                                <li><a
                                        href="/video.html?videoPath=Account Receivable/DO-Invoice_Generator.mp4">DO-Invoice
                                        Generator</a></li>
                                <li><a href="/video.html?videoPath=Account Receivable/Invoice_Posting.mp4">Invoice
                                        Posting</a></li>
                                <li><a
                                        href="/video.html?videoPath=Account Receivable/Receivable_Credit_Note.mp4">Receivable
                                        Credit Note</a></li>
                                <li><a
                                        href="/video.html?videoPath=Account Receivable/Receivable_Debit_Note.mp4">Receivable
                                        Debit Note</a></li>
                                <li><a
                                        href="/video.html?videoPath=Account Receivable/Receivable_Receipt.mp4">Receivable
                                        Receipt</a></li>
                                <li><a
                                        href="/video.html?videoPath=Account Receivable/Receivable_Report.mp4">Receivable
                                        Report</a></li>
                            </ul>
                        </li>
                        <li class="dbtn video" id="payableBtn" onclick="showDropdown(this)">
                            Account Payable
                            <ul class="nested-list" id="payableCollapse">
                                <li><a href="/video.html?videoPath=Account Payable/Payable_Credit_Note.mp4">Payable
                                        Credit Note</a></li>
                                <li><a href="/video.html?videoPath=Account Payable/Payable_Debit_Note.mp4">Payable
                                        Debit Note</a></li>
                                <li><a href="/video.html?videoPath=Account Payable/Payable_Invoice.mp4">Payable
                                        Invoice</a></li>
                                <li><a href="/video.html?videoPath=Account Payable/Payable_Payment.mp4">Payable
                                        Payment</a></li>
                                <li><a href="/video.html?videoPath=Account Payable/Payable_Report.mp4">Payable
                                        Report</a></li>
                            </ul>
                        </li>
                        <li class="dbtn video" id="inventoryBtn" onclick="showDropdown(this)">
                            Inventory
                            <ul class="nested-list" id="inventoryCollapse">
                                <li><a href="/video.html?videoPath=Inventory/Direct_Purchase.mp4">Direct
                                        Purchase</a></li>
                                <li><a href="/video.html?videoPath=Inventory/Purchase_Return.mp4">Purchase
                                        Return</a></li>
                                <li><a href="/video.html?videoPath=Inventory/Stock_Check_Entry.mp4">Stock
                                        Check Entry</a></li>
                                <li><a href="/video.html?videoPath=Inventory/Stock_Check_Transaction.mp4">Stock
                                        Check Transaction</a></li>
                            </ul>
                        </li>
                        <li class="dbtn video" id="workshopBtn" onclick="showDropdown(this)">
                            Workshop
                            <ul class="nested-list" id="workshopCollapse">
                                <li><a
                                        href="/video.html?videoPath=Workshop/Register No Training Video Enhanced vers.mp4">Register
                                        No Training Video Enhanced vers</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="social-media">
                    <div class="page-link-header">
                        <p>Social Media</p>
                    </div>
                    <div class="social-media-content">
                        <a href="https://www.facebook.com/people/Greenstem-Business-Software-Sdn-Bhd/61553297708230/"
                            target="_blank"><img src="/pic/facebook.svg" alt="facebook link"></a>
                        <a href="https://api.whatsapp.com/send?phone=60162220515" target="_blank"><img
                                src="/pic/Whatsapp.svg" alt="whatsapp link"></a>
                    </div>

                </div>
            </div>

            <div class="copyright">
                <p id="copyRight"></p>
            </div>
        </div>

    </footer>


    <script src="/source/script.js"></script>
</body>

</html>