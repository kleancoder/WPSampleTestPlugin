<?php

/**
 * @package sampletest
 */

 /*
  Plugin Name: WordPressSTPlugin
  Plugin URI: https://github.com/kleancoder/WordPressSTPlugin
  Description: This is a Sample Test WordPress Plugin
  Version: 1.0.0
  Author: kleancoder
  Author URI: https://github.com/kcleancoder
  License: GPL v2
  Text Domain: Sample Test Plugin
  */
 
 if (!defined ('ABSPATH')) {
    die;
 }
 
 // if add_function not exists, this means
 // WordPress was not initialized properly
 if (! function_exists('add_action')) {
    echo "Hey, you can\t access this file, you silly human!";
    exit;
 }
 
 class WordPressSTPlugin {
    function activate() {
        
    }
    
    function deactivate() {
        
    }
    
    function uninstall() {
        
    }
 }
 
 if (class_exists('SampleTest')) {
     $wordPressSTPlugin = new WordPressSTPlugin();
 }
 
 // activation
 register_activation_hook(__FILE__, $array = array($wordPressSTPlugin, 'activate'));
 
 // deactivation
 register_deactivate_hook(__FILE__, $array = array($wordPressSTPlugin, 'deactivate'));
 

 
 

 
 