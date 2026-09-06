<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <section class="abrf-page" data-abrf-tab="#abrf_properties">
        <div class="abrf-page-head">
            <h2>🏠 Properties List</h2>
        </div>
        <div class="abrf-divider"></div>
        <p class="abrf-lead">The Properties List section allows you to manage all rental properties in a centralized dashboard. From here, you can create, edit, clone, delete, filter, and organize properties efficiently across multiple posts.</p>

        <h4 class="abrf-h4">📋 Key Features of Property Management</h4>
        <ul class="abrf-list">
            <li><strong>➕ Add New Property:</strong> Create a new property with full configuration including pricing rules, availability calendar, rental conditions, and booking settings.</li>
            <li><strong>✍️ Edit Property:</strong> Update property information such as title, description, pricing plans, gallery, rules, and availability settings.</li>
            <li><strong>🔁 Clone Property:</strong> Duplicate an existing property with all configurations to quickly create similar listings without manual setup.</li>
            <li><strong>❌ Delete Property:</strong> Permanently remove a property from the system when it is no longer required.</li>
            <li><strong>🔄 Transfer Property:</strong> Move a property from one post to another post without losing any configuration, pricing, or booking data.</li>
        </ul>

        <h4 class="abrf-h4">🔎 Advanced Filtering & Management</h4>
        <ul class="abrf-list">
            <li>👉 Filter properties by <strong>Post</strong> to view only properties assigned to a specific post.</li>
            <li>👉 Search properties using keyword-based search for quick access.</li>
            <li>👉 View property status, availability, and associated post mapping in the listing table.</li>
            <li>👉 Bulk actions support (delete, move, update status).</li>
        </ul>

        <h4 class="abrf-h4">🧭 Post-wise Property Mapping</h4>
        <ul class="abrf-list abrf-list--dot">
            <li>Each property is assigned to a specific post, allowing structured organization of rental items.</li>
            <li>You can easily reassign properties to another post using the transfer option.</li>
            <li>This helps manage multi-category rental systems such as vehicles, equipment, or real estate separately.</li>
        </ul>

        <h4 class="abrf-h4">📄 Pagination & Performance</h4>
        <ul class="abrf-list abrf-list--dot">
            <li>Property list supports pagination for better performance and usability.</li>
            <li>Large datasets are automatically split into multiple pages for faster loading.</li>
            <li>Optimized query system ensures smooth admin experience even with thousands of properties.</li>
        </ul>

        <h4 class="abrf-h4">🚀 Benefits</h4>
        <ul class="abrf-list abrf-list--dot">
            <li>Centralized property management system</li>
            <li>Faster workflow with clone and transfer features</li>
            <li>Better organization using post-based grouping</li>
            <li>Scalable system for large rental marketplaces</li>
            <li>Optimized performance with pagination support</li>
        </ul>

        <figure class="abrf-imgcard">
            <img src="<?php echo esc_url( ABRF_DOC_URL . '/' ); ?>image/property_list.png" alt="RentalForge Property List Overview">
            <figcaption>RentalForge Property List Overview</figcaption>
        </figure>
    </section>
<?php
