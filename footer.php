
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
                    <li onclick="showDropdown(this)" id="productBtn" class="dbtn">Products
                        <ul class="nested-list" id="productCollapse">
                            <li><a href="/spare-parts-management.html">Spare Parts Management & Accounting System</a></li>
                            <li><a href="/workshop.html">Workshop Management System</a></li>
                        </ul>
                    </li>
                    <li><a href="/about-us.html"> About Us</a></li>
                    <li><a href="/career.php">Career</a></li>
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