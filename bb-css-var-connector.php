<?php
/**
 * CSS Var Connector for Beaver Builder
 *
 * @package     CSSVARCONNECTOR
 * @author      Badabingbreda
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: CSS Var Connector for Beaver Builder
 * Plugin URI:  https://www.badabing.nl
 * Description: Adds a simple css var connector to Beaver Builder
 * Version:     1.0.0
 * Author:      Badabingbreda
 * Author URI:  https://www.badabing.nl
 * Text Domain: cssvarconnector
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */



define( 'BBCSSVARCONNECTOR_VERSION', '1.0.0' );
define( 'BBCSSVARCONNECTOR_DIR', plugin_dir_path( __FILE__ ) );
define( 'BBCSSVARCONNECTOR_FILE', __FILE__ );
define( 'BBCSSVARCONNECTOR_URL', plugins_url( '/', __FILE__ ) );

use BBCSSVarConnector\Connector;

require_once( 'src/Connector.php' );

new Connector();