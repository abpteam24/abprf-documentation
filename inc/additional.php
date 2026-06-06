<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
	<div class="tab_item" data-tabs="#abprf_additional">
		<h2 class="_abprf_color_theme">Additional services Configuration</h2>
        <div class="_divider_xxs"></div>
        <label>TThe Additional Services Configuration system allows you to manage extra services that can be added with a rental. These services can be controlled both globally and per individual post, giving you full flexibility in pricing and service management.</label>

        <h6 class="_abprf">🌍 Global Additional Services</h6>
        <i>From the Global Configuration panel, you can define a common set of additional services that apply across the entire system.</i>
        <ul class="_abprf_list_margin_xs">
            <li>👉 Create global additional services (e.g. cleaning, pickup, insurance, setup, etc.)</li>
            <li>👉 Enable or disable services globally</li>
            <li>👉 Maintain a centralized service list for all posts</li>
        </ul>
        <h6 class="_abprf">🏠 Custom Post-Level Configuration</h6>
        <i>Each individual post can also have its own custom additional services setup.</i>
        <ul class="_abprf_list_margin_xs">
            <li>👉 Import services directly from the global configuration</li>
            <li>👉 Add new custom services specific to that post</li>
            <li>👉 Modify imported or custom services</li>
            <li>👉 Delete services if not required for that post</li>
        </ul>
        <h6 class="_abprf">🔄 Import & Flexibility System</h6>
        <ul class="_abprf_list_margin_xs">
            <li>👉 One-click Import from Global Services</li>
            <li>👉 Fully editable after import (no restriction)</li>
            <li>👉 Mix global + custom services in a single post</li>
            <li>👉 Override or adjust pricing per post if needed</li>
        </ul>

        <h6 class="_abprf">⚙️ Smart Behavior</h6>
        <ul class="_abprf_list_margin_xs">
            <li>Global services act as a base template</li>
            <li>Posts can either inherit or customize services</li>
            <li>Changes in global settings do not automatically overwrite post-level custom edits</li>
        </ul>
        <h6 class="_abprf">🚀 Benefits</h6>
        <ul class="_abprf_list_margin_xs">
            <li>👉 Saves time with reusable service templates</li>
            <li>👉 Ensures consistency across all properties</li>
            <li>👉 Allows full customization where needed</li>
            <li>👉 Scalable system for large rental platforms</li>
        </ul>
        <div class="rf_image" data-image-href="<?php echo esc_url( ABPRF_DOC_URL . '/' ) ?>image/additional.png"><img class="_img_control_reflex_6" src="#" alt="Post Lists  "></div>
	</div>
<?php
