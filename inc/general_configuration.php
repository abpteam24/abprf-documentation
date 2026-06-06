<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
	<div class="tab_item" data-tabs="#abprf_general">
		<h3 class="_abprf_color_theme">General Configuration </h3>
		<div class="_divider_xs"></div>
		<label>The General Configuration section provides centralized controls for managing how a post behaves and which features are enabled within the system. From here, you can easily turn key modules on or off and manage related data without leaving the post details page.</label>
		<ul class="_abprf_list_margin_xs">
			<li><strong class="_color_theme">👉 Rent Continue ON/OFF : </strong>Enable or disable the rent continuation feature for the post. When turned ON, users can continue rental duration without creating a new booking.</li>
			<li><strong class="_color_theme">👉 Template Change (Details Page Template) : </strong>Select and switch between different post details page templates to control layout, design, and information structure.</li>
			<li><strong class="_color_theme">👉 Category Control : </strong>Turn category system ON/OFF for the post type . Select existing categories from the list . Create new category directly from this section without leaving the page</li>
			<li><strong class="_color_theme">👉 Location Control : </strong>Enable or disable location feature for the post type . Select available locations from the dropdown . Add new location instantly from here for better flexibility</li>
		</ul>
		<div class="rf_image" data-image-href="<?php echo esc_url( ABPRF_DOC_URL . '/' ) ?>image/general_configuration.png"><img class="_img_control_reflex_6" src="#" alt="Post Lists  "></div>
	</div>
<?php
