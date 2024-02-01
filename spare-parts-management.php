<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="keywords" content="Accounting Software, Spare Parts System, Workshop System" />
    <meta name="description"
        content="An accounting software company in Malaysia. Specifically Designed for spare parts to improve efficiency and productivity." />
    <title>Spare Parts Management & Accounting System</title>
    <link rel="shortcut icon" type="image/x-icon" href="/pic/icon.webp" />

    <?php include("link.php"); ?>

    <!--Custom Css-->
    <link rel="stylesheet" href="/source/style.css">
    <link rel="stylesheet" href="/source/spare-part.css">
    <link rel="stylesheet" href="/source/device.css">
</head>

<body>
    <?php include("navigation.php");?>

    <div class="content container-fluid">
        <div class="blobWrapper bgEffect">
            <img src="/pic/product/blobWrapper.svg" alt="background effect" class="bg">
        </div>

        <div class="product-header">
            <h1>
                <span id="sPtext" data-text="Spare Parts Management & Accounting System"></span>
                <span class='console-underscore' id='console'>&#95;</span>
            </h1>
            <img src="/pic/product/Products.png" alt="Overview of product">
        </div>
        <div class="product-highlight">
            <h4 class="products-desc">
                Our system, tailored for spare parts companies, boosts efficiency with real-time inventory
                management, automated orders, and streamlined accounting. User-friendly and automated, it
                minimizes manual work, reduces errors, and optimizes cost control for a competitive advantage.
            </h4>

            <div class="highlight-icon">
                <div class="highlight-icon-element">
                    <img src="/pic/product/unmatchedSupport.svg" alt="icon" class="svg-icon1">
                    <p>Unmatched Support</p>
                </div>
                <div class="highlight-icon-element">
                    <img src="/pic/product/deviceAccessibility.svg" alt="icon" class="svg-icon2">
                    <p>Cross Device Accessibility</p>
                </div>
                <div class="highlight-icon-element">
                    <img src="/pic/product/barcodePrinting.svg" alt="icon" class="svg-icon3">
                    <p>Bar Code Printing</p>
                </div>
                <div class="highlight-icon-element">
                    <img src="/pic/product/inventoryManagement.svg" alt="icon" class="svg-icon4">
                    <p>Simplify Inventory Management</p>
                </div>
            </div>

        </div>

        <div class="product-features">
            <div class="features-container">
                <div class="feature-img">
                    <img src="/pic/product/feature-bg.jpg" alt="">
                    <div class="features color1 feature1 left">Smartphone Check Stock <br> & Send Sales Order</div>
                    <div class="features color2 feature2 right">Document Entry/ Amend/ <br> Delete Tracking</div>
                    <div class="features color2 feature3 left">Data Migration from Other System</div>
                    <div class="features color1 feature4 right">Provide Sufficient <br> Information for Decision
                        <br> Making
                    </div>

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
                        onclick="productPreviewList(this,'SparePartsInvoiceEntry')">
                        <a>Invoice Entry</a>
                    </li>
                    <li class="list-group-item" onclick="productPreviewList(this,'SparePartsTransactionDetail')">
                        <a>Transaction Detail Analysis</a>
                    </li>
                    <li class="list-group-item" onclick="productPreviewList(this,'SparePartGoodsReceived')">
                        <a>Goods
                            Received</a>
                    </li>
                    <li class="list-group-item" onclick="productPreviewList(this,'SparePartSalesOrder')">
                        <a>Sales Order</a>
                    </li>
                    <li class="list-group-item" onclick="productPreviewList(this,'SparePartsStockEnquiry')">
                        <a>Stock
                            Enquiry</a>
                    </li>
                </ul>

                <div class="product-preview-img active default" id="SparePartsInvoiceEntry">
                    <img src="/pic/product/Invoice-entry.png" alt="Invoice-entry" class="gallery"
                        data-fancybox="sparePart" data-caption="Invoice Entry
                        <ul>
                            <li>Billing to customer</li>
                            <li>Show issue personal, date and timeInformation from quotation, sales order or delivery order</li>
                            <li>Display stock information</li>
                            <li>Customer Ledger can view over here</li>
                        </ul>">
                </div>
                <div class="product-preview-img" id="SparePartsTransactionDetail">
                    <img src="/pic/product/transaction_detail.png" alt="transaction_detail" class="gallery"
                        data-fancybox="sparePart" data-caption="Transaction Detail Analysis
                        <ul>
                            <li>Stock Quantity and Cost</li>
                            <li>Sales Order and Purchase Ordre back order quantity</li>
                            <li>Detail of transaction to display</li>
                            <li>Total In/Out quantity for the selected period</li>
                            <li>Stock price list - for user with more than 6 types of selling price</li>
                        </ul>">
                </div>
                <div class="product-preview-img" id="SparePartGoodsReceived">
                    <img src="/pic/product/goods_received.png" alt="goods_received" class="gallery"
                        data-fancybox="sparePart" data-caption="Goods Received
                        <ul>
                            <li>Stock information with latest goods received unit cost, GST inclusive/exclusive, date and quantity received</li>
                            <li>Supplier cost detail with date, quantity, unit cost, currency and GST</li>
                            <li>Shows stock movement for the item, refer 'Transaction Detail'</li>
                            <li>Excel file import / export</li>
                        </ul>">
                </div>
                <div class="product-preview-img" id="SparePartSalesOrder">
                    <img src="/pic/product/sales_order.jpg" alt="sales_order" class="gallery" data-fancybox="sparePart"
                        data-caption="Sales Order
                        <ul>
                            <li>Check stock information, price, picture , online quantity</li>
                            <li>Sales history with date, customer name, quantity, unit price</li>
                            <li>Issue sales order off line, send to office when internet available</li>
                            <li>Print sales order in office to pick up</li>
                            <li>Issue D/O or Invoice in office by extract data from sales order</li>
                        </ul>">
                </div>
                <div class="product-preview-img" id="SparePartsStockEnquiry">
                    <img src="/pic/product/stock_enquiry.png" alt="stock_enquiry" class="gallery"
                        data-fancybox="sparePart" data-caption="Stock Enquiry
                        <ul>
                            <li>Show interchange, superseded number, other car model using this stock</li>
                            <li>Pictures of the stock</li>
                            <li>Show stock quantity, selling price, brand</li>
                            <li>Multiple button for more information</li>
                            <li>Search item with combination of stock code, description, brand, model, oem no, interchangeno, etc.</li>
                        </ul>">
                </div>
            </div>

        </div>
    </div>

    <?php include("footer.php");?>

    <script src="/source/script.js"></script>

</body>

</html>