<?php namespace WSUWP\Theme\WDS;

class Component_Site_Footer_Condensed {

	protected $args = array();


	public function __construct( $args = array() ) {

		if ( ! empty( $args ) ) {

			$this->args = $args;

		}

	}


	public function render() {

		include __DIR__ . '/template.php';

	}

}
