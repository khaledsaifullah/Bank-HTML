<?php
/**
 * Template Name: Blog Template
 */

get_header();
if ( have_posts() ) while ( have_posts() ) : the_post();

$feature_array = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
if(is_array($feature_array) && sizeof($feature_array)>0){
    $feature_src = $feature_array[0];
}else{
    $feature_src = get_template_directory_uri().'/images/main_banner_home.jpg';
}

?>

    <div class="inner_page_banner" style="background: url('<?php echo $feature_src; ?>')">
        <h1>Blog</h1>
    </div>
<?php endwhile; // end of the loop. ?>

      <div class="main-content">
          <div class="left_content">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        query_posts("post_type=post&paged=".$paged);
        if ( have_posts() ) while ( have_posts() ) : the_post();


            $post_categories = wp_get_post_categories( $post->ID );
            $cats = array();
            foreach($post_categories as $cid){
                $category = get_category( $cid );
                $cats[] = '<a href="'.get_category_link($category->term_id).'">'.$category->name.'</a>';
            }
            $category_string = implode(',', $cats);
            ?>
            <div class="each-blog">
                <div class="blog-left">
                    <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'blog-thumb') );?>" alt="<?php the_title(); ?>" alt="<?php the_title(); ?>">
                </div>
                <div class="blog-right">
                    <h2> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="category-info-">
                        <span class="author"><?php the_author(); ?></> </span>
                        <span class="date"><?php the_time('d-m-Y'); ?></span>
                        <span class="category"><?php echo $category_string; ?></span>
                    </div>
                    <?php the_excerpt(); ?>
                </div>
                <div class="clear"></div>
            </div>
            <?php endwhile; // end of the loop. ?>
        <?php wp_pagenavi(); ?>

        </div>
        <div class="right_sidebar">
            <?php get_sidebar(); ?>
        </div>
        <div class="clear"></div>
      </div><!-- #content -->

<?php get_footer(); ?>
