<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <section class="abrf-page" data-abrf-tab="#abrf_client_form_global">
        <div class="abrf-page-head">
            <h2>📋 RentalForge – Global Client Form Configuration</h2>
        </div>
        <div class="abrf-divider"></div>
        <p class="abrf-lead">The Client Form collects customer information during booking. Defining it globally keeps the same form fields on every rental item, and you can still customize the form per item when needed.</p>

        <figure class="abrf-imgcard">
            <img src="<?php echo esc_url( ABRF_DOC_URL . '/' ); ?>image/client_form.png" alt="Client form">
            <figcaption>Global Client Form</figcaption>
        </figure>

        <div class="abrf-tbl-wrap">
            <table class="abrf-table">
                <thead>
                    <tr><th>Field / Option</th><th>What it does</th></tr>
                </thead>
                <tbody>
                    <tr><th>Form Title</th><td>Give the form a label such as "Customer Information".</td></tr>
                    <tr><th>Field Label</th><td>Enter the label shown to customers, e.g. "Full Name", "Email", "Phone Number".</td></tr>
                    <tr><th>Field Type</th><td>Select the input type (text, email, number, date, select, etc.) for each field.</td></tr>
                    <tr><th>Required ?</th><td>Turn <strong>ON</strong> to force the customer to fill the field before booking.</td></tr>
                </tbody>
            </table>
        </div>

        <ol class="abrf-steps">
            <li>Add the fields you need for your bookings.</li>
            <li>Save the settings. The form is displayed on the booking page of every item that inherits the global form.</li>
        </ol>
    </section>
<?php
