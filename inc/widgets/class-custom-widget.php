<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once( 'class-enhanced-widget.php' );

/**
 * My custom widget
 */
class Custom_Widget extends Enhanced_Widget {

	/**
	 * Sets up the widget's name etc.
	 */
	public function __construct() {

		$widget_id = 'custom_widget';

		$widget_options = array(
			'classname'   => $widget_id,
			'description' => 'My Custom Widget Description',
		);

		parent::__construct( $widget_id, 'My Custom Widget', $widget_options );

	}

	/**
	 * Outputs the contents of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		// HTML
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance - The widget options
	 */
	public function form( $instance ) {
		//$this->render_input_for_attribute( $instance, 'title', 'Title' );
		//$this->render_input_for_attribute( $instance, 'desc', 'Description' );
	}

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance - The new options
	 * @param array $old_instance - The previous options
	 */
	public function update( $new_instance, $old_instance ) {
		// Validation
		return $new_instance;
	}

}
