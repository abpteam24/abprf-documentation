<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <div class="tab_item" data-tabs="#abprf_shortcode">
        <h2 class="_abprf_color_theme">RentalForge - Shortcode</h2>
        <div class="_divider_xs"></div>
        <i class="_color_light_3_fs_label_mar_tb_d_block">Below are all available RentalForge shortcodes and their details. You can add these shortcodes to any page, post, or widget area. Each shortcode also includes supported parameters and configuration options. Please use the parameters carefully, as each one controls different frontend behaviors and rental features.</i>
        <!--    RentalForge List shortcode -->
        <pre>[<strong class="_abprf_color_theme">abprf-list</strong>]</pre>
        <p class="_abprf">Use the following RentalForge shortcode to display the rental post list anywhere on your website. You can place this shortcode inside any page, post, or widget area. Below, all available parameters and their functionality are explained to help you configure the listing properly according to your needs.</p>
        <table class="_abprf">
            <tbody>
            <tr>
                <th>Parameter</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>style</td>
                <td><strong class="_abprf_color_theme">grid , grid_2 ,list</strong> | Default: <strong class="_abprf_color_theme">grid</strong><code>[<strong class="_abprf_color_theme">abprf-list style='list'</strong>]</code></td>
            </tr>
            <tr>
                <td>rent_rule</td>
                <td>To show specific Rental Rule RentalForge, use this parameter . Available parameter <strong class="_abprf_color_theme">hourly , daily ,multi_day,monthly,multi_month</strong> | Default: blank<code>[<strong class="_abprf_color_theme">abprf-list rent_rule='hourly'</strong>]</code></td>
            </tr>
            <tr>
                <td>cat</td>
                <td>To show specific category RentalForge, use this parameter | Default: blank<code>[<strong class="_abprf_color_theme">abprf-list cat='category_id'</strong>]</code></td>
            </tr>
            <tr>
                <td>show</td>
                <td>To show number of RentalForge, use this parameter | Default: <strong class="_abprf_color_theme">9</strong>(default 9 post show)<code>[<strong class="_abprf_color_theme">abprf-list show='15</strong>]</code></td>
            </tr>
            <tr>
                <td>column</td>
                <td>To show number of RentalForge in a line(this parameter active when style parameter any grid type), use this parameter | Default: <strong class="_abprf_color_theme">3</strong><code>[<strong class="_abprf_color_theme">abprf-list post='16' show='4'</strong>]</code></td>
            </tr>
            </tbody>
        </table>
    </div>
<?php
