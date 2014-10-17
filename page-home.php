<?php
/**
* Template Name: Home Page
*
* Description: Twenty Twelve loves the no-sidebar look as much as
* you do. Use this page template to remove the sidebar from any page.
*
* Tip: to remove the sidebar from all posts and pages simply remove
* any active widgets from the Main Sidebar area, and the sidebar will
* disappear everywhere.
*
* @package WordPress
* @subpackage Twenty_Twelve
* @since Twenty Twelve 1.0
*/

//wp_enqueue_script( 'twentyeleven-showcase', get_template_directory_uri() . '/js/search.js', array( 'jquery' ), '2013-07-10' );

get_header(); ?>




	<div id="main">

		<div id="primary">
			<div id="content" class="fullWidth" role="main">




				<!-- CALS News Content Box -->





				<?php
				wp_reset_query();
				$my_query = new WP_Query( 'paged=' . get_query_var( 'page' ) );
				while ( $my_query->have_posts() ) : $my_query->the_post(); ?>


<?php if( have_rows('home_page_feature') ):

     // loop through the rows of data
    while ( have_rows('home_page_feature') ) : the_row();

        if( get_row_layout() == 'full_width_container' ): ?>

          <div class="row clearfix">




						<div class="span-100 box dropin">

							<?php if( function_exists('get_field') && get_sub_field('promotion_image') ):

								$attachment_id = get_sub_field('promotion_image'); $size = "large";
								$image = wp_get_attachment_image_src($attachment_id, $size);

								$backgroundImg = "background: url('" . $image[0] . "') no-repeat; background-size: auto 100%; background-position: center center";
								$slide = '<img height="' . $image[1] . '" width="' . $image[2] . '" src="' . $image[0] . '" alt=" ">';
								echo $slide;
							endif; ?>


							<div class="boxContent">
															<h3 class="spotlight_title"><a href="<?php the_sub_field('promotion_link'); ?>" rel="bookmark" title="Permanent Link to Title"><?php the_sub_field('promotion_title'); ?></a> </h3>
															<p><?php the_sub_field('promotion_caption'); ?></p>
																										</div>
																		<div class="topShade"></div>
											<div class="bottomShade"></div>









										<div class="windows8">
											<div class="wBall" id="wBall_1">
											<div class="wInnerBall">
											</div>
											</div>
											<div class="wBall" id="wBall_2">
											<div class="wInnerBall">
											</div>
											</div>
											<div class="wBall" id="wBall_3">
											<div class="wInnerBall">
											</div>
											</div>
											<div class="wBall" id="wBall_4">
											<div class="wInnerBall">
											</div>
											</div>
											<div class="wBall" id="wBall_5">
											<div class="wInnerBall">
											</div>
											</div>
										</div>

										<div class="shade"></div>

									</div>



          </div>

        <?php endif;


				if( get_row_layout() == '2_column_container' ): ?>

					<div class="row clearfix">


						<?php if( function_exists('get_field') && get_sub_field('2_column_image_1') ) { ?>
								<div class="span-50 box dropin2">
								<?php } else { ?>
								<div class="span-50 box dropin2 noImage">
							<?php } ?>

						

							<?php if( function_exists('get_field') && get_sub_field('2_column_image_1') ):

								$attachment_id = get_sub_field('2_column_image_1'); $size = "medium";
								$image = wp_get_attachment_image_src($attachment_id, $size);

								$backgroundImg = "background: url('" . $image[0] . "') no-repeat; background-size: auto 100%; background-position: center center";
								$slide = '<img height="' . $image[1] . '" width="' . $image[2] . '" src="' . $image[0] . '" alt=" ">';
								echo $slide;
							endif; ?>

							<h2><?php the_sub_field('2_column_linktitle_1'); ?></h2>

							<div class="boxContent">

															<?php the_sub_field('2_column_caption_1'); ?>
																										</div>
																		<div class="topShade"></div>
											<div class="bottomShade"></div>


