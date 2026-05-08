<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <div class="tab_item" data-tabs="#abprf_shortcode">
        <h2 class="_abprf_color_theme">RentalForge : Shortcode</h2>
        <div class="_divider"></div>
        <i class="_color_light_3_fs_label_mar_tb_d_block">Below are all available RentalForge shortcodes and their details. You can add these shortcodes to any page, post, or widget area. Each shortcode also includes supported parameters and configuration options. Please use the parameters carefully, as each one controls different frontend behaviors and rental features.</i>
        <!--    RentalForge List shortcode -->
        <div>
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
                    <td>from</td>
                    <td>To show specific start point , use this parameter | Default: blank<code>[<strong class="_abprf_color_theme">abprf-list from='start_place_name'</strong>]</code></td>
                </tr>
                <tr>
                    <td>to</td>
                    <td>To show specific end point, use this parameter | Default: blank<code>[<strong class="_abprf_color_theme">abprf-list from='start_place_name' to='end_place_name'</strong> ]</code></td>
                </tr>
                <tr>
                    <td>cat</td>
                    <td>To show specific category transport, use this parameter | Default: blank<code>[<strong class="_abprf_color_theme">abprf-list cat='category_id'</strong>]</code></td>
                </tr>
                <tr>
                    <td>post</td>
                    <td>To show number of transport, use this parameter | Default: <strong class="_abprf_color_theme">9</strong>(default 9 port for grid type others default 50)<code>[<strong class="_abprf_color_theme">abprf-list post='15</strong>]</code></td>
                </tr>
                <tr>
                    <td>column</td>
                    <td>To show number of transport in a line(this parameter active when style parameter any grid type), use this parameter | Default: <strong class="_abprf_color_theme">3</strong><code>[<strong class="_abprf_color_theme">abprf-list post='16' column='4'</strong>]</code></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div>
            <!--    Search shortcode -->
            <strong>Our Available Shortcode list :</strong>
            <pre>[<strong class="_abprf_color_theme">abprf-search</strong>]</pre>
            <p class="_abprf">You can add this shortcode any page to show transport search form , you can create it automatically from <strong>Configuration > tools &amp; Info</strong> Tab.</p>
            <table class="_abprf">
                <tbody>
                <tr>
                    <th>Parameter</th>
                    <th>Value</th>
                </tr>
                <tr>
                    <td>form</td>
                    <td><strong class="_abprf_color_theme">inline</strong> or <strong class="_abprf_color_theme">column</strong> | Default: <strong class="_abprf_color_theme">inline</strong><code>[ <strong class="_abprf_color_theme">abprf-search form='column' </strong>]</code></td>
                </tr>
                <tr>
                    <td>transport</td>
                    <td><strong class="_abprf_color_theme">on</strong> or <strong class="_abprf_color_theme">off</strong> | Default: <strong class="_abprf_color_theme">off</strong><code>[<strong class="_abprf_color_theme">abprf-search transport='on'</strong>]</code></td>
                </tr>
                <tr>
                    <td>return</td>
                    <td><strong class="_abprf_color_theme">on</strong> or <strong class="_abprf_color_theme">off</strong> | Default: <strong class="_abprf_color_theme">on</strong><code>[<strong class="_abprf_color_theme">abprf-search return='off'</strong>]</code></td>
                </tr>
                </tbody>
            </table>
            <!--    Route shortcode -->
            <pre>[<strong class="_abprf_color_theme">abprf-route</strong>]</pre>
            <p class="_abprf">You can add this shortcode any page to show Transport Route .</p>
            <!--   Download ticket shortcode -->
            <table class="_abprf">
                <tbody>
                <tr>
                    <th>Parameter</th>
                    <th>Value</th>
                </tr>
                <tr>
                    <td>style</td>
                    <td><strong class="_abprf_color_theme"> button , anchor,list</strong> | Default: <strong class="_abprf_color_theme">button</strong><code>[<strong class="_abprf_color_theme">abprf-route style='anchor'</strong>]</code></td>
                </tr>
                <tr>
                    <td>from</td>
                    <td>To show specific start point , use this parameter | Default: blank<code>[<strong class="_abprf_color_theme">abprf-route from='start_place_name'</strong>]</code></td>
                </tr>
                <tr>
                    <td>to</td>
                    <td>To show specific end point, use this parameter | Default: blank<code>[<strong class="_abprf_color_theme">abprf-route from='start_place_name' to='end_place_name' </strong>]</code></td>
                </tr>
                <tr>
                    <td>cat</td>
                    <td>To show specific category transport, use this parameter | Default: blank<code>[<strong class="_abprf_color_theme">abprf-route cat='category_id'</strong>]</code></td>
                </tr>
                <tr>
                    <td>post</td>
                    <td>To show number of transport, use this parameter | Default: <strong class="_abprf_color_theme">50</strong><code>[<strong class="_abprf_color_theme">abprf-route post='15'</strong>]</code></td>
                </tr>
                </tbody>
            </table>
            <pre>[<strong class="_abprf_color_theme">abprf-ticket</strong>]</pre>
            <p>You can add this shortcode any page to show Ticket Download page , you can create it automatically from <strong>Configuration >tools &amp; Info</strong> Tab.</p>
            <h2 class="_abprf_color_theme">TransportTicket - Bus, Ferry, Shuttle Booking : Transport Search Shortcode</h2>
            <div class="_divider"></div>
            <pre>[<strong class="_abprf_color_theme">abprf-search</strong>]</pre>
            <i class="_color_light_3_fs_label_mar_tb_d_block">You can add this shortcode any page to show transport search form , you can create it automatically from <strong>Configuration > tools &amp; Info</strong> Tab.</i>
            <table class="_abprf">
                <tbody>
                <tr>
                    <th>Parameter</th>
                    <th>Value</th>
                </tr>
                <tr>
                    <td>form</td>
                    <td><strong class="_abprf_color_theme">inline</strong> or <strong class="_abprf_color_theme">column</strong> | Default: <strong class="_abprf_color_theme">inline</strong><code>[ <strong class="_abprf_color_theme">abprf-search form='column' </strong>]</code></td>
                </tr>
                <tr>
                    <td>transport</td>
                    <td><strong class="_abprf_color_theme">on</strong> or <strong class="_abprf_color_theme">off</strong> | Default: <strong class="_abprf_color_theme">off</strong><code>[<strong class="_abprf_color_theme">abprf-search transport='on'</strong>]</code></td>
                </tr>
                <tr>
                    <td>return</td>
                    <td><strong class="_abprf_color_theme">on</strong> or <strong class="_abprf_color_theme">off</strong> | Default: <strong class="_abprf_color_theme">on</strong><code>[<strong class="_abprf_color_theme">abprf-search return='off'</strong>]</code></td>
                </tr>
                </tbody>
            </table>
            <div class="_divider"></div>
            <code>[<strong class="_abprf_color_theme">abprf-search</strong>]</code>
            <i class="_color_light_3_fs_label_mar_tb_d_block"> The output of this shortcode below</i>
            <div class="_mar_tb" data-image-href="<?php echo esc_url( ABPRF_DOC_URL . '/' ) ?>image/1.2.search_form.png"><img class="_img_control_reflex_6" src="#" alt="Search Form"></div>
            <code>[<strong class="_abprf_color_theme">abprf-search form='column'</strong>]</code>
            <i class="_color_light_3_fs_label_mar_tb_d_block"> The output of this shortcode below</i>
            <div class="_mar_tb" data-image-href="<?php echo esc_url( ABPRF_DOC_URL . '/' ) ?>image/1.1.search_form.png"><img class="_img_control_reflex_6" src="#" alt="Search Form"></div>
            <code>[<strong class="_abprf_color_theme">abprf-search transport='on'</strong>]</code>
            <i class="_color_light_3_fs_label_mar_tb_d_block"> The output of this shortcode below</i>
            <div class="_mar_tb" data-image-href="<?php echo esc_url( ABPRF_DOC_URL . '/' ) ?>image/1.0.search_form.png"><img class="_img_control_reflex_6" src="#" alt="Search Form"></div>
            <ol class="_abprf_list_margin">
                <li>Here , you can book transport by transport name. these are not mandatory. you can hide this from global layout configuration or use shortcode parameter transport='off '.</li>
                <li>These are mandatory field . select you Boarding Point</li>
                <li>These are mandatory field . select you Dropping Point</li>
                <li>These are mandatory field . select you Journey date</li>
                <li>You can select your return date but these are not mandatory. You can hide this from global layout configuration or use shortcode parameter return='off '.</li>
                <li>Click this button to search Transport according to our parameter</li>
            </ol>
            <i class="_color_light_3_fs_label_mar_tb_d_block"> If you click on the search button, if the transport is seat type, then it will look like the photo below</i>
            <div class="_mar_tb" data-image-href="<?php echo esc_url( ABPRF_DOC_URL . '/' ) ?>image/2.0.result_seat_plan.png"><img class="_img_control_reflex_6" src="#" alt="Seat plan"></div>
            <i class="_color_light_3_fs_label_mar_tb_d_block">If you click on the search button, if the transport is of the ticket type, then it will look like the photo below</i>
            <div class="_mar_tb" data-image-href="<?php echo esc_url( ABPRF_DOC_URL . '/' ) ?>image/2.1.result_ticket.png"><img class="_img_control_reflex_6" src="#" alt="Ticket"></div>
            <i class="_color_light_3_fs_label_mar_tb_d_block">If you click on the search button, if the transport input is empty, it will look like the image below</i>
            <div class="_mar_tb" data-image-href="<?php echo esc_url( ABPRF_DOC_URL . '/' ) ?>image/2.2.result_list.png"><img class="_img_control_reflex_6" src="#" alt="List"></div>
            <i class="_color_light_3_fs_label_mar_tb_d_block">Click on View Details from your search results</i>
            <i class="_color_light_3_fs_label_mar_tb_d_block">If the transport is seat type it will look like below</i>
            <div class="_mar_tb" data-image-href="<?php echo esc_url( ABPRF_DOC_URL . '/' ) ?>image/2.3.result_seatplan.png"><img class="_img_control_reflex_6" src="#" alt="Seat plan"></div>
            <i class="_color_light_3_fs_label_mar_tb_d_block">If the transport is Ticket type it will look like below</i>
            <div class="_mar_tb" data-image-href="<?php echo esc_url( ABPRF_DOC_URL . '/' ) ?>image/2.4.result_ticket.png"><img class="_img_control_reflex_6" src="#" alt="Ticket"></div>
            <i class="_color_light_3_fs_label_mar_tb_d_block">Now you have to select your seat or ticket and click the continue button with the passenger information.</i>
            <i class="_color_light_3_fs_label_mar_tb_d_block">After clicking the continue button, the transport will be added into cart.But you can do it in three ways</i>
            <i class="_color_light_3_fs_label_mar_tb_d_block">There are three options in the Configure Section and Layout Configuration Tab Checkout System</i>
            <ol class="_abprf_list_margin">
                <li><strong class="_color_theme">Default : </strong>The default checkout system is the woocommerce checkout system. Transport will add to cart and current page will reload</li>
                <li><strong class="_color_theme">Single page Checkout : </strong>Single Page Checkout system is transport add to cart and checkout page will show on same page into current page..</li>
                <li><strong class="_color_theme">Direct Checkout : </strong>Direct checkout system is transport add to cart and redirect to checkout page</li>
            </ol>
            <h2 class="_abprf_color_theme">TransportTicket - Bus, Ferry, Shuttle Booking : Transport List Shortcode</h2>
            <div class="_divider"></div>
            <pre>[<strong class="_abprf_color_theme">abprf-list</strong>]</pre>
            <p class="_abprf">You can add this shortcode any page to show Transport LIst .</p>
            <table class="_abprf">
                <tbody>
                <tr>
                    <th>Parameter</th>
                    <th>Value</th>
                </tr>
                <tr>
                    <td>style</td>
                    <td><strong class="_abprf_color_theme">grid , grid_2 , button , anchor,list</strong> | Default: <strong class="_abprf_color_theme">grid</strong><code>[<strong class="_abprf_color_theme">abprf-list style='button'</strong>]</code></td>
                </tr>
                <tr>
                    <td>from</td>
                    <td>To show specific start point , use this parameter | Default: blank<code>[<strong class="_abprf_color_theme">abprf-list from='start_place_name'</strong>]</code></td>
                </tr>
                <tr>
                    <td>to</td>
                    <td>To show specific end point, use this parameter | Default: blank<code>[<strong class="_abprf_color_theme">abprf-list from='start_place_name' to='end_place_name'</strong> ]</code></td>
                </tr>
                <tr>
                    <td>cat</td>
                    <td>To show specific category transport, use this parameter | Default: blank<code>[<strong class="_abprf_color_theme">abprf-list cat='category_id'</strong>]</code></td>
                </tr>
                <tr>
                    <td>post</td>
                    <td>To show number of transport, use this parameter | Default: <strong class="_abprf_color_theme">9</strong>(default 9 port for grid type others default 50)<code>[<strong class="_abprf_color_theme">abprf-list post='15</strong>]</code></td>
                </tr>
                <tr>
                    <td>column</td>
                    <td>To show number of transport in a line(this parameter active when style parameter any grid type), use this parameter | Default: <strong class="_abprf_color_theme">3</strong><code>[<strong class="_abprf_color_theme">abprf-list post='16' column='4'</strong>]</code></td>
                </tr>
                </tbody>
            </table>
            <div class="_mar_tb" data-image-href="<?php echo esc_url( ABPRF_DOC_URL . '/' ) ?>image/1.4.list.png"><img class="_img_control_reflex_6" src="#" alt="list Shortcode"></div>
            <div class="_mar_tb" data-image-href="<?php echo esc_url( ABPRF_DOC_URL . '/' ) ?>image/1.5.list.png"><img class="_img_control_reflex_6" src="#" alt="list Shortcode"></div>
            <div class="_mar_tb" data-image-href="<?php echo esc_url( ABPRF_DOC_URL . '/' ) ?>image/1.6.list.png"><img class="_img_control_reflex_6" src="#" alt="list Shortcode"></div>
        </div>
    </div>
<?php
