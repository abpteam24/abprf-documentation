<?php
	/**
	 * Plugin Name: RentalForge -  Documentation
	 * Plugin URI:
	 * Description: RentalForge -  Documentation
	 * Version: 1.0
	 * Author: abpteam
	 * Author URI: http://www.abp-wp.com/
	 * Text Domain: abprf_documentation
	 * Domain Path: /languages
	 * WC requires at least: 8.0.0
	 * *  WC tested up to: latest
	 */
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
	if ( ! class_exists( 'ABPRF_Documentation' ) ) {
		class ABPRF_Documentation {
			public function __construct() {
				include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
				if ( ! defined( 'ABPRF_DOC_DIR' ) ) {
					define( 'ABPRF_DOC_DIR', dirname( __FILE__ ) );
				}
				if ( ! defined( 'ABPRF_DOC_URL' ) ) {
					define( 'ABPRF_DOC_URL', plugins_url() . '/' . plugin_basename( dirname( __FILE__ ) ) );
				}
				add_shortcode( 'abprf-documentation', array( $this, 'do_documentation' ) );
				add_action( 'abprf_add_admin_menu_tab', array( $this, 'menu_tab' ) );
				add_action( 'abprf_load_documentation', array( $this, 'documentation' ) );
			}

			public function menu_tab( $active_tab ): void {
				?>
                <a href="<?php echo esc_url( add_query_arg( 'rf_tab', 'documentation' ) ); ?>" class="_btn_light_info <?php echo esc_attr( $active_tab == 'documentation' ? 'rf_active' : '' ); ?>">
                    <span class="_mar_r_xxs">📚</span><?php esc_html_e( 'Documentation', 'abprf_documentation' ); ?>
                </a>
				<?php
			}

			public function do_documentation(): bool|string {
				ob_start();
				$this->documentation();

				return ob_get_clean();
			}

			public function documentation() {
				?>
                <div class="abprf_area documentation">
                <div class="abprf_container">
                    <h2 class="_abprf_text_center_color_theme">Documentation - RentalForge</h2>
                    <h6 class="_abprf_text_center">=== RentalForge is a WooCommerce-based WordPress rental plugin that helps you manage Property and tool bookings, availability and rentals from a single dashboard===</h6>
                    <div class="_divider_xs"></div>
                    <div class="_reflex_12_abprf_panel">
                        <div class="abprf_tabs tab_left">
                            <ul class="_abprf_bg_light tab_lists">
                                <li data-tabs-target="#abprf_getting_start">Getting Started</li>
                                <li data-tabs-target="#abprf_feature">Features</li>
                                <li data-tabs-target="#abprf_application">Applications</li>
                                <li>
                                    <div class="_fj_between" data-collapse-target="#display_abprf_menu" data-tabs-target="#abprf_menu" data-open-icon="fas fa-minus" data-close-icon="fas fa-plus">Menu <span data-icon class="fas fa-plus"></span></div>
                                    <ul class="_abprf_bg_light_1_pad_l" data-collapse="#display_abprf_menu">
                                        <li data-tabs-target="#abprf_dashboard">📊 Dashboard</li>
                                        <li>
                                            <div class="_fj_between" data-collapse-target="#display_abprf_post" data-tabs-target="#abprf_post" data-open-icon="fas fa-minus" data-close-icon="fas fa-plus">🔨 Post Lists<span data-icon class="fas fa-plus"></span></div>
                                            <ul class="_abprf_bg_light_1_pad_l" data-collapse="#display_abprf_post">
                                                <li data-tabs-target="#abprf_add_post">Add new Transport</li>
                                                <li data-tabs-target="#abprf_post_general">General Configuration</li>
                                                <li data-tabs-target="#abprf_post_date">Date Configuration</li>
                                                <li data-tabs-target="#abprf_post_property">Properties Configuration</li>
                                                <li data-tabs-target="#abprf_post_form">Traveller Form</li>
                                                <li data-tabs-target="#abprf_post_additional">Additional services</li>
                                                <li data-tabs-target="#abprf_post_tax">Tax Configuration</li>
                                            </ul>
                                        </li>
                                        <li data-tabs-target="#abprf_properties">🏠 Properties</li>
                                        <li data-tabs-target="#abprf_orders">📋 Orders</li>
                                        <li data-tabs-target="#abprf_category">🏘️ Category</li>
                                        <li>
                                            <div class="_fj_between" data-collapse-target="#display_abprf_global_data" data-tabs-target="#abprf_global_data" data-open-icon="fas fa-minus" data-close-icon="fas fa-plus"><span>🌐 Global Data</span><span data-icon class="fas fa-plus"></span></div>
                                            <ul class="_abprf_bg_light_1_pad_l" data-collapse="#display_abprf_global_data">
                                                <li data-tabs-target="#abprf_form">Traveller Form</li>
                                                <li data-tabs-target="#abprf_additional">Additional services</li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="_fj_between" data-collapse-target="#display_abprf_configuration" data-tabs-target="#abprf_configuration" data-open-icon="fas fa-minus" data-close-icon="fas fa-plus"><span>⚙️ Configuration</span> <span data-icon class="fas fa-plus"></span></div>
                                            <ul class="_abprf_bg_light_1_pad_l" data-collapse="#display_abprf_configuration">
                                                <li data-tabs-target="#abprf_rental_forge">RentalForge</li>
                                                <li data-tabs-target="#abprf_pdf"> PDF(PRO)</li>
                                                <li data-tabs-target="#abprf_booking_pdf">Booking Lists PDF(PRO)</li>
                                                <li data-tabs-target="#abprf_csv">Booking Lists CSV(PRO)</li>
                                                <li data-tabs-target="#abprf_email">E-Mail(PRO)</li>
                                                <li data-tabs-target="#abprf_contact">Contact Information</li>
                                                <li data-tabs-target="#abprf_slider"> Slider</li>
                                                <li data-tabs-target="#abprf_css_value"> CSS Value</li>
                                            </ul>
                                        </li>
                                        <li data-tabs-target="#abprf_status">🛡️ Status</li>
                                        <li data-tabs-target="#abprf_documentation">📚 Documentation</li>
                                        <li data-tabs-target="#abprf_create_order">📦 Add Order(PRO)</li>
                                    </ul>
                                </li>
                                <li data-tabs-target="#abprf_shortcode">Shortcodes</li>
                                <li data-tabs-target="#abprf_template">Templating</li>
                                <li data-tabs-target="#abprf_translate">Translate</li>
                            </ul>
                            <div class="tab_content">
								<?php
									require_once ABPRF_DOC_DIR . '/inc/getting_start.php';
									require_once ABPRF_DOC_DIR . '/inc/abprf_feature.php';
									require_once ABPRF_DOC_DIR . '/inc/abprf_application.php';
									require_once ABPRF_DOC_DIR . '/inc/abprf_menu.php';
									require_once ABPRF_DOC_DIR . '/inc/abprf_dashboard.php';
									require_once ABPRF_DOC_DIR . '/inc/abprf_post.php';
									require_once ABPRF_DOC_DIR . '/inc/abprf_add_post.php';
									require_once ABPRF_DOC_DIR . '/inc/abprf_post_general.php';
									require_once ABPRF_DOC_DIR . '/inc/abprf_post_property.php';
									require_once ABPRF_DOC_DIR . '/inc/abprf_post_date.php';
									require_once ABPRF_DOC_DIR . '/inc/abprf_post_form.php';
									require_once ABPRF_DOC_DIR . '/inc/abprf_post_additional.php';
									require_once ABPRF_DOC_DIR . '/inc/abprf_orders.php';
									require_once ABPRF_DOC_DIR . '/inc/abprf_category.php';
									require_once ABPRF_DOC_DIR . '/inc/abprf_global_data.php';
									require_once ABPRF_DOC_DIR . '/inc/abprf_form.php';
									require_once ABPRF_DOC_DIR . '/inc/abprf_additional.php';
									require_once ABPRF_DOC_DIR . '/inc/abprf_post_tax.php';
									require_once ABPRF_DOC_DIR . '/inc/abprf_properties.php';
									require_once ABPRF_DOC_DIR . '/inc/abprf_configuration.php';
									require_once ABPRF_DOC_DIR . '/inc/abprf_rental_forge.php';
									require_once ABPRF_DOC_DIR . '/inc/abprf_pdf.php';
									require_once ABPRF_DOC_DIR . '/inc/abprf_email.php';
									require_once ABPRF_DOC_DIR . '/inc/abprf_booking_pdf.php';
									require_once ABPRF_DOC_DIR . '/inc/abprf_csv.php';
									require_once ABPRF_DOC_DIR . '/inc/abprf_contact.php';
									require_once ABPRF_DOC_DIR . '/inc/abprf_slider.php';
									require_once ABPRF_DOC_DIR . '/inc/abprf_css_value.php';
									require_once ABPRF_DOC_DIR . '/inc/abprf_status.php';
									require_once ABPRF_DOC_DIR . '/inc/abprf_create_order.php';
									require_once ABPRF_DOC_DIR . '/inc/abprf_shortcode.php';
									require_once ABPRF_DOC_DIR . '/inc/abprf_template.php';
									require_once ABPRF_DOC_DIR . '/inc/abprf_translate.php';
								?>
                            </div>
                        </div>
                    </div>
                </div>
				<?php
			}
		}
		new ABPRF_Documentation();
	}