<a href="<?php the_sub_field('2_column_link_1'); ?>" class="moreButton">More <?php the_sub_field('2_column_linktitle_1'); ?></a>






										<div class="windows8">
											<div class="wBall" id="wBall_1">
											<div class="wInnerBall">
											</div>
											</div>
											<div class="wBall" id="wBall_2">
											<div class="wInnerBall">
											</div>
											</div>
											<div class="wBall" id="wBall_3">
											<div class="wInnerBall">
											</div>
											</div>
											<div class="wBall" id="wBall_4">
											<div class="wInnerBall">
											</div>
											</div>
											<div class="wBall" id="wBall_5">
											<div class="wInnerBall">
											</div>
											</div>
										</div>

										<div class="shade"></div>

									</div>

							<?php if( function_exists('get_field') && get_sub_field('2_column_image_2') ) { ?>
								<div class="span-50 box dropin3">
								<?php } else { ?>
								<div class="span-50 box dropin3 noImage">
							<?php } ?>

									

										<?php if( function_exists('get_field') && get_sub_field('2_column_image_2') ):

											$attachment_id = get_sub_field('2_column_image_2'); $size = "medium";
											$image = wp_get_attachment_image_src($attachment_id, $size);

											$backgroundImg = "background: url('" . $image[0] . "') no-repeat; background-size: auto 100%; background-position: center center";
											$slide = '<img height="' . $image[1] . '" width="' . $image[2] . '" src="' . $image[0] . '" alt=" ">';
											echo $slide;
										endif; ?>

										<h2><?php the_sub_field('2_column_linktitle_2'); ?></h2>


										<div class="boxContent">

																	<?php the_sub_field('2_column_caption_2'); ?>
																													</div>
																					<div class="topShade"></div>
														<div class="bottomShade"></div>



														<a href="<?php the_sub_field('2_column_link_2'); ?>" class="moreButton">More <?php the_sub_field('2_column_linktitle_2'); ?></a>





													<div class="windows8">
														<div class="wBall" id="wBall_1">
														<div class="wInnerBall">
														</div>
														</div>
														<div class="wBall" id="wBall_2">
														<div class="wInnerBall">
														</div>
														</div>
														<div class="wBall" id="wBall_3">
														<div class="wInnerBall">
														</div>
														</div>
														<div class="wBall" id="wBall_4">
														<div class="wInnerBall">
														</div>
														</div>
														<div class="wBall" id="wBall_5">
														<div class="wInnerBall">
														</div>
														</div>
													</div>

													<div class="shade"></div>

												</div>


					</div>

				<?php endif;


				if( get_row_layout() == '3_column_container' ): ?>

					<div class="row clearfix">

						<?php if( function_exists('get_field') && get_sub_field('3_column_image_1') ) { ?>
								<div class="span-33 box dropin2">
								<?php } else { ?>
								<div class="span-33 box dropin2 noImage">
							<?php } ?>


						

							<?php if( function_exists('get_field') && get_sub_field('3_column_image_1') ):

								$attachment_id = get_sub_field('3_column_image_1'); $size = "medium";
								$image = wp_get_attachment_image_src($attachment_id, $size);

								$backgroundImg = "background: url('" . $image[0] . "') no-repeat; background-size: auto 100%; background-position: center center";
								$slide = '<img height="' . $image[1] . '" width="' . $image[2] . '" src="' . $image[0] . '" alt=" ">';
								echo $slide;
							endif; ?>

							<h2><?php the_sub_field('3_column_linktitle_1'); ?></h2>

							<div class="boxContent">

															<?php the_sub_field('3_column_caption_1'); ?>
																										</div>
																		<div class="topShade"></div>
											<div class="bottomShade"></div>


