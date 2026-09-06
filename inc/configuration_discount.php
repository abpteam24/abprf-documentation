<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <section class="abrf-page" data-abrf-tab="#abrf_discount">
        <div class="abrf-page-head">
            <h2>✂️ RentalForge - Discount Configuration <span class="abrf-protag">pro</span></h2>
        </div>
        <div class="abrf-divider"></div>
        <p class="abrf-lead">Discounts let you reward your customers and react to demand automatically. RentalForge Pro offers two discount rules — <strong>Seasonal Discount</strong> and <strong>Early Bird Discount</strong> — plus the advanced <strong>Location Wise Pricing &amp; Quantity</strong> feature. Discounts can be set globally and then overridden for a single property.</p>
        <h4 class="abrf-h4">🌤️ Seasonal Discount</h4>
        <p class="abrf-p">Apply a percentage discount during certain dates of the year — for example a lower rate in low season or a special price during a local festival.</p>
        <div class="abrf-tbl-wrap">
            <table class="abrf-table">
                <thead><tr><th>Field / Option</th><th>What it does</th></tr></thead>
                <tbody>
                <tr><th>Seasonal Discount ?</th><td>Turn <strong>ON</strong> to enable the seasonal rules for this property (or globally). By default, <strong>OFF</strong></td></tr>
                <tr><th>Start Date</th><td>Pick the first day of the discounted period.</td></tr>
                <tr><th>End Date</th><td>Pick the last day of the discounted period.</td></tr>
                <tr><th>Discount (%)</th><td>Percentage to deduct from the normal price, e.g. <code class="abrf-code">10</code> means 10% off. Click <strong>Add New Seasonal date Range</strong> to create more than one period.</td></tr>
                </tbody>
            </table>
        </div>
        <h4 class="abrf-h4">🐦 Early Bird Discount</h4>
        <p class="abrf-p">Reward customers who book before a certain date. Customers booking inside the Early Bird window automatically get the percentage you define.</p>
        <div class="abrf-tbl-wrap">
            <table class="abrf-table">
                <thead><tr><th>Field / Option</th><th>What it does</th></tr></thead>
                <tbody>
                <tr><th>Early Bird Discount ?</th><td>Turn <strong>ON</strong> to enable the early bird rules for this property (or globally). By default, <strong>OFF</strong></td></tr>
                <tr><th>Start Date / End Date</th><td>Define the booking window during which the discount applies.</td></tr>
                <tr><th>Discount (%)</th><td>Percentage deducted from the rental price for early bookings, e.g. <code class="abrf-code">15</code>.</td></tr>
                </tbody>
            </table>
        </div>
        <h4 class="abrf-h4">📍 Location Wise Pricing &amp; Quantity</h4>
        <p class="abrf-p">When a property has more than one location, you can set a different price, stock quantity and deposit for each location. This is perfect when one branch charges more or has fewer items than another.</p>
        <div class="abrf-tbl-wrap">
            <table class="abrf-table">
                <thead><tr><th>Field / Option</th><th>What it does</th></tr></thead>
                <tbody>
                <tr><th>Location Wise Pricing &amp; Quantity ?</th><td>Turn <strong>ON</strong> to reveal one settings block per location.</td></tr>
                <tr><th>Per-location Price</th><td>Enter the price for each rental rule (hourly, daily, multi-day, monthly, multi-month) separately for every location.</td></tr>
                <tr><th>Quantity / Reserve</th><td>Set the total available stock and how many items are kept as reserve for that location.</td></tr>
                <tr><th>Min / Max Quantity</th><td>Limit how few or how many items a customer can book per order.</td></tr>
                <tr><th>Deposit</th><td>Choose a deposit type and value (fixed amount or percentage) that is charged for bookings from that location.</td></tr>
                <tr><th>Seasonal / Early Bird per location</th><td>Each location can also have its own seasonal and early bird rules, so discounts differ from one branch to another.</td></tr>
                </tbody>
            </table>
        </div>
        <h4 class="abrf-h4">💡 Where to configure</h4>
        <ul class="abrf-list">
            <li><strong>👉 Global level:</strong> RentalForge → Global Data → ✂️ Global Discount (applies to every item).</li>
            <li><strong>👉 Property level:</strong> Edit a property → <strong>Discount</strong> tab (overrides the global value for that item).</li>
            <li><strong>👉 Location level:</strong> On the property price settings, enable <strong>Location Wise Pricing &amp; Quantity</strong> to manage each location separately.</li>
        </ul>
        <ol class="abrf-steps">
            <li>Turn the discount type you want <strong>ON</strong>.</li>
            <li>Set the date range and the discount percentage.</li>
            <li>Click <strong>Save</strong> — customers now see the discounted price automatically on the booking form.</li>
        </ol>
    </section>
<?php