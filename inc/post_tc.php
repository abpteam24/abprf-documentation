<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <section class="abrf-page" data-abrf-tab="#abrf_tc">
        <div class="abrf-page-head">
            <h2>📜 Terms &amp; Conditions Configuration</h2>
        </div>
        <div class="abrf-divider"></div>
        <p class="abrf-lead">The Terms &amp; Conditions Configuration system allows you to manage and customize the terms that clients must agree to before completing a booking or rental. Like Additional Services, this feature supports both global and post-level configuration for maximum flexibility.</p>
        <h4 class="abrf-h4">🌍 Global Terms &amp; Conditions</h4>
        <p class="abrf-p">From the Global Configuration panel, you can create and manage standard terms that will be applied across all posts.</p>
        <ul class="abrf-list">
            <li><strong>👉</strong> Define global terms and conditions content</li>
            <li><strong>👉</strong> Enable or disable terms acceptance globally</li>
            <li><strong>👉</strong> Maintain a consistent policy for all properties</li>
        </ul>
        <h4 class="abrf-h4">🏠 Custom Post-Level Terms</h4>
        <p class="abrf-p">Each individual post can also have its own custom terms and conditions configuration.</p>
        <ul class="abrf-list">
            <li><strong>👉</strong> Import terms from global configuration</li>
            <li><strong>👉</strong> Add new custom terms specific to that post</li>
            <li><strong>👉</strong> Modify imported terms content as needed</li>
            <li><strong>👉</strong> Remove or replace terms per post requirement</li>
        </ul>
        <h4 class="abrf-h4">🔄 Import &amp; Customization System</h4>
        <ul class="abrf-list">
            <li><strong>👉</strong> One-click import from global terms</li>
            <li><strong>👉</strong> Fully editable after import</li>
            <li><strong>👉</strong> Combine global and custom terms if required</li>
            <li><strong>👉</strong> Control visibility and acceptance rules</li>
        </ul>
        <h4 class="abrf-h4">⚙️ Smart Behavior</h4>
        <ul class="abrf-list">
            <li>Global terms act as a default policy template</li>
            <li>Each post can override or extend global terms</li>
            <li>Global changes do not overwrite custom post-level edits</li>
        </ul>
        <h4 class="abrf-h4">🚀 Benefits</h4>
        <ul class="abrf-list">
            <li><strong>👉</strong> Ensures legal and policy consistency across the platform</li>
            <li><strong>👉</strong> Saves time with reusable global templates</li>
            <li><strong>👉</strong> Allows full customization per property</li>
            <li><strong>👉</strong> Improves compliance and user transparency</li>
        </ul>
        <figure class="abrf-imgcard">
            <img src="<?php echo esc_url( ABRF_DOC_URL . '/' ); ?>image/terms_condition.png" alt="Terms &amp; Conditions Configuration Overview">
            <figcaption>Terms &amp; Conditions Configuration Overview</figcaption>
        </figure>
    </section>
<?php
