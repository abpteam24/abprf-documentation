<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <section class="abrf-page" data-abrf-tab="#abrf_tc_global">
        <div class="abrf-page-head">
            <h2>🤝 RentalForge – Global Terms &amp; Conditions Configuration</h2>
        </div>
        <div class="abrf-divider"></div>
        <p class="abrf-lead">Terms &amp; Conditions explain your booking rules to customers. The global text below is applied to every rental item automatically unless an item defines its own.</p>

        <figure class="abrf-imgcard">
            <img src="<?php echo esc_url( ABRF_DOC_URL . '/' ); ?>image/terms_condition.png" alt="Terms and condition">
            <figcaption>Global Terms &amp; Conditions</figcaption>
        </figure>

        <div class="abrf-tbl-wrap">
            <table class="abrf-table">
                <thead>
                    <tr><th>Field / Option</th><th>What it does</th></tr>
                </thead>
                <tbody>
                    <tr><th>Terms &amp; Conditions Title</th><td>Give the terms a heading, e.g. "Booking Terms".</td></tr>
                    <tr><th>Terms &amp; Conditions Text</th><td>Write the actual terms. Customers are expected to accept them to confirm the booking.</td></tr>
                </tbody>
            </table>
        </div>

        <ol class="abrf-steps">
            <li>Enter the title and the full conditions text.</li>
            <li>Save the settings. A tick box with this text appears on the booking form of items that use the global terms.</li>
        </ol>
    </section>
<?php
