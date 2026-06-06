<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
	<div class="tab_item" data-tabs="#abprf_date">
		<h3 class="_abprf_color_theme">Date Configuration</h3>
		<div class="_divider_xxs"></div>
		<label>The Date Configuration system allows you to control and define rental availability dates for each property in a flexible and intelligent way. You can set specific dates, recurring days, and special conditions to manage when a property can be rented.</label>
		<h6 class="_abprf">📅 Flexible Date Selection</h6>
		<ul class="_abprf_list_margin_xs">
			<li>👉 Select any specific date for property rental availability</li>
			<li>👉 Configure availability based on weekdays (Mon–Sun)</li>
			<li>👉 Set custom day-name rules for recurring schedules</li>
			<li>👉 Define special days (holidays/events) as available or unavailable dates</li>
		</ul>
		<h6 class="_abprf">🌍 Global Date Configuration</h6>
		<i>The system also includes a Global Date Configuration option available in the Global Settings Menu.</i>
		<ul class="_abprf_list_margin_xs">
			<li>👉 When Global Date Configuration is ENABLED, all post-level date settings will be ignored</li>
			<li>👉 The system will automatically use the global rules for all properties/posts</li>
			<li>👉 This ensures consistent date behavior across the entire platform</li>
		</ul>
		<h6 class="_abprf">⚙️ Smart Workflow Behavior</h6>
		<ul class="_abprf_list_margin_xs">
			<li>If Global Date Configuration = ON → No need to set date rules in individual posts</li>
			<li>If Global Date Configuration = OFF → Each post can have its own custom date settings</li>
		</ul>
		<h6 class="_abprf">🚀 Benefits</h6>
		<ul class="_abprf_list_margin_xs">
			<li>👉 Saves significant time by reducing repetitive date setup</li>
			<li>👉 Ensures consistent booking rules across all properties when needed</li>
			<li>👉 Still allows full flexibility when individual control is required</li>
			<li>👉 Ideal for managing large-scale rental systems efficiently</li>
		</ul>
		<div class="rf_image" data-image-href="<?php echo esc_url( ABPRF_DOC_URL . '/' ) ?>image/date_config.png"><img class="_img_control_reflex_6" src="#" alt="Post Lists  "></div>
	</div>
<?php
