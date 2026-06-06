<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
	<div class="tab_item" data-tabs="#abprf_create_order">
		<h2 class="_abprf_color_theme">Menu : Add Order </h2>
		<div class="_divider"></div>
		<i class="_color_7_fs_label_mar_tb_d_block">This page is for admin only. Admin can directly book tickets from this page without payment.</i>
		<div class="_mar_tb" data-image-href="<?php echo esc_url(ABPRF_DOC_URL . '/') ?>image/3.1.add_order.png"><img class="_img_control_reflex_6" src="#" alt="Add Order"></div>
		<i class="_color_7_fs_label_mar_tb_d_block">Clicking this page from the menu will only show the search form. Here you can select transport, boarding, dropping, journey date, return date. If you select transport then you won't get any information by selecting return date. It will work if you don't select transport.</i>
		<i class="_color_7_fs_label_mar_tb_d_block">If transport is selected and transport is seat type, this transport will look like above according to its configuration.</i>
		<div class="_mar_tb" data-image-href="<?php echo esc_url(ABPRF_DOC_URL . '/') ?>image/3.2.add_order.png"><img class="_img_control_reflex_6" src="#" alt="Add Order"></div>
		<i class="_color_7_fs_label_mar_tb_d_block">If transport is selected and transport is ticket type, this transport will look like above according to its configuration.</i>
		<div class="_mar_tb" data-image-href="<?php echo esc_url(ABPRF_DOC_URL . '/') ?>image/3.3.add_order.png"><img class="_img_control_reflex_6" src="#" alt="Add Order"></div>
		<i class="_color_7_fs_label_mar_tb_d_block">If transport is not selected then it will look like above. According to your information the transport list will show and return date input will work.</i>
		<i class="_color_7_fs_label_mar_tb_d_block">Clicking view ticket or view seat will show the details of that transport. From where the order can be confirmed by selecting ticket or seat select.</i>
		<i class="_color_7_fs_label_mar_tb_d_block">There will be a new field from the frontend. That is: Mail & Ticket Send to .If the customer's email is given here, the order information and ticket will be sent to the customer's email</i>
	</div>
<?php
