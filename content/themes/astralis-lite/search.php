<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Astralis Lite
 */

get_header(); ?>

<div class="container">
     <div id="Tab-Naviagtion">
        <div class="left-content-wrap">          
				<?php if ( have_posts() ) : ?>
                    <header>
                        <h1 class="entry-title"><?php /* translators: %s: search term */ 
						printf( esc_html__( 'Search Results for: %s', 'astralis-lite' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                    </header>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part( 'content', 'search' ); ?>
                    <?php endwhile; ?>
                    <?php the_posts_pagination(); ?>
                <?php else : ?>
                    <?php get_template_part( 'no-results' ); ?>
                <?php endif; ?>                 

        </div> <!-- .left-content-wrap-->        
       <?php get_sidebar();?>       
        <div class="clear"></div>
    </div><!-- site-aligner -->
</div><!-- container -->

<?php get_footer(); ?>