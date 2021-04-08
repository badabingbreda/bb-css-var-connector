<?php

namespace BBCSSVarConnector;

class Connector {

	/**
	 * Runs on init
	 * @since  1.0.0
	 * @return void
	 */
	public function __construct() {

		/**
		 *  Register an action with 'fl_page_data_add_properties' hook
		 */
		add_action( 'fl_page_data_add_properties', __CLASS__ . '::add_connector_for_css_var' );

	}

	/**
	 * Add a twig connector
	 * @since  1.0.5
	 */
	public static function add_connector_for_css_var() {

		/**
		 *  Add a custom group
		 */
		\FLPageData::add_group( 'acf_toolbox', array(
			'label' => __('Toolbox', 'toolbox' )
		) );

		/**
		 *  Add a new property to our group
		 */
		\FLPageData::add_post_property( 'toolbox_css_var', array(
			'label'   => __('Toolbox CSS Var', 'toolbox' ),
			'group'   => 'acf_toolbox',
			// only works for color
			'type'    => ['color', 'photo', 'url'],
			'getter'  => __CLASS__ .  '::connection_getter' ,
			'form'	  => 'toolbox_css_var',
			)
		);


		/**
		 *  Settings option to pop up when our group is added
		 */
		\FLPageData::add_post_property_settings_fields(
			'toolbox_css_var',
			array(
				'var_name' => array(
					'type'          => 'text',
					'label'         => __( 'Variable name', 'toolbox' ),
					'default'       => '',
					'description'	=> __('Enter name of the CSS Variable', 'toolbox' ),
				),
			)
		);



	}

	/**
	 * [connection_getter description]
	 * @param  [type] $settings [description]
	 * @param  [type] $property [description]
	 * @return [type]           [description]
	 * @uses toolboxUtils, Timber, TimberPost
	 * @since  1.0.0
	 */
	public static function connection_getter( $settings, $property ) {

		return "var({$settings->var_name})";


	}


}

