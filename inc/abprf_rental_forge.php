<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
	<div class="tab_item" data-tabs="#abprf_rental_forge">
		<h2 class="_abprf_color_theme">Configuration: Transportation </h2>
		<div class="_divider"></div>
		<i class="_color_7_fs_label_mar_tb_d_block">These are describe Global Configuration of TransportTicket - Bus, Ferry, Shuttle Booking</i>
		<div class="_mar_tb" data-image-href="<?php echo esc_url( ABPRF_DOC_URL . '/' ) ?>image/5.4.transportation.png"><img class="_img_control_reflex_6" src="#" alt="Transportation"></div>
		<table class="_abprf_fixed_text_left_mt">
			<tbody>
			<tr>
				<th class="_color_theme">Label</th>
				<td colspan="3">This is where you may modify the dashboard menu label if you would like.</td>
			</tr>
			<tr>
				<th class="_color_theme">Slug</th>
				<td colspan="3"> Please input the desired slug name. Do not forget, once you modify this slug, you must refresh the permalink by going to <strong class="_abprf_color_theme">configuration-> Permalinks</strong> and clicking on the Save configuration button.</td>
			</tr>
			<tr>
				<th class="_color_theme">Dashboard Menu Icon</th>
				<td colspan="3">You can modify the icon in the dashboard menu from this location. The only icons that can be used on the dashboard are Dashicons. Kindly visit the <a class="_abprf" href=https://developer.wordpress.org/resource/dashicons/#calendar-alt target=_blank>Dashicons Library</a> , retrieve your icon code, and paste it in this location.</td>
			</tr>
			<tr>
				<th class="_color_theme">Transport Icon</th>
				<td colspan="3"> If you wish to alter the transportation symbol, you can do so from this location.</td>
			</tr>
			<tr>
				<th class="_color_theme">Category Label</th>
				<td colspan="3"> If you wish to modify the category label on the dashboard menu, you can do so here.</td>
			</tr>
			<tr>
				<th class="_color_theme">Category Slug</th>
				<td colspan="3">Please input the desired slug name for the category. Do not forget, after updating this slug, you must refresh permalinks. Simply navigate to <strong class="_abprf_color_theme">configuration-> Permalinks</strong> and click on the Save Configuration button.</td>
			</tr>
			<tr>
				<th class="_color_theme">Organizer Label</th>
				<td colspan="3"> You can modify the Organizer label in the dashboard menu within this section.</td>
			</tr>
			<tr>
				<th class="_color_theme">Organizer Slug</th>
				<td colspan="3">Please input the desired slug name for the Organizer. Do not forget, after updating this slug, you must refresh permalinks. Simply navigate to <strong class="_abprf_color_theme">configuration-> Permalinks</strong> and click on the Save Configuration button.</td>
			</tr>
			</tbody>
		</table>
		<h2 class="_abprf_color_theme">Configuration: Transport </h2>
		<div class="_divider"></div>
		<i class="_color_7_fs_label_mar_tb_d_block">These are describe Global Configuration of Transport.</i>
		<div class="_mar_tb" data-image-href="<?php echo esc_url( ABPRF_DOC_URL . '/' ) ?>image/5.5.transport.png"><img class="_img_control_reflex_6" src="#" alt="Transport"></div>
		<table class="_abprf_fixed_text_left_mt">
			<tbody>
			<tr>
				<th class="_color_theme">Booked Status</th>
				<td colspan="3">Please choose the order status for which the seat will be reserved/decreased.</td>
			</tr>
			<tr>
				<th class="_color_theme">Sale Start after</th>
				<td colspan="3">If you want to begin selling tickets after a specific date, please choose that date. Otherwise, sales will proceed without restriction.</td>
			</tr>
			<tr>
				<th class="_color_theme">Sale close after</th>
				<td colspan="3"> If you wish to stop ticket sales after a certain date, please indicate the chosen date. Otherwise, sales will proceed indefinitely.</td>
			</tr>
			<tr>
				<th class="_color_theme">Number of advance booking date</th>
				<td colspan="3">Kindly provide the number of days in advance for booking. By default, the advance booking period is set to 15 days.</td>
			</tr>
			<tr>
				<th class="_color_theme">Ticket Sale close / Buffer time in MIN</th>
				<td colspan="3">Enter the time in minutes to close ticket sales before the transport starts. If not specified, it will default to 0 (e.g. 1 hour equals 60 minutes).</td>
			</tr>
			</tbody>
		</table>
	</div>
<?php
