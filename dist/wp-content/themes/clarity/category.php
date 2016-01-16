<?php get_header() ?>
	<section id="container" class="main-area">
        <header>
            <h1 class="page-title"><span><?php single_cat_title() ?></span></h1>
            <?php $categorydesc = category_description(); if ( !empty($categorydesc) ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . $categorydesc . '</div>' ); ?>
        </header>
		<div id="content">
        <?php while ( have_posts() ) : the_post() ?>
			<?php $imgClass = (has_post_thumbnail($post_id)) ? "has-image " : "no-image "; ?>
                <section id="post-<?php the_ID() ?>" class="c-post-listing <?php sandbox_post_class() ?> <?php echo $imgClass; ?>" role="main">
                    <?php if(has_post_thumbnail($post_id)) {
                        the_post_thumbnail();
                     } else {

                     }?>
                    <div class="c-post-listing__entry-content">
                        <header>
                            <h1><a href="<?php the_permalink() ?>" title="<?php printf( __('Permalink to %s', 'sandbox'), the_title_attribute('echo=0') ) ?>" rel="bookmark"><?php the_title() ?></a></h1>
                            <span class="c-post-listing__entry-date"><abbr class="published" title="<?php the_time('Y-m-d') ?>"><?php the_time('jS F, Y'); ?></abbr></span>
                            <span class="c-post-listing__category"><?php the_category() ?></span>
                            <span class="c-post-listing__comments-link"><?php comments_popup_link( __( 'Comments (0)', 'sandbox' ), __( 'Comments (1)', 'sandbox' ), __( 'Comments (%)', 'sandbox' ) ) ?></span>
                        </header>
                        <?php the_excerpt( __( '', 'sandbox' ) ) ?>
                        <a class="c-post-listing__read-more o-btn" href="<?php the_permalink() ?>">Read More&hellip;</a>
                        <?php edit_post_link( __( 'Edit', 'sandbox' ), "\t\t\t\t\t<span class=\"c-post-listing__edit-link o-btn\">") ?>
                        <?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'sandbox' ) . '&after=</div>') ?>
                    </div>
            			</section>
            <?php comments_template() ?>
<?php endwhile; ?>
		</div>
	</section>
<?php get_footer() ?>