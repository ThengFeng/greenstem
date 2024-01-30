<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="keywords" content="Accounting Software, Spare Parts System, Workshop System" />
    <meta name="description"
        content="An accounting software company in Malaysia. Specifically Designed for spare parts to improve efficiency and productivity." />
    <title>Contact Us</title>
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

<body class="contact-us">

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $phoneNo = htmlspecialchars($_POST['phoneNo']);
        $emailAddress = htmlspecialchars($_POST['emailAddress']);
        $messageContent = htmlspecialchars($_POST['message']);
        $companyName = htmlspecialchars($_POST['companyName']);

        $to = "admin@greenstem.com.my";
        $subject = "Website Message";
        $message =
            "Company: " . $companyName . "\n" .
            "Name: " . $name . "\n" .
            "Phone Number: " . $phoneNo . "\n" .
            "Email Address: " . $emailAddress . "\n\n" .
            "Message: " . $messageContent;
        $headers = "From: admin@greenstem.com.my" . "\r\n" .
            "Reply-To: " . $emailAddress;

        if (mail($to, $subject, $message, $headers)) {
            $statusMessage = 'Your message has been sent successfully!';
        } else {
            $statusMessage = 'Oops! Something went wrong. Please try again later.';
        }

        echo "<script>alert('$statusMessage');</script>";
    }
    ?>


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
    <div class="pop-up-bg" id='popUpWindow'>
        <div class="privacy-statement-content">
            <h3>Privacy and Confidentiality Statement
                <span class="material-symbols-outlined close-btn" id='popUpCloseBtn'>
                    close
                </span>
            </h3>
            <div class="privacy-statement-desc">
                <p>
                    At <span>Greenstem Business Software Sdn Bhd</span>, we prioritize the privacy and protection of
                    your
                    personal
                    information. This Privacy and Confidentiality Statement outlines how we collect, use, protect, and
                    process
                    your personal data. <br>
                    <i>Please read this statement carefully before using our services.</i>
                </p>

                <p>
                    <span>Date Collection</span>
                    <br> When you use our website or perform specific actions, we may collect certain personal
                    information
                    that
                    you voluntarily provide, such as your name, email address, and occupation. We only collect data that
                    is
                    necessary for specific purposes, such as analyzing user behavior, improving our services, or
                    providing
                    you with specific features and benefits. We comply with relevant laws and regulations and employ
                    reasonable security measures to protect your personal information.
                </p>

                <p>
                    <span>Data Use and Sharing</span>
                    <br> We commit to not sell, trade, or rent your personal information to third parties. We only share
                    your
                    data when required by law, to enforce our terms of service, protect our rights, or prevent fraud.

                </p>

                <p>
                    <span>Data Security</span>
                    <br> We employ appropriate technical and organizational measures to protect your personal data from
                    unauthorized access, misuse, damage, or loss. We ensure the confidentiality and integrity of the
                    data
                    through suitable security controls.
                </p>

                <p>
                    <span>Updates to the Privacy and Confidentiality Statement</span>
                    <br> We may update this Privacy and Confidentiality Statement from time to time to reflect changes
                    in
                    our
                    practices or legal obligations. Any updates will be posted on our website, and we recommend checking
                    this statement periodically for the latest information.
                </p>

                <p>
                    <span>Contact Us</span>
                    <br> If you have any questions, concerns, or requests regarding your personal data or our privacy
                    practices,
                    please contact us. 
                </p>
            </div>
        </div>
    </div>
    <div class="content container-fluid">
        <img src="/pic/contact_us/contact-us-bg.svg" class='contact-us-bg'>
        <div class="content-title">
            <h3>Get in Touch Right Now!</h3>
            <pre>
                    Reach us without delay to expand 
                    your understanding through 
                    additional inquiries.
            </pre>
        </div>

        <div class="content-body">
            <div class="form-container">
                <div class="form-title">
                    Consultation for Free
                </div>

                <form action="" method='post'>
                    <input type='text' id='companyName' name='companyName' placeholder='Company Name' required>
                    <input type="text" id="name" name="name" placeholder="Your name" required>
                    <input type="tel" id="phoneNo" name="phoneNo" placeholder="Phone Number" required>
                    <input type="email" id="emailAddress" name="emailAddress" placeholder="Email Address" required>
                    <textarea name="message" id="message" rows="0" placeholder="Message" required></textarea>
                    <span class='checkbox'>
                        <input type='checkbox' id='privacyStatement' required>
                        <label for='privacyStatement1' onclick='showPopUp(this)'>Privacy and Confidentiality
                            Statement</label>
                    </span>
                    <button type="submit" onmouseover="changeButtonStyle(this,true)">Send</button>
                </form>

            </div>

            <div class="contact-us-icon">
                <img src="/pic/contact_us/contact-us-animate.svg" alt="">
            </div>

        </div>

        <div class="faq">
            <h2>FAQ</h2>
            <ol class="faq-content">
                <li class="accordion-item">
                    <div class="accordion-header" id="faq1" onclick="toggleAccordion(this,'faqCollapse1')">
                        <span class="accordion-text">What Services Does Greenstem Offer?</span>
                        <span class="accordion-symbol material-symbols-outlined">add</span>
                    </div>

                    <div class="accordion-body" id="faqCollapse1">
                        Greenstem specializes in web, mobile, and desktop applications with a focus on accounting and
                        inventory control.
                    </div>
                </li>

                <li class="accordion-item">
                    <div class="accordion-header" id="faq2" onclick="toggleAccordion(this,'faqCollapse2')">
                        <span class="accordion-text">How Does Greenstem Prioritize Client Success?</span>
                        <span class="accordion-symbol material-symbols-outlined">add</span>
                    </div>

                    <div class="accordion-body" id="faqCollapse2">
                        Greenstem is dedicated to providing expert services, comprehensive training, and after-sales
                        support.
                    </div>
                </li>

                <li class="accordion-item">
                    <div class="accordion-header" id="faq3" onclick="toggleAccordion(this,'faqCollapse3')">
                        <span class="accordion-text">What is Greenstem's Approach to Innovation?</span>
                        <span class="accordion-symbol material-symbols-outlined">add</span>
                    </div>

                    <div class="accordion-body" id="faqCollapse3">
                        Greenstem is committed to integrating new technologies to enhance efficiency and customer
                        satisfaction.
                    </div>
                </li>

                <li class="accordion-item">
                    <div class="accordion-header" id="faq4" onclick="toggleAccordion(this,'faqCollapse4')">
                        <span class="accordion-text">What are Greenstem's Business Hours?</span>
                        <span class="accordion-symbol material-symbols-outlined">add</span>
                    </div>

                    <div class="accordion-body" id="faqCollapse4">
                        Greenstem operates from Monday to Friday, with business hours from 9:00 am to 6:00 pm.
                    </div>
                </li>

                <li class="accordion-item">
                    <div class="accordion-header" id="faq5" onclick="toggleAccordion(this,'faqCollapse5')">
                        <span class="accordion-text">How can I Contact Greenstem?</span>
                        <span class="accordion-symbol material-symbols-outlined">add</span>
                    </div>

                    <div class="accordion-body" id="faqCollapse5">
                        You can reach Greenstem at the following:
                        <ul class="faq-contact-list">
                            <li onclick="window.open('https://maps.app.goo.gl/ng1pFRbZoRxoBx177', '_blank')">
                                Address: <br> A-3-3A, Block A, Ativo Plaza, No. 1, Jalan PJU 9/1, Bandar Sri Damansara,
                                52200 Kuala Lumpur.
                            </li>
                            <li onclick="window.location.href='tel:+60362633933'">
                                Phone: <br> +60362633933
                            </li>
                            <li onclick="window.location.href='mailto:admin@greenstem.com.my'">
                                Email: <br> admin@greenstem.com.my
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="accordion-item">
                    <div class="accordion-header" id="faq6" onclick="toggleAccordion(this,'faqCollapse6')">
                        <span class="accordion-text">How can I Obtain a Price Quote from Greenstem?</span>
                        <span class="accordion-symbol material-symbols-outlined">add</span>
                    </div>

                    <div class="accordion-body" id="faqCollapse6">
                        Prices are tailored based on individual customer requirements. Please contact us to receive a
                        personalized quotation. </div>
                </li>
            </ol>
        </div>
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