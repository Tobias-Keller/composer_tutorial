<?php

namespace MySimpleComposerPlugin;

if ( ! defined( 'ABSPATH' ) ) {
    die( '' );
}

class Class_ModifingHeader {
	public function __construct() {
		add_action( 'wp_head', array( $this, 'addHelloToHeader' ) );
	}

	public function addHelloToHeader() {
		echo 'Hello little Header';
	}

	public function getCreatorName() {
		return 'tobier.de';
	}
}
