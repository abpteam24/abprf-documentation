<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <section class="abrf-page" data-abrf-tab="#abrf_status">
        <div class="abrf-page-head">
            <h2>🛡️ Status & Information</h2>
        </div>
        <div class="abrf-divider"></div>
        <p class="abrf-lead">This section provides essential system information and setup status for RentalForge.</p>
        <ol class="abrf-steps">
            <li><strong>RentalForge Version :</strong> Displays the currently installed version of RentalForge. Keeping the plugin updated ensures access to the latest features, performance improvements, and security updates.</li>
            <li><strong>WordPress Version :</strong> Shows the current WordPress version running on your website. RentalForge is regularly tested with supported WordPress releases for maximum compatibility.</li>
            <li><strong>PHP Version :</strong> Displays the PHP version installed on your server. Using a supported and up-to-date PHP version improves performance, stability, and security.</li>
            <li><strong>Woocommerce Plugin :</strong> RentalForge is fully integrated with WooCommerce for booking, cart, checkout, and order management. If WooCommerce is not installed or activated, use the provided button to install and activate it.</li>
            <li><strong>Woocommerce Version :</strong> Displays the currently installed WooCommerce version. This helps ensure compatibility between RentalForge and WooCommerce features.</li>
            <li><strong>Email Address :</strong> Shows the administrator email address configured for your website. Important booking notifications and system-related communications may be sent to this address.</li>
            <li><strong>ABP PDF Support Tools :</strong> <span class="abrf-protag">pro</span> Enables PDF generation and download features within RentalForge. Install and activate the ABP PDF Support Tools addon if you want to generate invoices, booking documents, or downloadable PDF files.</li>
            <li><strong>RentalForge Booking Page :</strong> Displays the status of the booking page used by RentalForge. You can automatically create the page or manually place the booking shortcode on any page.</li>
            <li><strong>RentalForge Post List Page :</strong> Displays the status of the rental item listing page. This page is used to showcase available rental products and can be generated automatically or configured manually.</li>
            <li><strong>Property List Page :</strong> Displays the page assigned to show rental properties, vehicles, equipment, or other rentable items available on your website.</li>
            <li><strong>Gallery Page :</strong> Displays the page used to showcase rental item galleries, property images, and other visual content for customers.</li>
            <li><strong>Number of Post :</strong> Shows the total number of rental posts, listings, or items currently available in your RentalForge system.</li>
            <li><strong>Number of Property :</strong> Shows the total number of properties, assets, vehicles, or rentable resources managed by RentalForge.</li>
            <li><strong>Dummy Import :</strong> Import sample rental data to quickly explore RentalForge features and configurations. This is useful for testing, demonstrations, and initial setup.</li>
        </ol>
        <div class="abrf-alert abrf-warn">💡 <strong>Note:</strong> WooCommerce must be installed and activated for RentalForge to function properly. All other tools and pages are optional and can be configured based on your business requirements.</div>
        <figure class="abrf-imgcard">
            <img src="<?php echo esc_url( ABRF_DOC_URL . '/' ); ?>image/status.png" alt="Tools Management & Information">
            <figcaption>Status & information overview screen</figcaption>
        </figure>
    </section>
<?php