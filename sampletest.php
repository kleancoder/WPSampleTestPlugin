<?php

/**
 * @package sampletest
 */

 /*
  Plugin Name: Sample Test
  Plugin URI: https://github.com/
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
 
 class SampleTest {
    function activate() {
        
    }
    
    function deactivate() {
        
    }
    
    function uninstall() {
        
    }
 }
 
 if (class_exists('SampleTest')) {
     $sampleTest = new SampleTest();
 }
 
 // activation
 register_activation_hook(__FILE__, $array = array($sampleTEst, 'activate'));
 
 // deactivation
 register_deactivate_hook(__FILE__, $array = array($sampleTest, 'deactivate'));
 

 
 

 
 