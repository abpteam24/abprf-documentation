<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <section class="abrf-page" data-abrf-tab="#abrf_booking_pdf">
        <div class="abrf-page-head">
            <h2>📑 RentalForge - Order Lists PDF Configuration <span class="abrf-protag">pro</span></h2>
        </div>
        <div class="abrf-divider"></div>
        <p class="abrf-lead">These settings control which columns and values appear inside the order list PDF document. Turn a column <strong>ON</strong> to include it in the PDF, or <strong>OFF</strong> to hide it.</p>
        <div class="abrf-tbl-wrap">
            <table class="abrf-table">
                <thead><tr><th>Column</th><th>What it controls</th></tr></thead>
                <tbody>
                <tr><th>Book Status</th><td>Shows whether each booking is active or cancelled. By default, <strong>ON</strong></td></tr>
                <tr><th>Order Status</th><td>Shows the current WooCommerce order status (e.g. processing, completed). By default, <strong>ON</strong></td></tr>
                <tr><th>Payment Method</th><td>Shows the payment method used for the order. By default, <strong>ON</strong></td></tr>
                </tbody>
            </table>
        </div>
        <ol class="abrf-steps">
            <li>Toggle the columns you want to display in the generated PDF.</li>
            <li>Save the settings and use the "Order Lists PDF" button in the Orders page to download the document.</li>
        </ol>
    </section>
<?php
