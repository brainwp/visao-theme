<?php /* Template name: Inicial */ get_header(inicial); ?>

		<div id="botoes-inicial">
        
        	<div id="botao-um"><a href="<?php echo home_url( '/inicial' ); ?>"></a></div>
            <div id="botao-dois"><a href="<?php echo home_url( '/mundo' ); ?>" title="Mundo"></a></div>
            <div id="botao-tres"><a href="<?php echo home_url( '/dados' ); ?>" title="Dados"></a></div>

		</div><!-- #botoes-inicial -->

			<div id="conteudo-inicial">
		<div id="container">
			<div id="content" role="main">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php if ( is_front_page() ) { ?>
						<h2 class="entry-title"><?php the_title(); ?></h2>
					<?php } else { ?>
						<h1 class="entry-title"><?php the_title(); ?></h1>
					<?php } ?>

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->

				<?php comments_template( '', true ); ?>

<?php endwhile; ?>

			</div><!-- #content -->
		</div><!-- #container -->
	</div><!-- #conteudo inicial-->
		
	<?php get_sidebar(); ?>
	<div id="falsadiv"></div>
<?php get_footer( mundial ); ?>