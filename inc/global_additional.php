<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <section class="abrf-page" data-abrf-tab="#abrf_additional_global">
        <div class="abrf-page-head">
            <h2>💰 RentalForge – Global Additional Services Configuration</h2>
        </div>
        <div class="abrf-divider"></div>
        <p class="abrf-lead">Additional services are optional add-ons (e.g. insurance, delivery, cleaning) that customers can select during booking. Creating them globally lets you reuse the same services on every rental item.</p>

        <figure class="abrf-imgcard">
            <img src="<?php echo esc_url( ABRF_DOC_URL . '/' ); ?>image/additional.png" alt="Additional services">
            <figcaption>Global Additional Services</figcaption>
        </figure>

        <div class="abrf-tbl-wrap">
            <table class="abrf-table">
                <thead>
                    <tr><th>Field / Option</th><th>What it does</th></tr>
                </thead>
                <tbody>
                    <tr><th>Service Title</th><td>Give a clear name to the additional service, e.g. "Standard Package".</td></tr>
                    <tr><th>Price</th><td>Set the price of the service. You can define fixed prices or a price range.</td></tr>
                    <tr><th>Description</th><td>Optionally describe what the service includes so customers understand its value.</td></tr>
                </tbody>
            </table>
        </div>

        <ol class="abrf-steps">
            <li>Click <strong>Add Service</strong> and fill in the title and price.</li>
            <li>Save the settings. The service becomes available on the booking form of items that use the global additional services.</li>
        </ol>
    </section>
<?php
