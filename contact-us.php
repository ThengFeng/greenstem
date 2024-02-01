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

    <?php include("link.php");?>

    <!--Custom Css-->
    <link rel="stylesheet" href="/source/style.css">
    <link rel="stylesheet" href="/source/device.css">
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

    <?php include("navigation.php"); ?>
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

    <?php include("footer.php");?>

    <script src="/source/script.js"></script>
</body>

</html>