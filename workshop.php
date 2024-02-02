<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="keywords" content="Accounting Software, Spare Parts System, Workshop System" />
    <meta name="description"
        content="An accounting software company in Malaysia. Specifically Designed for spare parts to improve efficiency and productivity." />
    <title>Workshop Management System</title>
    <link rel="shortcut icon" type="image/x-icon" href="/pic/icon.webp" />

    <?php include("link.php");?>

    <!--Custom Css-->
    <link rel="stylesheet" href="/source/style.css">
    <link rel="stylesheet" href="/source/spare-part.css">
    <link rel="stylesheet" href="/source/device.css">
</head>

<body>
    <?php include("navigation.php");?>

    <div class="content container-fluid" id="workshopSystem">
        <div class="blobWrapper bgEffect">
            <img src="/pic/product/workshop blobWrapper.svg" alt="background effect" class="bg">
        </div>

        <div class="product-header">
            <h1>
                <span id="text" data-text="Workshop Management System"></span>
                <span class='console-underscore' id='console'>&#95;</span>
            </h1>
            <img src="/pic/product/Group 53 (1).svg" alt="Overview of product">
        </div>

        <div class="product-highlight">
            <h4 class="products-desc">
                Our Workshop Management System, designed for workshops, optimizes efficiency with features like
                job scheduling, inventory tracking, and automated billing. The user-friendly interface reduces
                manual efforts and errors, making it an essential asset for streamlined processes and top-notch
                service delivery
            </h4>

            <div class="highlight-icon">
                <div class="highlight-icon-element">
                    <img src="/pic/product/workshop-unmatched-support.svg" alt="icon" class="svg-icon1">
                    <p>Unmatched Support</p>
                </div>
                <div class="highlight-icon-element">
                    <img src="/pic/product/workshop-device.svg" alt="icon" class="svg-icon2">
                    <p>Cross Device Accessibility</p>
                </div>
                <div class="highlight-icon-element">
                    <img src="/pic/product/workshop-print.svg" alt="icon" class="svg-icon3">
                    <p>Bar Code Printing</p>
                </div>
                <div class="highlight-icon-element">
                    <img src="/pic/product/workshop-inventory.svg" alt="icon" class="svg-icon4">
                    <p>Simplify Inventory Management</p>
                </div>
            </div>
        </div>


        <div class="product-features">
            <div class="features-container">
                <div class="feature-img">
                    <img src="/pic/product/feature-bg.jpg" alt="">
                    <div class="features color2 feature1 left">Keep Track of Service <br> Record for Each Vehicle</div>
                    <div class="features color1 feature2 right">Reminder Letter for Service</div>
                    <div class="features color1 feature3 left">Daily Profit on Each Bill </div>
                    <div class="features color2 feature4 right">Mechanics' Commission <br> Calculated on Sales <br>
                        Amount</div>

                </div>

                <div class="features-desc">
                    <h1 class="features-title">Highlight Features</h1>
                    <p>Experience unparalleled efficiency with Greenstem Software – transforming the way we
                        manage operations, boost productivity, and drive success.
                    </p>
                </div>
            </div>
        </div>

        <div class="product-preview">
            <h2>System Preview</h2>

            <div class="product-preview-container">
                <ul class="list-group product-preview-content">
                    <li class="list-group-item active default"
                        onclick="productPreviewList(this,'WorkshopInvoiceEntry')">
                        <a>Invoice Entry</a>
                    </li>
                    <li class="list-group-item" onclick="productPreviewList(this,'WorkshopVehicleServiceRecord')">
                        <a>Vehicle Service Record</a>
                    </li>
                    <li class="list-group-item" onclick="productPreviewList(this,'WorkshopVehicleRegister')">
                        <a>Vehicle Register</a>
                    </li>
                    <li class="list-group-item" onclick="productPreviewList(this,'WorkshopSampleInvoice')">
                        <a>Sample Invoice</a>
                    </li>
                </ul>

                <div class="product-preview-img active default" id="WorkshopInvoiceEntry">
                    <img src="/pic/product/workshop_invoice_entry.webp" alt="Invoice-entry" class="gallery"
                        data-fancybox="workShop" data-caption="Invoice Entry
                        <ul>
                            <li>Billing to customer, with car registration number and model</li>
                            <li>Option to key in current mileage and next service mileage and date</li>
                            <li>Show mechanic in charge, issue personal, date and time</li>
                            <li>Display stock information</li>
                        </ul>">
                </div>
                <div class="product-preview-img" id="WorkshopVehicleServiceRecord">
                    <img src="/pic/product/vehicle_service_history.jpg" alt="vehicle_service_record" class="gallery"
                        data-fancybox="workShop" data-caption="Vehicle Service Record
                        <ul>
                            <li>Keep track of service records by car number</li>
                            <li>Also show next service mileage</li>
                            <li>Range by date and view by document number</li>
                        </ul>">
                </div>
                <div class="product-preview-img" id="WorkshopVehicleRegister">
                    <img src="/pic/product/vehicle_register.jpg" alt="vehicle_register" class="gallery"
                        data-fancybox="workShop" data-caption="Vehicle Service Record
                        <ul>
                            <li>Setup registration for each vehicle</li>
                            <li>Record of vehicle number, model, engine number and chasis number</li>
                            <li>Also show next service mileage for this vehicle</li>
                            <li>Any remarks made for this vehicle, can be seen here</li>
                        </ul>">
                </div>
                <div class="product-preview-img" id="WorkshopSampleInvoice">
                    <img src="/pic/product/workshop_sample_invoice.jpeg" alt="sample invoice" class="gallery"
                        data-fancybox="workShop" data-caption="Sample Invoice">
                </div>
            </div>

        </div>
    </div>

    <?php include("footer.php");?>

    <script src="/source/script.js"></script>
</body>

</html>