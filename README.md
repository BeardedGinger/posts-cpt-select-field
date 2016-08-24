# Posts and CPT Select Field

Create a select field with entries from posts, pages, or any custom post type as options for the field

## Usage 
<?php lc_posts_as_options( $post_type, $field, $value ); ?>


## Parameters

###$post_type
*array*
The post types that you would like to pull posts from as options for the select field
**default: 'post'**

###$field
*string*
The field ID for the select field

###$value
*int* 
The post ID for the saved value of the field
