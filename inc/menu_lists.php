<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <section class="abrf-page" data-abrf-tab="#abrf_menu_lists">
        <div class="abrf-page-head">
            <h2>🧭 RentalForge - Menu</h2>
        </div>
        <div class="abrf-divider"></div>
        <p class="abrf-lead">After installing RentalForge, you will get a dedicated admin dashboard menu that centralizes all rental management features in one place. You can customize the menu label and icon from the Icon &amp; Label Configuration settings. All plugin modules are organized into structured tabs under this main menu, allowing you to manage bookings, properties, pricing, availability, inventory, orders, and system settings from a clean and user-friendly interface.</p>
        <figure class="abrf-imgcard">
            <img src="<?php echo esc_url( ABRF_DOC_URL . '/' ); ?>image/menu_lists.png" alt="RentalForge Menu Overview">
            <figcaption>RentalForge Admin Menu Overview</figcaption>
        </figure>
        <h4 class="abrf-h4">📋 Menu Items</h4>
        <ul class="abrf-list">
            <li><strong>🪜 Top Quick Menu</strong> — Fast access to common actions</li>
            <li><strong>🔨 Post Lists</strong> — Manage all rental posts</li>
            <li><strong>🏠 Properties</strong> — Manage rental properties and inventory</li>
            <li><strong>📋 Orders</strong> — View and manage all booking orders</li>
            <li><strong>📦 Add Order</strong> <span class="abrf-protag">pro</span> — Manually create orders from admin panel</li>
            <li><strong>🌐 Global Data</strong> — Configure global settings and shared data</li>
            <li><strong>⚙️ Configuration</strong> — Manage all plugin configurations and settings</li>
            <li><strong>🛡️ Status</strong> — System status and health information</li>
            <li><strong>📚 Documentation</strong> — Access plugin documentation and guides</li>
        </ul>
    </section>
<?php
