
<div id="secondary" class="widget-area" role="complementary">
    <?php if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>

        <aside id="archives" class="widget">
            <h3 class="widget-title"><?php _e( 'Archives', 'wa_theme' ); ?></h3>
            <ul>
                <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
            </ul>
        </aside>

        <aside id="meta" class="widget">
            <h3 class="widget-title"><?php _e( 'Meta', 'wa_theme' ); ?></h3>
            <ul>
                <?php wp_register(); ?>
                <li><?php wp_loginout(); ?></li>
                <?php wp_meta(); ?>
            </ul>
        </aside>

    <?php endif; // end sidebar widget area ?>
</div><!-- #secondary .widget-area -->
