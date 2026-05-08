<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
	<div class="tab_item" data-tabs="#abprf_pdf">
		<h2 class="_abprf_color_theme">Configuration: PDF </h2>
		<div class="_divider"></div>
		<i class="_color_light_3_fs_label_mar_tb_d_block">These explain the fundamental arrangement of a PDF file (such as a passenger list, ticket, etc.).</i>
		<div class="_mar_tb" data-image-href="<?php echo esc_url( ABPRF_DOC_URL . '/' ) ?>image/5.7.pdf.png"><img class="_img_control_reflex_6" src="#" alt="PDF"></div>
		<table class="_abprf_fixed_text_left_mt">
			<tbody>
			<tr>
				<th class="_color_theme">PDF Logo</th>
				<td colspan="3"> Kindly include your logo to be displayed on the PDF ticket.</td>
			</tr>
			<tr>
				<th class="_color_theme">PDF Logo Height</th>
				<td colspan="3">Please specify the height of your logo in pixels for it to be displayed on the PDF ticket.</td>
			</tr>
			<tr>
				<th class="_color_theme">PDF Background Image</th>
				<td colspan="3">You have the option to insert a personalized background image in PDF.</td>
			</tr>
			<tr>
				<th class="_color_theme">Background Color</th>
				<td colspan="3"> You have the option to include a personalized background color in a PDF document.</td>
			</tr>
			<tr>
				<th class="_color_theme">Text Color</th>
				<td colspan="3">You have the option to input a personalized text color for PDF files.</td>
			</tr>
			<tr>
				<th class="_color_theme">Terms & Condition Title</th>
				<td colspan="3">The Terms & Conditions will be shown in the ticket footer. You have the option to input a personalized text for PDF Terms & Conditions title.</td>
			</tr>
			<tr>
				<th class="_color_theme">Terms & Condition Text</th>
				<td colspan="3"> The Terms & Conditions will be shown in the ticket footer. You have the option to input a personalized text for PDF Terms & Conditions details</td>
			</tr>
			</tbody>
		</table>
	</div>
<?php
