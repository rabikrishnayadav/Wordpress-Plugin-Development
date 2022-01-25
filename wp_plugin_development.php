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

//There are 4 function Action Hooks

do_action(); // we use it to create our own hooks or wordpress are using this for creating the hooks

add_action(); //In created function with do_action() hook With the help of this hooks we can perform many task like add,edit,update,modify,manupulate.etc functionality add. 

remove_action(); // we use it for remove an action which is created before.

has_action(); // Conditional statement, this hook will check the given function is existing or not.


// There are 4 function in Filter Hooks

apply_filters(); // we can use it for apply any filter on specific element or create new function 

add_filter(); // same as add_action hook

remove_filter(); // same as add_action hook

has_filter(); // same as add_action hook