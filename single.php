<?php
/**
 * @package WordPress
 * @subpackage Modularity
 */
?>
<?php get_header(); ?>
<div class="span-<?php modularity_sidebar_class(); ?>">
<div class="content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h2><?php the_title(); ?></h2>
<?php the_content( __( 'Read the rest of this page &raquo;', 'modularity' ) ); ?>
<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'modularity' ), 'after' => '</div>' ) ); ?>
</div>
<div class="clear"></div>

<p class="postmetadata alt">
					<small>
						<?php
							$tag_list = get_the_tag_list( ' et a été taggué comme ', ', ' );
							printf( __( 'Cer article a été posté le %1$s. Il appartient aux catégories %2$s%3$s.', 'modularity' ),
								get_the_time( "l d F Y" ),
								get_the_category_list( ', ' ),
								$tag_list
							);
						?>
						<?php edit_post_link( __( 'Editer cet article', 'modularity' ), '', '.' ); ?>
					</small>
				</p>

				<div class="nav next right"><?php next_post_link('%link', _x( ' Article suivant &rarr;', 'Next post link', 'modularity' ) ); ?></div>
				<div class="nav prev left"><?php previous_post_link('%link', _x( '&larr; Article précédent', 'Previous post link', 'modularity' ) ); ?></div>
				<div class="clear"></div>

<?php endwhile; else : ?>

				<h2 class="center"><?php _e( 'Not Found', 'modularity' ); ?></h2>
				<p class="center"><?php _e( 'Sorry, but you are looking for something that isn&rsquo;t here.', 'modularity' ); ?></p>
				<?php get_search_form(); ?>

			<?php endif; ?>
<?php comments_template(); ?>
</div>
</div>

<?php get_sidebar(); ?>
<!-- Begin Footer -->
<?php get_footer(); ?>