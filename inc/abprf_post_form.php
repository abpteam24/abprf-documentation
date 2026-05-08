<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
	<div class="tab_item" data-tabs="#abprf_post_form">
		<h2 class="_abprf_color_theme">Traveller Form Configuration</h2>
		<div class="_divider"></div>
		<i class="_color_light_3_fs_label_mar_tb_d_block">Here you can design Traveller Registration Form </i>
		<div class="_mar_tb" data-image-href="<?php echo esc_url( ABPRF_DOC_URL . '/' ) ?>image/4.8.form.png"><img class="_img_control_reflex_6" src="#" alt="Traveller Form "></div>
		<ol class="_abprf_list_margin">
			<li>This switch indicate Traveller Form ON/OFF. if you want to active Traveller Form please switch on</li>
			<li>Click this button to import global Traveller Form which design in our configuration section</li>
			<li>You can activate single form for all Traveller. To activate this please switch ON.</li>
			<li>Type Filed title or Label . These Field are required. if these input empty , field not save.</li>
			<li>Type Filed unique id. only a-z and 0-9 allowed . These Field are required. if these input empty , field not save.</li>
			<li>Select input type. These Field are required. if these input empty , field not save.</li>
			<li>if input type select , checkbox, Radio then these field show otherwise this field will be hidden. if field show then it will be required.</li>
			<li>Type default value or select date. These Field not required.</li>
			<li>Switch ON to mandatory fill up this field.</li>
			<li>you can re-arrange / move top or down to press this icon && you can Delete / Remove to press this icon</li>
			<li>Click to add new form field</li>
		</ol>
	</div>
<?php
