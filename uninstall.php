<?php

/**
 * Trigger this file on Plugin uninstall
 * 
 * @package WordPressSTPlugin
 */

 if (! defined('WP_UNINSTALL_PLUGIN')) {
    die;
 }
 
 // clear database stored data
 // === one way ===
 $books = get_posts($array = array('post_type' => 'book', 'numberofposts' => -1 ));
 
 foreach ($books as $book) {
    wp_delete_post($book->ID, true);
 }
 
 // === another way === 
 // wpdb is really powerfull, be careful when using it.
 // Access the database via SQL
 // global $wpdb;
 // $wpdb->query("DELETE FROM wp_posts WHERE post_type = 'book'"); 
 