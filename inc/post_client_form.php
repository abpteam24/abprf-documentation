<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <section class="abrf-page" data-abrf-tab="#abrf_client_form">
        <div class="abrf-page-head">
            <h2>🧾 Client Forms Configuration</h2>
        </div>
        <div class="abrf-divider"></div>
        <p class="abrf-lead">The Client Forms Configuration system allows you to manage and customize the forms used to collect information from clients during the booking or rental process. Like Additional Services, this feature supports both global and post-level configuration for maximum flexibility.</p>
        <h4 class="abrf-h4">🌍 Global Client Forms</h4>
        <p class="abrf-p">From the Global Configuration panel, you can create and manage a standard set of client form fields that will be used across all posts.</p>
        <ul class="abrf-list">
            <li><strong>👉</strong> Define global form fields (e.g. Name, Email, Phone, Address, ID number, etc.)</li>
            <li><strong>👉</strong> Enable or disable specific fields globally</li>
            <li><strong>👉</strong> Maintain a consistent form structure for all properties</li>
        </ul>
        <h4 class="abrf-h4">🏠 Custom Post-Level Forms</h4>
        <p class="abrf-p">Each individual post can also have its own custom client form configuration.</p>
        <ul class="abrf-list">
            <li><strong>👉</strong> Import form fields from global configuration</li>
            <li><strong>👉</strong> Add new custom fields specific to that post</li>
            <li><strong>👉</strong> Modify imported fields (label, type, required/optional)</li>
            <li><strong>👉</strong> Remove unnecessary fields per post</li>
        </ul>
        <h4 class="abrf-h4">🔄 Import &amp; Customization System</h4>
        <ul class="abrf-list">
            <li><strong>👉</strong> One-click import from global forms</li>
            <li><strong>👉</strong> Fully editable after import</li>
            <li><strong>👉</strong> Combine global and custom fields in a single form</li>
            <li><strong>👉</strong> Control field order, validation, and requirements</li>
        </ul>
        <h4 class="abrf-h4">⚙️ Smart Behavior</h4>
        <ul class="abrf-list">
            <li>Global forms act as a default template</li>
            <li>Each post can override or extend the global structure</li>
            <li>Changes in global configuration do not overwrite existing post-level forms</li>
        </ul>
        <h4 class="abrf-h4">🚀 Benefits</h4>
        <ul class="abrf-list">
            <li><strong>👉</strong> Standardized data collection across all properties</li>
            <li><strong>👉</strong> Faster setup using reusable form templates</li>
            <li><strong>👉</strong> Full flexibility for different property requirements</li>
            <li><strong>👉</strong> Scalable system for large rental platforms</li>
        </ul>
        <figure class="abrf-imgcard">
            <img src="<?php echo esc_url( ABRF_DOC_URL . '/' ); ?>image/client_form.png" alt="Client Forms Configuration Overview">
            <figcaption>Client Forms Configuration Overview</figcaption>
        </figure>
    </section>
<?php
