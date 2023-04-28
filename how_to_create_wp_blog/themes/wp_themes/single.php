<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header();
    while ( have_posts() ) : the_post();
    $feature_array = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
    if(is_array($feature_array) && sizeof($feature_array)>0){
        $feature_src = $feature_array[0];
    }else{
        $feature_src = get_template_directory_uri().'/images/main_banner_home.jpg';
    }

?>
<!--<div class="inner_page_banner" style="background: url('<?php /*echo $feature_src; */?>')">
    <h1 class="title"> <?php /*the_title(); */?></h1>
</div>
-->
<?php endwhile; ?>

<div class="main-content">
    <div class="left_content">
        <?php while ( have_posts() ) : the_post();

            $comment = '0 comment';
            if(get_comments_number()>0){
                $comment = get_comments_number().' comments';
            }
            ?>
            <h1 class="title"> <?php the_title(); ?></h1>
            <div class="category-info">
                <span class="author"><?php the_author(); ?></> </span>
                <span class="date"><?php the_time('d-m-Y'); ?></span>
                <span class="comment-count"><?php echo $comment; ?></span>
            </div>
            <div class="feature-image">
                <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'full') );?>" alt="<?php the_title(); ?>" alt="<?php the_title(); ?>">
            </div>
            <div class="content-area">
                <?php echo the_content(); ?>
            </div>

            <div class="detail-page-social">
                <!-- AddThis Button BEGIN -->
                <div class="addthis_toolbox addthis_default_style">
                    <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                    <a class="addthis_button_tweet"></a>
                    <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
                    <a class="addthis_button_pinterest_pinit"></a>
                    <a class="addthis_counter addthis_pill_style"></a>
                </div>
                <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=undefined"></script>
                <!-- AddThis Button END -->
            </div>
            <?php comments_template( '', true ); ?>

        <?php endwhile; // end of the loop. ?>

        </div>
    <div class="right_sidebar">
        <?php get_sidebar(); ?>
    </div>
    <div class="clear"></div>
</div>

<?php
get_footer();
