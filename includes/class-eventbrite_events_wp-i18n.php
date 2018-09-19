<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://digitalideas.io/
 * @since      1.0.0
 *
 * @package    Eventbrite_events_wp
 * @subpackage Eventbrite_events_wp/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Eventbrite_events_wp
 * @subpackage Eventbrite_events_wp/includes
 * @author     Digital Ideas <info@digitalideas.io>
 */
class Eventbrite_events_wp_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'eventbrite_events_wp',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
