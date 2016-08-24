# Posts and CPT Select Field

Create a select field with entries from posts, pages, or any custom post type as options for the field.

![LimeCuda](http://fewerthanthree.com/wp-content/themes/fewer-than-three/images/lc-logo.png) for [Fewer Than Three](http://fewerthanthree.com)

## Usage 
`<?php lc_posts_as_options( $post_type, $field, $value ); ?>`


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

## Available Filters

*lc_cpt_select_query_args*

Filter the default [WP_Query](https://codex.wordpress.org/Class_Reference/WP_Query) args to completely control which posts are returned as options for your select field. 

*lc_cpt_default_option_' . $field*

Filter the default option label for the field. defaults to "Select"
