<?php

/**
 * @package WordPressSTPlugin
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
  
    function register() {
     add_action('admin_enque_scripts', $array = array($this, 'enqueue' ));
     add_action('admin_menu', $array = array($this, 'add_admin_pages'));
    }
    
    public function add_admin_pages() {
        add_menu_page('ST Plugin', 'STP', 'manage_options', 'WordPressST_plugin', $array = array($this,'admin_index'), 'dashicons-store', 110 );
    }
    
    public function admin_index() {
        require_once plugin_dir_path (__FILE__) . 'templates/admin.php';
    }
  
    function activate() {
        $this->custom_post_type();
        flush_rewrite_rules();
    }
    
    function deactivate() {
        flush_rewrite_rules();
    }
    
    protected function custom_post_type() {
     register_post_type('book', ['public' => true, 'label' => 'Books']);
    }
    
    protected function enqueue() {
     // enqueue all out scripts
     wp_enqueue_style('mypluginstyle', plugins_url('/assets/mystyle.css',__FILE__));
     wp_enqueue_script('mypluginscript', plugins_url('/assets/myscript.js',__FILE__));
    }
 }
 
 if (class_exists('WordPressSTPlugin')) {
     $wordPressSTPlugin = new WordPressSTPlugin();
     $wordPressSTPlugin-> register();
 }
 
 // activation
 register_activation_hook(__FILE__, $array = array($wordPressSTPlugin, 'activate'));
 
 // deactivation
 register_deactivation_hook(__FILE__, $array = array($wordPressSTPlugin, 'deactivate'));
 

 
 

 
 