<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="keywords" content="Accounting Software, Spare Parts System, Workshop System" />
    <meta name="description"
        content="An accounting software company in Malaysia. Specifically Designed for spare parts to improve efficiency and productivity." />
    <title>Home</title>
    <link rel="shortcut icon" type="image/x-icon" href="/pic/icon.webp" />

    <?php include("link.php"); ?>

    <!--Custom Css-->
    <link rel="stylesheet" href="/source/style.css">
    <link rel="stylesheet" href="/source/index.css">
    <link rel="stylesheet" href="/source/device.css">

    <script type="application/ld+json" id="json-ld"></script>
</head>

<body>
    <script>
        //to make the header 1 benn expended as default (why select us)
        $(document).ready(function () {
            $("#header1").click();
        });
    </script>

    <?php
    include("navigation.php");
    ?>

    <div class="content container-fluid">
        <div class="wave-container">
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave"
                        d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h352z" />
                </defs>
                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                </g>
            </svg>
        </div>

        <div class="title">
            <h1>Driving Efficiency: Automotive Spare Parts <br> Workshop & Accounting Solutions</h1>
            <p id="subtitle">
                Greenstem Solutions - Tailored IT Excellence for <br> Empowering Your Automotive Business
            </p>
            <button onmouseover="changeButtonStyle(this,true)"
                onclick="window.location.href='https://forms.gle/uW4YrCiEsLy6xrTa6'">Free Demo</button>
        </div>

        <div class="feature">
            <h5>Features</h5>
            <h2>Choosing Excellence: <br> Unveiling the Reasons to Opt for Our Services</h2>
            <div class="feature-content-container">
                <div class="feature-content">
                    <h4>System in <br> Mobile & Tablet</h4>
                    <p>Our system is versatile, running seamlessly on both mobile phones and PC for convenient access
                        and
                        managemnet across devices</p>
                </div>
                <div class="feature-content">
                    <h4>Excellent <br>Customer Supprort</h4>
                    <p>Experience top-notch after-sales service with our dedicated customer support, ensuring prompt
                        assistance and satisfaction.</p>
                </div>
                <div class="feature-content">
                    <h4>Customized <br> Report</h4>
                    <p>Tailor insights with our customized reports for a personalized view of your spare part
                        management.
                    </p>
                </div>
                <div class="feature-content">
                    <h4>Barcode <br> Printing</h4>
                    <p>Effortlessly print and manage barcodes, streamlining inventory control for efficient spare part
                        tracking</p>
                </div>
            </div>
        </div>

        <div class="why-select-us animation">
            <div class="why-select-us-content">
                <h5>WHY US</h5>
                <h2>Successful Empowering <strong class="number"><span id="number">0</span>+</strong><br>Spare Parts
                    Companies</h2>
                <p>
                    Choose Greenstem for unparalleled software solutions that elevate your business. Our commitment to
                    customer satisfaction, innovative approach, and a seasoned team set us apart. Partner with us for
                    excellence and drive your success forward.</p>
                <div class="accordion-item">
                    <div class="accordion-header" id="header1" onclick="toggleAccordion(this,'collapse1')"
                        data-target-pic="pic1">
                        <span class="accordion-symbol material-symbols-outlined">add</span>
                        <span class="accordion-text">Dedicated Teams</span>
                    </div>

                    <div class="accordion-body" id="collapse1">
                        Discover success with Greenstem's dedicated team. We specialize in web, mobile, and desktop
                        solutions, providing tailored services and unwavering commitment to your business goals.
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header" id="header2" onclick="toggleAccordion(this,'collapse2')"
                        data-target-pic="pic2">
                        <span class="accordion-symbol material-symbols-outlined">add</span>
                        <span class="accordion-text">Certified Professional</span>
                    </div>

                    <div class="accordion-body" id="collapse2">
                        Elevate your business with Greenstem's certified professionals. Specializing in web, mobile, and
                        desktop solutions, our dedicated team ensures top-tier services tailored to your needs.
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header" id="header3" onclick="toggleAccordion(this,'collapse3')"
                        data-target-pic="pic3">
                        <span class="accordion-symbol material-symbols-outlined">add</span>
                        <span class="accordion-text">Expert Support Team</span>
                    </div>

                    <div class="accordion-body" id="collapse3">
                        Rely on Greenstem's seasoned support team for a seamless experience. With a wealth of expertise,
                        we guarantee dedicated assistance to enhance your journey with our web, mobile, and desktop
                        solutions.
                    </div>
                </div>


            </div>
            <div class="why-us-pic">
                <div class="pic" id="pic1" loading="lazy" data-header="header1">
                </div>
                <div class="pic" id="pic2" loading="lazy" data-header="header2">
                </div>
                <div class="pic" id="pic3" loading="lazy" data-header="header3">
                </div>
            </div>

        </div>


        <div class="product-container">
            <div class="product-content sparePart" data-icon-target="sparePartIcon"
                onclick="window.location.href='/spare-parts-management.php'">
                <img src="/pic/index/repair-fix-repairing-icon.svg" alt="background" id="sparePartIcon">
                <h3>Spare Parts Management & <br> Accounting System</h3>
                <p class="product-desc">Tailored for spare parts companies, our specialized system aims to boost
                    efficiency and productivity in your operations.
                </p>
            </div>

            <div class="product-line"></div>

            <div class="product-content workshop" data-icon-target="workshopIcon"
                onclick="window.location.href='/workshop.php'">
                <img src="/pic/index/car-repair-mechanic-icon.svg" alt="background" id="workshopIcon">
                <h3>Workshop Management System</h3>
                <p class="product-desc">Optimize operations, allocate resources efficiently, and boost productivity with
                    our tailored
                    workshop management solution.
                </p>
            </div>
        </div>

        <div class="after-sales-service">
            <h3 class="line1">How We Work ?</h3>
            <h3 class="line2">Our Partners Need In The First Place</h3>
            <h3 class="line3">Unveiling Our <span>After-Sales Service</span> Advantages</h3>

            <div class="after-sales-service-container animation ">
                <div class="after-sales-service-content">
                    <img src="/pic/index/customer-service 1.svg" alt="customer-service icon">
                    <div class="text-area">
                        <p>Call In & Email Support</p>
                    </div>
                </div>
                <div class="after-sales-service-content">
                    <img src="/pic/index/online-support 1.svg" alt="customer-service icon">
                    <div class="text-area">
                        <p>Internet Remote Support</p>
                    </div>
                </div>
                <div class="after-sales-service-content">
                    <img src="/pic/index/technical-support 1.svg" alt="customer-service icon">
                    <div class="text-area">
                        <p>On Site Trouble-Shoot</p>
                    </div>
                </div>
            </div>
            <button onmouseover="changeButtonStyle(this,true)" onclick="window.location.href='/about-us.php'">Read more
                about us</button>
        </div>

        <div class="project-preview">
            <div class="project-image">
                <div class="project-pic one" loading="lazy"></div>
                <div class="project-pic two" loading="lazy"></div>
                <div class="project-pic three" loading="lazy"></div>
                <div class="project-pic four" loading="lazy"></div>
            </div>
            <div class="project-content animation ">
                <h5>PRODUCTS</h5>
                <h3>Our Amazing Project <br> That Has Been Completed</h3>
                <p>Embark on a visual journey showcasing the excellence and innovation of our recently completed
                    projects.</p>

                <button onmouseover="changeButtonStyle(this,true)" onclick="window.location.href='/spare-parts-management.php'">RECENT
                    PRODUCTS</button>
            </div>
        </div>

        <div class="feedback">
            <h1>Let's See What Our Clients Say</h1>

            <div class="swiper customer-review">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <span class="review-header">
                            HUA HONG AUTO SUPPLIES <br> (KUALA LUMPUR) SDN.BHD
                        </span>

                        <span class="review-body">
                            “Greenstem's software streamlines operations, improving stock management and financial
                            reporting. It enhances productivity across sales, inventory, and accounts, with reliable
                            after-sales support for uninterrupted operations.“
                        </span>
                    </div>

                    <div class="swiper-slide">
                        <span class="review-header">
                            N.E.S OIL SEAL SDN.BHD
                        </span>

                        <span class="review-body">
                            “Since 2000, Greenstem Software efficiently manages our extensive inventory, streamlining
                            sales and facilitating comprehensive financial management. Highly recommend their reliable
                            and evolving software.“
                        </span>
                    </div>
                    <div class="swiper-slide">
                        <span class="review-header">
                            S.K. AUTO PARTS SDN.BHD
                        </span>

                        <span class="review-body">
                            “Highly recommend Greenstem Software! For two decades, their system efficiently manages our
                            sales, inventory, and accounts, saving time with reliable reporting for analysis, audit, and
                            tax submissions. Greenstem consistently upgrades to meet our evolving needs and embrace the
                            latest technology.“
                        </span>
                    </div>
                    <div class="swiper-slide">
                        <span class="review-header">
                            SINOTEK AUTOPARTS SDN BHD (MALAYSIA)
                        </span>

                        <span class="review-body">
                            “ Greenstem's software streamlines our operations, optimizing stock management and
                            financial reporting. It enhances productivity, saving time across sales, inventory,
                            and accounts, with reliable after-sales support for uninterrupted operations“
                        </span>
                    </div>
                    <div class="swiper-slide">
                        <span class="review-header">
                            SYARIKAT HAWK SOON HIN SDN.BHD
                        </span>

                        <span class="review-body">
                            “Since 2002, Greenstem's Greenplus Accounting system has ensured smooth sales, inventory,
                            and
                            accounting processes. It prevents stock issues, enhances productivity, and swiftly adapts to
                            government implementations like GST. Highly recommend for reliability and effectiveness.“
                        </span>
                    </div>
                    <div class="swiper-slide">
                        <span class="review-header">
                            S.J. AUTO PARTS SDN.BHD
                        </span>

                        <span class="review-body">
                            “Since 1996, Greenstem Software's crucial support and continuous upgrades enhance our
                            operations, aiding sales and accounts. Highly recommend for efficient stock management, cash
                            flow, and productivity gains.“
                        </span>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

    </div>

    <?php
    include('footer.php');
    ?>


    <script src="/source/script.js"></script>
</body>

</html>