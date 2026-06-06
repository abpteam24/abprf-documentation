<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <div class="tab_item" data-tabs="#abprf_shortcode">
        <h2 class="_abprf_color_theme">RentalForge - Shortcode</h2>
        <div class="_divider_xs"></div>
        <i class="_color_7_fs_label_mar_tb_d_block">Below are all available RentalForge shortcodes and their details. You can add these shortcodes to any page, post, or widget area. Each shortcode also includes supported parameters and configuration options. Please use the parameters carefully, as each one controls different frontend behaviors and rental features.</i>
        <!--    RentalForge List shortcode -->
        <pre>[<strong class="_abprf_color_theme">abprf-post</strong>]</pre>
        <p class="_abprf">Use the following RentalForge shortcode to display the rental post list anywhere on your website. You can place this shortcode inside any page, post, or widget area. Below, all available parameters and their functionality are explained to help you configure the listing properly according to your needs.</p>
        <table class="_abprf">
            <tbody>
            <tr>
                <th>Parameter</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>style</td>
                <td><strong class="_abprf_color_theme">grid ,list,missionary</strong> | Default: <strong class="_abprf_color_theme">grid</strong><code>[<strong class="_abprf_color_theme">abprf-post style='list'</strong>]</code></td>
            </tr>
            <tr>
                <td>post_id</td>
                <td>You can add any page any post for rent by this Parameter. when use this Parameter other Parameter not valuable | Default: blank<code>[<strong class="_abprf_color_theme">abprf-post post_id='post_id'</strong>]</code></td>
            </tr>
            <tr>
                <td>cat_id</td>
                <td>To show specific category RentalForge, use this parameter | Default: blank<code>[<strong class="_abprf_color_theme">abprf-post cat_id='category_id'</strong>]</code></td>
            </tr>
            <tr>
                <td>loc_id</td>
                <td>To show specific Location RentalForge, use this parameter | Default: blank<code>[<strong class="_abprf_color_theme">abprf-post loc_id='location_id'</strong>]</code></td>
            </tr>
            <tr>
                <td>rent_rule</td>
                <td>To show specific Rental Rule RentalForge, use this parameter . Available parameter <strong class="_abprf_color_theme">hourly , daily ,multi_day,monthly,multi_month</strong> | Default: blank<code>[<strong class="_abprf_color_theme">abprf-post rent_rule='hourly'</strong>]</code></td>
            </tr>
            <tr>
                <td>show</td>
                <td>To show number of RentalForge, use this parameter | Default: <strong class="_abprf_color_theme">9</strong>(default 9 post show)<code>[<strong class="_abprf_color_theme">abprf-post show='15</strong>]</code></td>
            </tr>
            <tr>
                <td>column</td>
                <td>To show number of RentalForge in a line(this parameter active when style parameter any grid type), use this parameter | Default: <strong class="_abprf_color_theme">3</strong><code>[<strong class="_abprf_color_theme">abprf-post post='16' show='4'</strong>]</code></td>
            </tr>
            </tbody>
        </table>

        <!--    Property List shortcode -->
        <pre>[<strong class="_abprf_color_theme">abprf-property</strong>]</pre>
        <p class="_abprf">Use the following  shortcode to display the rental Property list anywhere on your website. You can place this shortcode inside any page, post, or widget area. Below, all available parameters and their functionality are explained to help you configure the listing properly according to your needs.</p>
        <table class="_abprf">
            <tbody>
            <tr>
                <th>Parameter</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>style</td>
                <td><strong class="_abprf_color_theme">grid ,list</strong> | Default: <strong class="_abprf_color_theme">grid</strong><code>[<strong class="_abprf_color_theme">abprf-property style='list'</strong>]</code></td>
            </tr>
            <tr>
                <td>post_id</td>
                <td>You can add any page any post for rent by this Parameter. when use this Parameter other Parameter not valuable | Default: blank<code>[<strong class="_abprf_color_theme">abprf-property post_id='post_id'</strong>]</code></td>
            </tr>
            <tr>
                <td>cat_id</td>
                <td>To show specific category property, use this parameter | Default: blank<code>[<strong class="_abprf_color_theme">abprf-property cat_id='category_id'</strong>]</code></td>
            </tr>
            <tr>
                <td>loc_id</td>
                <td>To show specific Location property, use this parameter | Default: blank<code>[<strong class="_abprf_color_theme">abprf-property loc_id='location_id'</strong>]</code></td>
            </tr>
            <tr>
                <td>brand_id</td>
                <td>To show specific Brand property, use this parameter | Default: blank<code>[<strong class="_abprf_color_theme">abprf-property brand_id='brand_id'</strong>]</code></td>
            </tr>
            <tr>
                <td>rent_rule</td>
                <td>To show specific Rental Rule property, use this parameter . Available parameter <strong class="_abprf_color_theme">hourly , daily ,multi_day,monthly,multi_month</strong> | Default: blank<code>[<strong class="_abprf_color_theme">abprf-property rent_rule='hourly'</strong>]</code></td>
            </tr>
            <tr>
                <td>show</td>
                <td>To show number of property, use this parameter | Default: <strong class="_abprf_color_theme">9</strong>(default 9 post show)<code>[<strong class="_abprf_color_theme">abprf-property show='15</strong>]</code></td>
            </tr>
            <tr>
                <td>column</td>
                <td>To show number of property in a line(this parameter active when style parameter any grid type), use this parameter | Default: <strong class="_abprf_color_theme">3</strong><code>[<strong class="_abprf_color_theme">abprf-property post='16' show='4'</strong>]</code></td>
            </tr>
            </tbody>
        </table>

        <!--    Slider List shortcode -->
        <pre>[<strong class="_abprf_color_theme">abprf-gallery</strong>]</pre>
        <p class="_abprf">Use the following  shortcode to display the Slider/Gallery anywhere on your website. You can place this shortcode inside any page, post, or widget area. Below, all available parameters and their functionality are explained to help you configure the listing properly according to your needs.</p>
        <table class="_abprf">
            <tbody>
            <tr>
                <th>Parameter</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>style</td>
                <td><strong class="_abprf_color_theme">slider ,gallery</strong> | Default: <strong class="_abprf_color_theme">gallery</strong><code>[<strong class="_abprf_color_theme">abprf-gallery style='slider'</strong>]</code></td>
            </tr>
            <tr>
                <td>post_id</td>
                <td>You can select any  post to display Slider/Gallery by this Parameter. when use this Parameter other Parameter not valuable | Default: blank<code>[<strong class="_abprf_color_theme">abprf-gallery post_id='post_id'</strong>]</code></td>
            </tr>
            <tr>
                <td>cat_id</td>
                <td>To show specific category Slider/Gallery, use this parameter | Default: blank<code>[<strong class="_abprf_color_theme">abprf-gallery cat_id='category_id'</strong>]</code></td>
            </tr>
            <tr>
                <td>loc_id</td>
                <td>To show specific Location Slider/Gallery, use this parameter | Default: blank<code>[<strong class="_abprf_color_theme">abprf-gallery loc_id='location_id'</strong>]</code></td>
            </tr>
            <tr>
                <td>rent_rule</td>
                <td>To show specific Rental Rule Slider/Gallery, use this parameter . Available parameter <strong class="_abprf_color_theme">hourly , daily ,multi_day,monthly,multi_month</strong> | Default: blank<code>[<strong class="_abprf_color_theme">abprf-gallery rent_rule='hourly'</strong>]</code></td>
            </tr>
            <tr>
                <td>column</td>
                <td>To show number of image in a line(this parameter active when style parameter gallery type), use this parameter | Default: <strong class="_abprf_color_theme">3</strong><code>[<strong class="_abprf_color_theme">abprf-gallery  show='4'</strong>]</code></td>
            </tr>
            </tbody>
        </table>
    </div>
<?php
