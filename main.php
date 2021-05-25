<?php
/**
 * Plugin Name:       Tobier Plugin with Composer
 * Plugin URI:        https://tobier.de/wordpress-plugin-schreiben-mit-composer-und-autoload
 * Description:       Simple WordPress Plugin with Composer and Autoload
 * Version:           0.1
 * Requires at least: 5.7
 * Author:            Tobier.de
 * Author URI:        https://tobier.de
 */

require "vendor/autoload.php";

use MySimpleComposerPlugin\Class_ModifingHeader;
use MySimpleComposerPlugin\Footer;

$header = new Class_ModifingHeader();
$creator = $header->getCreatorName();

$footer = new Footer\Class_ModifingFooter();