<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
	<div class="tab_item" data-tabs="#abprf_client_form_global">
		<h2 class="_abprf_color_theme">Configuration: Traveller Form </h2>
		<div class="_divider"></div>
		<i class="_color_7_fs_label_mar_tb_d_block"> To obtain information from travelers, please design your form. Which imports easily from any transport</i>
		<div class="_mar_tb" data-image-href="<?php echo esc_url( ABPRF_DOC_URL . '/' ) ?>image/5.2.form_list.png"><img class="_img_control_reflex_6" src="#" alt="Traveller Form "></div>
		<ol class="_abprf_list_margin">
			<li>To add a new form field, click.</li>
			<li>To save the form, click</li>
			<li>Enter the label or field title. These fields must be filled out. Fields won't save if these inputs are blank.</li>
			<li>Only a-z and 0-9 are permitted for the typed unique ID. These fields must be filled out. Fields won't save if these inputs are blank.</li>
			<li>Choose the input type. These fields must be filled out. Fields won't save if these inputs are blank.</li>
			<li>These fields appear if the input type is select, checkbox, or radio; if not, they are hidden. It will be necessary if the field appears.</li>
			<li>Choose a date or enter the default value. These are optional fields.</li>
			<li>Turn this field on to be required.</li>
			<li>This icon can be pressed by moving up or down or rearranging.</li>
			<li>This icon can be used to delete or remove.</li>
		</ol>
	</div>
<?php
