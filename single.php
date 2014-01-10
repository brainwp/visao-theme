<?php if (in_category( 'Histórias' ) ){ ?>

<?php define('WP_USE_THEMES', false); get_header(historias); ?>

<div id="historias-menu">
	<div id="historias-topo">
	</div> <!--  fecha historias-topo  -->
	<div id="historias-links">
<ul> 
<?php $recent = new WP_Query("cat=6&showposts=15"); while($recent->have_posts()) : $recent->the_post();?> <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</li> <?php endwhile; ?> 
</ul>
	</div><!-- fecha historias-links -->
	<div id="historias-rodape">
	</div><!-- fecha historias-rodape -->
</div><!--  fecha historias-menu -->
<div id="chamada-historias"><a href="#"></a></div>

	<div id="conteudo-historias">
		<div id="container">
			<div id="content" role="main">

			<?php
			/* Run the loop to output the post.
			 * If you want to overload this in a child theme then include a file
			 * called loop-single.php and that will be used instead.
			 */
			get_template_part( 'loop', 'single' );
			?>

			</div><!-- #content -->
		</div><!-- #container -->
	</div><!-- #conteudo-historias -->
<?php get_sidebar(); ?>
<div id="falsadiv"></div>
<?php get_footer( mundial ); ?>
<?php } else { ?>
<?php 
/**
 * O Template dos Singles dos Posts
 */
get_header(); ?>
	<div id="conteudo-blog">
		<div id="container">
			<div id="content" role="main">

			<?php
			/* Run the loop to output the post.
			 * If you want to overload this in a child theme then include a file
			 * called loop-single.php and that will be used instead.
			 */
			get_template_part( 'loop', 'single' );
			?>

			</div><!-- #content -->
		</div><!-- #container -->
	</div><!-- #conteudo-blog -->
<?php get_sidebar(); ?>
<div id="falsadiv"></div>
<?php get_footer( urbano ); ?>
<?php } ?>
