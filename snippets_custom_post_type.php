<?php
class SnippetsCustomPostType {

  public function __construct() {
    add_action('init', array($this, 'create_snippets_cpt'));
  }

  public function create_snippets_cpt() {

    $labels = array(
      'name' => __('Snippets'),
      'singular_name' => __('Snippet'),
      'menu_name' => __('Snippets'),
      'name_admin_bar' => __('Snippet'),
      'archives' => __('Snippet Archives'),
      'attributes' => __( 'Snippet Attributes'),
      'parent_item_colon' => __('Parent Snippet:'),
      'all_items' => __('All Snippets'),
      'add_new_item' => __('Add New Snippet'),
      'add_new' => __('Add New'),
      'new_item' => __('New Snippet'),
      'edit_item' => __('Edit Snippet'),
      'update_item' => __('Update Snippet'),
      'view_item' => __('View Snippet'),
      'view_items' => __('View Snippets'),
      'search_items' => __('Search Snippets'),
      'not_found' => __('Not found'),
      'not_found_in_trash' => __('Not found in Trash'),
      'featured_image' => __('Featured Image'),
      'set_featured_image' => __('Set featured image'),
      'remove_featured_image' => __('Remove featured image'),
      'use_featured_image' => __('Use as featured image'),
      'insert_into_item' => __('Insert into snippet'),
      'uploaded_to_this_item' => __('Uploaded to this snippet'),
      'items_list' => __('Snippets list'),
      'items_list_navigation' => __('Snippets list navigation'),
      'filter_items_list' => __('Filter snippets list')
    );

    $args = array(
      'label' => __('Snippet'),
      'labels' => $labels,
      'supports' => array('title', 'editor', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats'),
      'taxonomies' => array('category'),
      'hierarchical' => false,
      'public' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'menu_position' => 5,
      'show_in_admin_bar' => true,
      'show_in_nav_menus' => true,
      'can_export' => true,
      'exclude_from_search' => false,
      'publicly_queryable' => true,
      'capability_type' => 'page',
      'show_in_rest' => true
    );

    register_post_type('snippets', $args);
  }

}

?>
