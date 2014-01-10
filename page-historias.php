<?php /* Template name: Historias */ get_header(); ?>

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

	<div id="conteudo-historias">
		<div id="container">
		<div id="content" role="main">
		

<?php query_posts("showposts=1&cat=6"); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div id="o-titulo"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><h1><?php the_title(); ?></h1></a></div>

<div id="o-conteudo"><?php the_content(); ?></div>

<?php endwhile; else: ?>

<p>Não existem posts nesta categoria</p>

<?php endif; ?>

			</div><!-- #content -->
		</div><!-- #container -->
	</div><!-- #conteudo-historias -->
	<?php get_sidebar(); ?>
	<div id="falsadiv"></div>
<?php get_footer(mundial); ?>