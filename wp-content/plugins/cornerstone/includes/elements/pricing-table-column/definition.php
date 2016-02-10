<?php

/**
 * Element Definition: Pricing Table Column
 */

class CSE_Pricing_Table_Column {

	public function ui() {
		return array(
      'title'       => __( 'Pricing Table Column', csl18n() ),
    );
	}

	public function flags() {
		return array(
			'child' => true,
			'dimension_target' => '.x-pricing-column'
		);
	}

	public function register_shortcode() {
  	return false;
  }

	public function update_build_shortcode_atts( $atts ) {
		return $atts;
	}
}