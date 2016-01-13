<?php get_header() ?>
	<div id="container" class="main-area">
		<div id="content">
<?php while (have_posts()) : the_post() ?>

			<section id="post-<?php the_ID() ?>" class="c-post-listing <?php sandbox_post_class() ?>" role="main">
                <?php the_post_thumbnail() ?>
				<div class="c-post-listing__entry-content">
                    <header>
                        <h1><a href="<?php the_permalink() ?>" title="<?php printf( __('Permalink to %s', 'sandbox'), the_title_attribute('echo=0') ) ?>" rel="bookmark"><?php the_title() ?></a></h1>
                        <span class="c-post-listing__entry-date"><abbr class="published" title="<?php the_time('Y-m-d') ?>"><?php unset($previousday); printf( __( '%1$s &#8211; %2$s', 'sandbox' ), the_time('jS F, Y') ) ?></abbr></span>
                        <span class="c-post-listing__category"><?php the_category() ?></span>
                        <span class="c-post-listing__comments-link"><?php comments_popup_link( __( 'Comments (0)', 'sandbox' ), __( 'Comments (1)', 'sandbox' ), __( 'Comments (%)', 'sandbox' ) ) ?></span>
                    </header>
                    <?php the_excerpt( __( '', 'sandbox' ) ) ?>
                    <a class="c-post-listing__read-more o-btn" href="<?php the_permalink() ?>">Read More&hellip;</a>
                    <?php edit_post_link( __( 'Edit', 'sandbox' ), "\t\t\t\t\t<span class=\"c-post-listing__edit-link o-btn\">") ?>
				    <?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'sandbox' ) . '&after=</div>') ?>
				</div>
				<div class="c-post-listing__entry-meta">






				</div>
			</section><!-- .post -->

<?php comments_template() ?>

<?php endwhile; ?>



		</div><!-- #content -->
	</div><!-- #container -->

<?php get_sidebar() ?>
<?php get_footer() ?>