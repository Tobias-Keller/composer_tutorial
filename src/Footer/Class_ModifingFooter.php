<?php


namespace MySimpleComposerPlugin\Footer;


class Class_ModifingFooter {
    public function __construct(){
        add_action('wp_footer', [$this, 'addHelloToFooter']);
    }

    public function addHelloToFooter(){
        echo 'Hello little Footer';
    }

}