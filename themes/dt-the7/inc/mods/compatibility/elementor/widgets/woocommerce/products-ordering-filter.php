<?php
/**
 * @package The7
 */

namespace The7\Adapters\Elementor\Widgets\Woocommerce;

use The7\Adapters\Elementor\The7_Elementor_Widget_Base;

defined( 'ABSPATH' ) || exit;

/**
 * Class Products_Ordering_Filter
 *
 * @package The7\Adapters\Elementor\Widgets\Woocommerce
 */
class Products_Ordering_Filter extends The7_Elementor_Widget_Base {

	/**
	 * Get element name.
	 * Retrieve the element name.
	 *
	 * @return string The name.
	 */
	public function get_name() {
		return 'the7-products-ordering-filter';
	}

	/**
	 * Get widget title.
	 *
	 * @return string
	 */
	public function get_title() {
		return __( 'Product Ordering Filter', 'the7mk2' );
	}

	/**
	 * Get widget icon.
	 *
	 * @return string
	 */
	public function get_icon() {
		return 'eicon-products the7-widget';
	}

	protected function render() {
		echo '<div class="the7-wc-catalog-ordering">';
		wc_setup_loop(
			[
				'total' => 2,
			]
		);
		woocommerce_catalog_ordering();
		wc_reset_loop();
		echo '</div>';
	}

}
