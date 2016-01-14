<?php get_header() ?>

	<div id="container" class="main-area">
		<div id="content">

<?php the_post() ?>
			<article id="post-<?php the_ID() ?>" class="c-article <?php sandbox_post_class() ?>">
				<h1 class="entry-title"><?php the_title() ?></h1>
				<span class="c-article__post-meta">Posted <?php the_date(); ?> by <?php the_author_link(); ?></span>
                    <?php the_content() ?>
                    <?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'sandbox' ) . '&after=</div>') ?>
				</div>
			</article>

<?php comments_template() ?>

		</div><!-- #content -->
	</div><!-- #container -->
<?php get_footer() ?>