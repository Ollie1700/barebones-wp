<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * This is a helper class that adds more useful functions to the standard
 * WP_Widget class.
 */
class Enhanced_Widget extends WP_Widget {

	/**
	 * Renders a label and input field for a given attribute
	 *
	 * @param $instance - The widget instance
	 * @param $label - The label for the input field
	 * @param $slug - The attribute to render the input for
	 */
	protected function render_input_for_attribute( $instance, $slug, $label ) {
		$field_id   = esc_attr( $this->get_field_id( $slug ) );
		$field_name = esc_attr( $this->get_field_name( $slug ) );
		$attr       = ! empty( $instance[ $slug ] ) ? $instance[ $slug ] : esc_html__( 'Default', 'wpbp' );
	?>
		<p>
			<label for="<?php echo $field_id; ?>">
				<?php echo esc_html( $label ); ?>
			</label>
			<input id="<?php echo $field_id; ?>" name="<?php echo $field_name; ?>" type="text" value="<?php echo esc_attr( $attr ); ?>" />
		</p>
	<?php
	}

}
