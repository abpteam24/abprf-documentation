<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <section class="abrf-page" data-abrf-tab="#abrf_template">
        <div class="abrf-page-head">
            <h2>🧩 RentalForge: Templating</h2>
        </div>
        <div class="abrf-divider"></div>
        <p class="abrf-lead">RentalForge provides a powerful template override system that allows you to customize plugin design, classes, icons, and frontend structure according to your requirements.</p>
        <h4 class="abrf-h4">📁 How the template override works</h4>
        <p class="abrf-p">To start customizing, copy the <code class="abrf-code">rf_templates</code> folder from the RentalForge plugin directory and paste it into your <code class="abrf-code">wp-content</code> directory. Once added, RentalForge will automatically load your custom templates instead of the default plugin templates.</p>
        <p class="abrf-p">You only need to keep the template files you intend to modify. Remove all unnecessary files from the copied folder. Otherwise, future plugin updates or new features may conflict with overridden templates and may cause unexpected issues on your site.</p>
        <p class="abrf-p">This override system requires basic knowledge of WordPress templating and PHP development. Therefore, make changes carefully and only edit files you fully understand.</p>
        <div class="abrf-alert abrf-warn">⚠️ Keep only the template files you intend to modify — leaving unused overrides in place can conflict with future plugin updates or new features.</div>
        <div class="abrf-alert abrf-tip">✅ The template override system requires basic knowledge of WordPress templating and PHP development. Always make a backup of any template file before editing it.</div>
    </section>
<?php