<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <section class="abrf-page" data-abrf-tab="#abrf_translate">
        <div class="abrf-page-head">
            <h2>🌍 RentalForge: Translate</h2>
        </div>
        <div class="abrf-divider"></div>
        <p class="abrf-lead">RentalForge is fully translation-ready and can be translated using any WordPress translation plugin. However, we strongly recommend using the Loco Translate plugin for the best experience and easiest workflow.</p>
        <h4 class="abrf-h4">🌐 To translate RentalForge:</h4>
        <ol class="abrf-steps">
            <li>Go to <strong>Plugins → Add New</strong> from your WordPress dashboard.</li>
            <li>Search for <strong>Loco Translate</strong>, then install and activate the plugin.</li>
            <li>Navigate to <strong>Loco Translate → Plugins</strong>.</li>
            <li>Select the <strong>RentalForge</strong> plugin from the list.</li>
            <li>Create a new language or edit an existing translation file.</li>
            <li>Click the <strong>Sync</strong> button to load the latest translatable strings.</li>
            <li>Translate the strings and click <strong>Save</strong>.</li>
        </ol>
        <p class="abrf-p">After completing these steps, most frontend and backend texts used by RentalForge will be translated automatically. Please note that some dynamic content and documentation text may not be translatable.</p>
        <div class="abrf-alert abrf-danger">🚫 <strong>Important:</strong> Always store translation files in a safe or custom directory recommended by Loco Translate. Otherwise, your translations may be lost during plugin updates.</div>
    </section>
<?php