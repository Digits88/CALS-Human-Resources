<?php
/**
 * Template Name: See More
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 * @package WordPress
 * @subpackage CALSv1
 * @since CALS 1.0
 */

get_header(); ?>


	<div id="main">

		<div id="primary">
		
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>
				
				<?php 
	//find all of the parents to the post
	$current_page_ancestors = get_post_ancestors($post);
	
	$tmp_post = $post;
	$reverted = new ArrayIterator(array_reverse($current_page_ancestors));
	
	if(sizeof($reverted) > 0){?>
		<div class="breadcrumb">
		<?php
		foreach ($reverted as $post){?>
			<div class="breadcrumb_item">
				<span class="nav_arrow"><svg height="512px" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="160,115.4 180.7,96 352,256 180.7,416 160,396.7 310.5,256 "/></svg></span>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</div>
		<?php
		}
		$post = $tmp_post;
		?>
			<div class="breadcrumb_item">
				<span class="nav_arrow"><svg height="512px" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="160,115.4 180.7,96 352,256 180.7,416 160,396.7 310.5,256 "/></svg></span>
				<span class="curr_page"><?php the_title(); ?></span>
			</div>
		</div>
	
	<?php
	}
		
	// Done. restore original $post
	$post = $tmp_post;
?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php get_template_part('nav_menu', 'seemore');?>

					<?php //comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>
				
			</div><!-- #content -->
			<?php get_sidebar(); ?>
			
			<div class="clear"></div>
			
		</div><!-- #primary -->

	</div>
<?php get_footer(); ?>

</div>