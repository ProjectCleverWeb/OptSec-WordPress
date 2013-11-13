<?php get_header(); ?>
				
				<div class="ui stackable grid" id="page-grid">
					<div class="twelve wide column" id="main-content">
						
						<?php
						$article_count = 0;
						if (have_posts()) : while (have_posts()) : the_post();
						$is_sticky = is_sticky($post->ID);
						
						$article_count++;
						
						?>
						<article id="post id <?php the_ID(); ?>" <?php post_class(); ?> role="article">
							<div <?php
								if($is_sticky) {
									echo "class=\"ui top attached segment\"";
								} else {
									echo "class=\"ui top attached primary segment\"";
								}
								?> >
								<header class="article header">
									<?php
									$post_title = trim(get_the_title());
									$post_has_title = (!empty($post_title));
									
									if ($post_has_title) {
									?>
									<h3 class="ui dividing header">
										<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
											<?php the_title(); ?>
										</a>
									</h3>
									<?php
									} else {
									?>
									
									<?php
									}
									?>
								</header><!-- /.article.header -->
								
								<section class="article content">
									<?php if ( has_post_thumbnail()) { ?>
									<a href="<?php the_permalink(); ?>">
										<?php $post_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
										<img class="article featured image" src="<?php echo $post_image[0]; ?>" title="<?php the_title_attribute(); ?>">
									</a>
									<?php } ?>
									<p><?php echo get_the_excerpt(); ?></p>
								</section><!-- ./article.content -->
							</div>
							
							<footer class="ui bottom attached stacked secondary segment article footer">
								<?php
								if (!$is_sticky && has_tag()) {
								?>
								<p class="tags">
									<?php the_tags( '<span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '' ); ?>
								</p>
								<?php } ?>
								<p class="byline vcard">
									<img class="ui avatar image post avatar" src="http://semantic-ui.com/images/demo/photo2.jpg">
									<?php
										if ($is_sticky) {
											$fstr = 'Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span>';
										} else {
											$fstr = 'Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span> and filed under %4$s.';
										}
										printf(
											__($fstr, 'bonestheme'),
											get_the_time('Y-m-j'),
											get_the_time(get_option('date_format')),
											bones_get_the_author_posts_link(),
											get_the_category_list(', ')
										);
									?>
								</p>
							</footer> <!-- /.article.footer -->
							<?php // comments_template(); // uncomment if you want to use them ?>
						</article> <!-- /article -->
						<?php endwhile;
						
						bones_page_navi();
						
						else : // for IF(have_posts()) ?>
						<article id="post-not-found" class="hentry">
							<header class="article-header">
								<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
							</header>
							
							<section class="entry-content">
								<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
							</section>
							
							<footer class="article-footer">
								<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
							</footer>
						</article>
						<?php endif; // for IF(have_posts()) ?>
						
						
						
						
						
					</div><!-- /#main-content -->
					<div class="four wide column" id="sidebar-content">
						
						
<?php get_sidebar(); ?>
						
						
					</div><!-- /#sidebar-content -->
				</div><!-- /#page-grid -->
				
<?php get_footer(); ?>
