<?php
/**

*Plugin Name: VSWP Dev Plugin
*Plugin Uri: https://vidsik.com.np
*Author: Rabi Kr Yadav
*Author Uri: https://rabikrishnayadav.com.np
*Description: With This plugin i am going to learn how to make wordpress plugin
* Tags: vswp, vidsik, vsplugin
*Version: 1.0.0
*Lisence: GPL V2

*/

if(!defined('ABSPATH')) exit; // Exit if accessed directly.

register_activation_hook(__FILE__, 'vidsik_register_activation_hook');
register_deactivation_hook(__FILE__, 'vidsik_register_deactivation_hook');
register_uninstall_hook(__FILE__, 'vidsik_register_uninstall_hook');

function vidsik_register_activation_hook(){}
function vidsik_register_deactivation_hook(){}
function vidsik_register_uninstall_hook(){}