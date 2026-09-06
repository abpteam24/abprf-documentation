<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <section class="abrf-page" data-abrf-tab="#abrf_date">
        <div class="abrf-page-head">
            <h2>📅 Date Configuration</h2>
        </div>
        <div class="abrf-divider"></div>
        <p class="abrf-lead">The Date Configuration system allows you to control and define rental availability dates for each property in a flexible and intelligent way. You can set specific dates, recurring days, and special conditions to manage when a property can be rented.</p>
        <h4 class="abrf-h4">📅 Flexible Date Selection</h4>
        <ul class="abrf-list">
            <li><strong>👉</strong> Select specific dates for property rental availability</li>
            <li><strong>👉</strong> Configure availability based on weekdays (Monday–Sunday)</li>
            <li><strong>👉</strong> Set custom recurring day rules for schedules</li>
            <li><strong>👉</strong> Define special dates (holidays/events) as available or unavailable</li>
        </ul>
        <h4 class="abrf-h4">🌍 Global Date Configuration</h4>
        <p class="abrf-p">The system also includes a Global Date Configuration option available in the Global Settings menu.</p>
        <ul class="abrf-list">
            <li><strong>👉</strong> When Global Date Configuration is ENABLED, all post-level date settings are ignored</li>
            <li><strong>👉</strong> The system automatically applies global rules to all properties/posts</li>
            <li><strong>👉</strong> Ensures consistent date behavior across the entire platform</li>
        </ul>
        <h4 class="abrf-h4">⚙️ Smart Workflow Behavior</h4>
        <ul class="abrf-list">
            <li>If Global Date Configuration = ON → Individual post date settings are not required</li>
            <li>If Global Date Configuration = OFF → Each post can use its own custom date settings</li>
        </ul>
        <h4 class="abrf-h4">🚀 Benefits</h4>
        <ul class="abrf-list">
            <li><strong>👉</strong> Reduces repetitive configuration and saves time</li>
            <li><strong>👉</strong> Ensures consistent booking rules across all properties when needed</li>
            <li><strong>👉</strong> Provides full flexibility for individual property control</li>
            <li><strong>👉</strong> Ideal for large-scale rental and booking systems</li>
        </ul>
        <figure class="abrf-imgcard">
            <img src="<?php echo esc_url( ABRF_DOC_URL . '/' ); ?>image/date_config.png" alt="Date Configuration Overview">
            <figcaption>Date Configuration Overview</figcaption>
        </figure>
    </section>
<?php
