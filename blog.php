<?php
/**
 * @package WordPress
 * @subpackage Modularity
 */
?>
<div class="span-<?php modularity_sidebar_class(); ?>">
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<div class="content">
					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					<div class="entry">
						<?php the_content( __( '( Lire la suite... )', 'modularity' ) ); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'modularity' ), 'after' => '</div>' ) ); ?>
					</div>
					<div class="clear"></div>
					<p class="postmetadata alt quiet">
						<?php
							$tag_list = get_the_tag_list( ' et a été taggué comme ', ', ' );
							printf( __( 'Cet article a été posté le %1$s. Il appartient aux catégories %2$s%3$s.', 'modularity' ),
								get_the_time( "l d F Y" ),
								get_the_category_list( ', ' ),
								$tag_list
							);
						?>
						<?php comments_popup_link( __( 'Laissez un commentaire &#187;', 'modularity' ), __( '1 Commentaire &#187;', 'modularity' ), __( '% Commentaires &#187;', 'modularity' ) ); ?>
						<?php edit_post_link( __( ' Editer l\'article', 'modularity'), '| ', '' ); ?>
					</p>
				</div>
			</div>
		<?php endwhile; ?>
			
		<div class="clear"></div>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link( __( '&laquo; Articles plus anciens', 'modularity' ) ); ?></div>
			<div class="alignright"><?php previous_posts_link( __( 'Articles plus récents &raquo;', 'modularity' ) ); ?></div>
		</div>

	<?php else : ?>

		<h2 class="center"><?php _e( 'Not Found', 'modularity' ); ?></h2>
		<p class="center"><?php _e( 'Sorry, but you are looking for something that isn&rsquo;t here.', 'modularity' ); ?></p>
		<?php get_search_form(); ?>

	<?php endif; ?>
</div>

<?php get_sidebar(); ?>
</div>
<div class="double-border"></div>
