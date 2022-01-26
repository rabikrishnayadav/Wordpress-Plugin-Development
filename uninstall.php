<?php
defined('ABSPATH') || die("Nice Try!");

global $wpdb;
$prefix = $wpdb->prefix;
$sql = "DROP TABLE IF EXISTS `{$prefix}likesdislikes`;";
$wpdb->query($sql);