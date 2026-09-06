<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <section class="abrf-page" data-abrf-tab="#abrf_create_order">
        <div class="abrf-page-head">
            <h2>➕ Add Order From Dashboard</h2>
        </div>
        <div class="abrf-divider"></div>
        <p class="abrf-lead">The Add Order feature allows administrators to create rental orders directly from the dashboard without requiring customers to complete the checkout process. This is ideal for phone bookings, walk-in customers, offline reservations, and custom rental arrangements.</p>

        <p class="abrf-p">Using the same booking experience available on the frontend, administrators can easily select rental items, choose start and end dates and times, configure booking details, and generate orders within a few clicks.</p>

        <div class="abrf-alert abrf-note">💡 With this feature you can create and manage orders without leaving the administration dashboard, giving you full control over the booking process.</div>

        <ul class="abrf-list">
            <li>Create rental orders directly from the admin dashboard.</li>
            <li>No online payment is required to create an order.</li>
            <li>Select any available rental item or listing with ease.</li>
            <li>Use the same date, time, and availability selection system available on the frontend.</li>
            <li>Add custom customer information, including name, email, phone number, and billing details.</li>
            <li>Send booking notifications to any custom email address during order creation.</li>
            <li>Perfect for manual bookings, corporate reservations, and offline rental management.</li>
            <li>Quickly create and manage orders without leaving the dashboard.</li>
        </ul>

        <p class="abrf-p">This feature provides complete flexibility for rental businesses, allowing administrators to efficiently manage both online and offline bookings from a single centralized dashboard.</p>

        <figure class="abrf-imgcard">
            <img src="<?php echo esc_url( ABRF_DOC_URL . '/' ); ?>image/add_order.png" alt="RentalForge Add Order Dashboard">
            <figcaption>RentalForge Add Order Dashboard</figcaption>
        </figure>
    </section>
<?php
