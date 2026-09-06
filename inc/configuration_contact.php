<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <section class="abrf-page" data-abrf-tab="#abrf_contact">
        <div class="abrf-page-head">
            <h2>☎️ Contact Information Configuration</h2>
        </div>
        <div class="abrf-divider"></div>
        <p class="abrf-lead">The Contact section stores your business details once, in one place. These values are then used automatically in the PDF documents, billing information and e-mails — enter them once and they follow everywhere.</p>
        <div class="abrf-tbl-wrap">
            <table class="abrf-table">
                <thead><tr><th>Field / Option</th><th>What it does</th></tr></thead>
                <tbody>
                <tr><th>Company Name</th><td>The name of your business as it should appear on documents.</td></tr>
                <tr><th>Address</th><td>The full street address of your business.</td></tr>
                <tr><th>Contact Number</th><td>The phone number customers can call.</td></tr>
                <tr><th>E-mail</th><td>The business e-mail address used on documents and printed tickets.</td></tr>
                </tbody>
            </table>
        </div>
        <h4 class="abrf-h4">✅ Where this information is used</h4>
        <ul class="abrf-list">
            <li><strong>👉 PDF documents and tickets:</strong> shown on generated PDF documents and tickets <span class="abrf-protag">pro</span>.</li>
            <li><strong>👉 Billing information:</strong> used in the billing information section of bookings.</li>
            <li><strong>👉 E-mail sender details:</strong> used as the sender details for the booking e-mails.</li>
        </ul>
    </section>
<?php