<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <section class="abrf-page" data-abrf-tab="#abrf_property_price">
        <div class="abrf-page-head">
            <h2>💰 Properties &amp; Pricing</h2>
        </div>
        <div class="abrf-divider"></div>
        <p class="abrf-lead">This is where you create your rental items and define their prices, stock and rental rules. Everything you set here is saved in the RentalForge property table and is used by the frontend booking form, cart and order creation.</p>
        <h4 class="abrf-h4">🏠 Managing properties</h4>
        <div class="abrf-tbl-wrap">
            <table class="abrf-table">
                <thead>
                    <tr><th>Action</th><th>Description</th></tr>
                </thead>
                <tbody>
                    <tr>
                        <th>➕ Add New Property</th>
                        <td>Create a rental property (item) and configure its pricing, availability and rules.</td>
                    </tr>
                    <tr>
                        <th>✍️ Edit / 🔁 Clone</th>
                        <td>Edit a property or duplicate it with all pricing and settings to create a similar listing quickly.</td>
                    </tr>
                    <tr>
                        <th>❌ Delete</th>
                        <td>Remove a property when it is no longer needed.</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h4 class="abrf-h4">🔢 Pricing &amp; stock per property</h4>
        <div class="abrf-tbl-wrap">
            <table class="abrf-table">
                <thead>
                    <tr><th>Field / Option</th><th>What it does</th></tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Rent Rules</th>
                        <td>Choose which rental periods the property supports — hourly, daily, multi-day, monthly and multi-month. Each rule can have its own price.</td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td>The base rate for the selected rental rule. Extra periods (e.g. a daily rate for a multi-day rule) can also be defined.</td>
                    </tr>
                    <tr>
                        <th>Quantity</th>
                        <td>Total number of items available for booking.</td>
                    </tr>
                    <tr>
                        <th>Reserve</th>
                        <td>Items that are held back and never sold online (e.g. for walk-in customers).</td>
                    </tr>
                    <tr>
                        <th>Min / Max Quantity</th>
                        <td>How few or how many items a customer can add to one order.</td>
                    </tr>
                    <tr>
                        <th>Min / Max Duration</th>
                        <td>The shortest and longest rental period a customer may book.</td>
                    </tr>
                    <tr>
                        <th>Deposit / Advanced</th>
                        <td>An upfront amount (fixed or percentage) that is charged when the booking starts.</td>
                    </tr>
                    <tr>
                        <th>Rent Continue</th>
                        <td>Turn <strong>OFF</strong> to temporarily close the property for new bookings.</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h4 class="abrf-h4">💡 Pro tips</h4>
        <ul class="abrf-list">
            <li><strong>👉 Set Seasonal / Early Bird discounts</strong> and <strong>Location Wise Pricing</strong> from this same page. <span class="abrf-protag">pro</span></li>
            <li><strong>👉 The property list</strong> shows you the minimum price of every item so customers see the cheapest rate at a glance.</li>
            <li><strong>👉 Use Clone</strong> to copy a property with a similar price structure — then change only the differences.</li>
        </ul>
        <figure class="abrf-imgcard">
            <img src="<?php echo esc_url( ABRF_DOC_URL . '/' ); ?>image/property_price.png" alt="Properties and Price Configuration Overview">
            <figcaption>Properties and Price Configuration Overview</figcaption>
        </figure>
    </section>
<?php
