<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
	<div class="tab_item" data-tabs="#abprf_post_date">
		<h2 class="_abprf_color_theme">Date Configuration</h2>
		<div class="_divider"></div>
		<i class="_color_light_3_fs_label_mar_tb_d_block">Here you can control transport Operational day and date. </i>
		<div class="_mar_tb" data-image-href="<?php echo esc_url( ABPRF_DOC_URL . '/' ) ?>image/4.1.date_periodic.png"><img class="_img_control_reflex_6" src="#" alt="Date Configuration"></div>
		<i class="_color_light_3_fs_label_mar_tb_d_block">Our Operational date two types. Specific date and Periodic Dates. Periodic Dates describe below</i>
		<ol class="_abprf_list_margin">
			<li> Please Select your Transport operational date type. Default operational date will be Periodic</li>
			<li>Add your Transport Launching Date otherwise it will be start today.</li>
			<li>Add your Transport Terminate Date otherwise it will be Continuously running periodically</li>
			<li>Add your periodically after days. if your Transport operation day everyday this will be one(1).</li>
			<li>Add your number of advance booking days. default advance booking days is 15. Note: You set large number of date then your search process will be slow. we refer less than 30.</li>
			<li>Select your weekend.Default all days open</li>
			<li>you can move or sorting specific off dates</li>
			<li>select your specific off dates. if you have any special Operation date off . otherwise ignore it</li>
			<li>To remove specific off dates click this button.</li>
			<li>To add more specific off dates click on add specific off Date</li>
			<li>you can move or sorting off dates range</li>
			<li>select your start date off dates range . if you have any off dates range. otherwise ignore it</li>
			<li>select your End date off dates range . if you have any off dates range. otherwise ignore it</li>
			<li>To remove off dates range click this button.</li>
			<li>To add more specific off dates range click on add specific off Date range</li>
		</ol>
		<div class="_mar_tb" data-image-href="<?php echo esc_url( ABPRF_DOC_URL . '/' ) ?>image/4.2.date_specific.png"><img class="_img_control_reflex_6" src="#" alt="Date Configuration"></div>
		<i class="_color_light_3_fs_label_mar_tb_d_block">If your operational day particular / specific. Specific date describe below</i>
		<ol class="_abprf_list_margin">
			<li> Please Select your Transport operational date type specific Date</li>
			<li>you can move or sorting specific on dates</li>
			<li>select your specific on dates.</li>
			<li>To remove specific on dates click this button.</li>
			<li>To add more specific dates click on add specific Date</li>
		</ol>
	</div>
<?php
