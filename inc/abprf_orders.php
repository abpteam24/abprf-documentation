<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
	<div class="tab_item" data-tabs="#abprf_orders">
		<h2 class="_abprf_color_theme">Menu : Traveller List </h2>
		<div class="_divider"></div>
		<i class="_color_light_3_fs_label_mar_tb_d_block">You can find travelers very easily on this page. And you can download pdf and csv file, send mail to customer, cancel order etc.</i>
		<div class="_mar_tb" data-image-href="<?php echo esc_url( ABPRF_DOC_URL . '/' ) ?>image/7.1.traveller_list.png"><img class="_img_control_reflex_6" src="#" alt="abprf_list"></div>
		<ol class="_abprf_list_margin">
			<li>Here you can select the transport and see its traveler list.</li>
			<li>To filter by journey date select dates here</li>
			<li>To filter between two journey dates, select dates here</li>
			<li>Select Boarding and Dropping here to filter between boarding and dropping</li>
			<li>Type order id here to filter guests of specific order id</li>
			<li>To filter by Order date select dates here</li>
			<li>To filter between two order dates, select dates here</li>
			<li>Type billing name here to filter guests of specific billing name</li>
			<li>Type billing email here to filter guests of specific billing email</li>
			<li>Type billing phone here to filter guests of specific billing phone</li>
			<li>The search results will show if the above input changes. If it doesn't come, click on this button and it will come</li>
			<li>All the above inputs will not show at first, some inputs will appear on clicking this button.</li>
			<li>By clicking this button you can download the PDF ticket of this guest only</li>
			<li>By clicking on this button, you can download the PDF ticket of the number of tickets that this guest has in this transport.</li>
			<li>By clicking this button, you can resend the mail and ticket of the number of tickets that this guest has in this transport.</li>
			<li>By clicking this button, you can cancel this guest.</li>
			<li>Here you will see the list of all order status. Click on it to show the guest list.</li>
			<li>Here you have to click guest check in. Which you can do from frontend in ticket page.</li>
		</ol>
		<div class="_mar_tb" data-image-href="<?php echo esc_url( ABPRF_DOC_URL . '/' ) ?>image/7.2.traveller_list.png"><img class="_img_control_reflex_6" src="#" alt="abprf_list"></div>
		<i class="_color_light_3_fs_label_mar_tb_d_block">After selecting transport in the filter section , you will open some new tabs in the filter list. Which can be seen in the above picture.</i>
		<ol class="_abprf_list_margin">
			<li>By clicking this button, you will get all the travelers list and all information of this transport in a PDF file. It will be better if you select the transport and journey date and download the PDF. You can change the information you want to show in this file from the traveler lists pdf in the configuration section.</li>
			<li>By clicking this button, you will get all the travelers Additional service information of this transport in a PDF file. It will be better if you select the transport and journey date and download the PDF.</li>
			<li>By clicking this button, you will get all the travelers list and all information of this transport in a CSV file. You can change the information you want to show in this file from the CSV in the configuration section.</li>
			<li>After selecting transport in the filter section, Here you will see this information. Which indicates the traveler's billing information.</li>
			<li>After selecting transport in the filter section, Here you will see this information. Which indicates the traveler's registration information.</li>
			<li>After selecting transport in the filter section, Here you will see this information. Which indicates the traveler's additional service information.</li>
		</ol>
	</div>
<?php
