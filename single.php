<?php
	get_header(); ?>
<?php
while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content', get_post_type() );
	if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif;
endwhile;
	?>
<?php
	get_template_part( 'template-parts/contact', 'all' );
	get_footer();
