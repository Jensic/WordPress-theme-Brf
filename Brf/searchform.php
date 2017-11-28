<?php
/**
 * Template for displaying search forms in Brf, used to customize search
 *
 * @package BrF
 */
?>


<form role="search" method="get" class="search-form form-inline my-2 my-lg-0" action="<?php echo home_url( '/' ); ?>">
    <label>
        <span class="screen-reader-text"><?php echo _x( 'Sök efter:', 'label' ) ?></span>
            <input type="search" class="search-field form-control mr-sm-2" placeholder="<?php echo esc_attr_x( 'Sök…', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
    </label>
    <button type="submit" class="btn my-2 my-sm-0 search-icon" value="<?php echo esc_attr_x( 'search', 'submit button' ) ?>" ><i class="fa fa-search"></i></button>
</form><!-- .search-form form-inline my-2 my-lg-0-->




