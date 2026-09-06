<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <section class="abrf-page" data-abrf-tab="#abrf_rental_forge">
        <div class="abrf-page-head">
            <h2>🛠️ RentalForge Configuration</h2>
        </div>
        <div class="abrf-divider"></div>
        <p class="abrf-lead">Configure the core settings of RentalForge from this section. These global options control dashboard labels, menu appearance, URLs, icons, and booking behavior across the entire plugin.</p>
        <div class="abrf-tbl-wrap">
            <table class="abrf-table">
                <thead><tr><th>Field / Option</th><th>What it does</th></tr></thead>
                <tbody>
                <tr><th>Booked Status</th><td>Select the order status at which a rental item, seat, or resource will be considered booked and its availability will be reduced accordingly.</td></tr>
                <tr><th>Label</th><td>Customize the main RentalForge menu label displayed in the WordPress admin dashboard to match your business terminology.</td></tr>
                <tr><th>Slug</th><td>Define a custom URL slug for RentalForge pages. After updating the slug, refresh your permalinks by navigating to <strong>Settings → Permalinks</strong> and clicking the <strong>Save Changes</strong> button.</td></tr>
                <tr><th>Dashboard Menu Icon</th><td>Choose a custom Dashicon for the RentalForge dashboard menu. Visit the Dashicons Library, copy your preferred icon class, and paste it here to update the menu icon.</td></tr>
                <tr><th>RentalForge Icon</th><td>Upload or select a custom icon to represent RentalForge throughout the plugin interface and related sections.</td></tr>
                <tr><th>Category Label</th><td>Customize the category label displayed within the dashboard menu and plugin interface to better fit your rental business structure.</td></tr>
                <tr><th>Category Slug</th><td>Set a custom URL slug for categories. After making changes, refresh your permalinks by navigating to <strong>Settings → Permalinks</strong> and clicking the <strong>Save Changes</strong> button.</td></tr>
                </tbody>
            </table>
        </div>
        <figure class="abrf-imgcard">
            <img src="<?php echo esc_url( ABRF_DOC_URL . '/' ); ?>image/configuration_rental_forge.png" alt="RentalForge configuration screen">
            <figcaption>RentalForge core configuration screen</figcaption>
        </figure>
    </section>
<?php
