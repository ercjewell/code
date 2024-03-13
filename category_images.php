<?php

/*

Plugin Name: Category Images
Author: Elisha Jewell
Author URI: https://github.com/ercjewell
Description: Corolate cartegories with category images to display on published blog posts.
Version: 1.0.0

*/


// Client Logos
// This line defines a new shortcode in WordPress. Shortcodes are small code snippets that allow you to perform complex tasks with very little effort. In this case, we're creating a shortcode named 'news-category-logo'.
add_shortcode('news-category-logo', function($atts) {

    // This section sets the default attributes for the shortcode. Shortcodes can accept attributes, similar to HTML tags. Here, we're expecting an 'id' attribute, but we're not setting a default value for it.
    $attributes = shortcode_atts(array(
        'id' => '', // No default ID
    ), $atts, 'news-category-logo');

    // This line extracts the category ID attribute from the shortcode attributes and ensures it is an integer. The intval function is used to convert data types to integer.
    $id = intval($attributes['id']);  // Ensure the ID is an integer

    // This is a misplaced piece of code; normally, you would use get_the_category() to get categories for posts, not for providing a category ID like here. We'll address this later.
    $categoryArray = get_the_category($id); // category array
  
    $category = $categoryArray[0]; //first item
 
    $slug = $category->slug; //category slug from object

 

    // This conditional checks if an ID was actually provided in the shortcode. If not, it returns a message saying 'No category ID provided'. It's a good practice to validate inputs like this.
    if (!$id) return 'No category ID provided';

    // Assuming a valid ID is provided, this line uses get_category() to fetch the category object based on the provided ID. The get_category() function is a WordPress function used to retrieve category details.
 
//  is take the category slug and find the correct POST
$post = get_posts(array(
    'name'           => $slug, // Here 'name' refers to the slug, not the title.
    'posts_per_page' => 1,
    'post_type'      => 'news_category',
))[0];
$featured_image = get_the_post_thumbnail_url($post, 'full');

 return $featured_image;
});