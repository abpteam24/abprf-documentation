<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <section class="abrf-page" data-abrf-tab="#abrf_tax">
        <div class="abrf-page-head">
            <h2>🧾 Tax Configuration</h2>
        </div>
        <div class="abrf-divider"></div>
        <p class="abrf-lead">RentalForge adds the correct tax to your rental prices automatically. Tax follows the standard <strong>WooCommerce tax settings</strong> — you do not configure tax rules inside RentalForge itself.</p>
        <div class="abrf-tbl-wrap">
            <table class="abrf-table">
                <thead>
                    <tr><th>Scenario</th><th>How tax is handled</th></tr>
                </thead>
                <tbody>
                    <tr>
                        <th>WooCommerce Tax enabled</th>
                        <td>Tax is calculated and applied on every rental price based on your WooCommerce tax rates and the shipping/customer address.</td>
                    </tr>
                    <tr>
                        <th>WooCommerce Tax enabled + Tax display</th>
                        <td>Whether prices are shown including or excluding tax is controlled by WooCommerce → Settings → Tax → <strong>Display prices during cart and checkout</strong>.</td>
                    </tr>
                    <tr>
                        <th>WooCommerce Tax disabled</th>
                        <td>No tax is calculated or displayed — prices are final as configured.</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h4 class="abrf-h4">✅ How to set up tax</h4>
        <ol class="abrf-steps">
            <li>Go to <strong>WooCommerce → Settings → Tax</strong> and enable tax calculation.</li>
            <li>Add your tax rates for the countries / states you sell to.</li>
            <li>Choose whether prices are shown with or without tax.</li>
            <li>RentalForge now uses these same rates for all bookings automatically.</li>
        </ol>
    </section>
<?php