<a href="<?php the_sub_field('3_column_link_1'); ?>" class="moreButton">More <?php the_sub_field('3_column_linktitle_1'); ?></a>






										<div class="windows8">
											<div class="wBall" id="wBall_1">
											<div class="wInnerBall">
											</div>
											</div>
											<div class="wBall" id="wBall_2">
											<div class="wInnerBall">
											</div>
											</div>
											<div class="wBall" id="wBall_3">
											<div class="wInnerBall">
											</div>
											</div>
											<div class="wBall" id="wBall_4">
											<div class="wInnerBall">
											</div>
											</div>
											<div class="wBall" id="wBall_5">
											<div class="wInnerBall">
											</div>
											</div>
										</div>

										<div class="shade"></div>

									</div>

									<?php if( function_exists('get_field') && get_sub_field('3_column_image_2') ) { ?>
								<div class="span-33 box dropin3">
								<?php } else { ?>
								<div class="span-33 box dropin3 noImage">
							<?php } ?>
									

										<?php if( function_exists('get_field') && get_sub_field('3_column_image_2') ):

											$attachment_id = get_sub_field('3_column_image_2'); $size = "medium";
											$image = wp_get_attachment_image_src($attachment_id, $size);

											$backgroundImg = "background: url('" . $image[0] . "') no-repeat; background-size: auto 100%; background-position: center center";
											$slide = '<img height="' . $image[1] . '" width="' . $image[2] . '" src="' . $image[0] . '" alt=" ">';
											echo $slide;
										endif; ?>

										<h2><?php the_sub_field('3_column_linktitle_2'); ?></h2>


										<div class="boxContent">

																	<?php the_sub_field('3_column_caption_2'); ?>
																													</div>
																					<div class="topShade"></div>
														<div class="bottomShade"></div>



														<a href="<?php the_sub_field('3_column_link_2'); ?>" class="moreButton">More <?php the_sub_field('3_column_linktitle_2'); ?></a>





													<div class="windows8">
														<div class="wBall" id="wBall_1">
														<div class="wInnerBall">
														</div>
														</div>
														<div class="wBall" id="wBall_2">
														<div class="wInnerBall">
														</div>
														</div>
														<div class="wBall" id="wBall_3">
														<div class="wInnerBall">
														</div>
														</div>
														<div class="wBall" id="wBall_4">
														<div class="wInnerBall">
														</div>
														</div>
														<div class="wBall" id="wBall_5">
														<div class="wInnerBall">
														</div>
														</div>
													</div>

													<div class="shade"></div>

												</div>

												<?php if( function_exists('get_field') && get_sub_field('3_column_image_3') ) { ?>
								<div class="span-33 box dropin4">
								<?php } else { ?>
								<div class="span-33 box dropin4 noImage">
							<?php } ?>

												

										<?php if( function_exists('get_field') && get_sub_field('3_column_image_3') ):

											$attachment_id = get_sub_field('3_column_image_3'); $size = "medium";
											$image = wp_get_attachment_image_src($attachment_id, $size);

											$backgroundImg = "background: url('" . $image[0] . "') no-repeat; background-size: auto 100%; background-position: center center";
											$slide = '<img height="' . $image[1] . '" width="' . $image[2] . '" src="' . $image[0] . '" alt=" ">';
											echo $slide;
										endif; ?>

										<h2><?php the_sub_field('3_column_linktitle_3'); ?></h2>


										<div class="boxContent">

																	<?php the_sub_field('3_column_caption_3'); ?>
																													</div>
																					<div class="topShade"></div>
														<div class="bottomShade"></div>



														<a href="<?php the_sub_field('3_column_link_3'); ?>" class="moreButton">More <?php the_sub_field('3_column_linktitle_3'); ?></a>





													<div class="windows8">
														<div class="wBall" id="wBall_1">
														<div class="wInnerBall">
														</div>
														</div>
														<div class="wBall" id="wBall_2">
														<div class="wInnerBall">
														</div>
														</div>
														<div class="wBall" id="wBall_3">
														<div class="wInnerBall">
														</div>
														</div>
														<div class="wBall" id="wBall_4">
														<div class="wInnerBall">
														</div>
														</div>
														<div class="wBall" id="wBall_5">
														<div class="wInnerBall">
														</div>
														</div>
													</div>

													<div class="shade"></div>

												</div>


					</div>

				<?php endif;


    endwhile;

else :

    // no layouts found

endif;

?>

<?php endwhile; // end of the loop. ?>





				<div class="row clearfix">

					<div class="span-50 box dropin3">
							<h2>Announcements</h2>

							<?php switch_to_blog(19); ?>
<?php query_posts("cat=12&posts_per_page=1"); ?>
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post();  ?>

	<?php	if ( has_post_thumbnail() ) {

								//the_post_thumbnail();
								echo get_the_post_thumbnail($page->ID, 'large');

								} else {

							//echo '<img src="';
							echo catch_that_announcements_image();
							// echo '" alt="" />';

						} ?>
			<div class="boxContent">
											<h3 class="spotlight_title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a> </h3>
											<p><?php the_time('l, F jS, Y') ?></p>
																						</div>
														<div class="topShade"></div>
							<div class="bottomShade"></div>






	<?php endwhile; ?>
<?php endif; ?>
<?php restore_current_blog(); ?>
							<a href="http://ecals.cals.wisc.edu" class="moreButton">More Announcements</a>
						<div class="windows8">
							<div class="wBall" id="wBall_1">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_2">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_3">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_4">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_5">
							<div class="wInnerBall">
							</div>
							</div>
						</div>

						<div class="shade"></div>
					</div>

					<div class="span-50 box eventsBox dropin4">
							<h2>Events</h2>
							<img src="<?php echo get_template_directory_uri(); ?>/images/aghall1.jpg" alt=" ">
							<div class="boxContent">


	<?php uwmadison_events('http://www.today.wisc.edu/events/feed/30', array('limit' => 2)) ?>




																						</div>
														<div class="topShade"></div>
							<div class="bottomShade"></div>

								<a href="http://www.today.wisc.edu/events/feed/30" class="moreButton">More Events</a>

								<div class="windows8">
							<div class="wBall" id="wBall_1">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_2">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_3">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_4">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_5">
							<div class="wInnerBall">
							</div>
							</div>
						</div>

						<div class="shade"></div>

					</div>



				</div>

			</div><!-- #content -->

			<div class="clear"></div>
		</div><!-- #primary -->

	</div>
<?php get_footer(); ?>

</div>
