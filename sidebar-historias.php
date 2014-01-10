


<div id="historias-menu">
	<div id="historias-topo">
	</div> <!--  fecha historias-topo  -->
	<div id="historias-links">

	<ul>
<?php
query_posts("showposts=10&cat=7");
if ( have_posts() ) : while ( have_posts() ) : the_post();
   ?><li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><? the_title(); ?></a></li>
<?php
endwhile;
else:
   ?><li>Não existem posts nesta categoria!</li><?php
endif;
?>
</ul>
	
	</div><!-- fecha historias-links -->
	<div id="historias-rodape">
	</div><!-- fecha historias-rodape -->
</div><!--  fecha historias-menu -->

