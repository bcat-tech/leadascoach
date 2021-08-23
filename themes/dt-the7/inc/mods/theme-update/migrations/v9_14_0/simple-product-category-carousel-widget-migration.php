<?php
/**
 * @package The7
 */

namespace The7\Inc\Mods\ThemeUpdate\Migrations\v9_14_0;

defined( 'ABSPATH' ) || exit;

// Not included automatically.
require_once PRESSCORE_MODS_DIR . '/theme-update/migrations/v9_14_0/simple-posts-widget-migration.php';

/**
 * Class Simple_Product_Category_Carousel_Widget_Migration
 *
 * @package The7\Inc\Mods\ThemeUpdate\Migrations\v9_14_0
 */
class Simple_Product_Category_Carousel_Widget_Migration extends Simple_Posts_Widget_Migration {

	/**
	 * Widget name.
	 *
	 * @return string
	 */
	public static function get_widget_name() {
		return 'the7-simple-product-categories-carousel';
	}
}
