<?php
/**
 * The template used for displaying page content in page.php
 * @package WordPress
 * @subpackage CALSv1
 * @since CALS 1.0
 */
?>
<div class="profileSummary" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( is_home() ) : ?>
	
	<?php else: ?>
	
						
									
		<div class="textCopy profileColumn1">
		<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_field('first_name'); ?> <?php the_field('last_name'); ?></a></h3>
		<div><?php the_field('program'); ?></div>
	</div>

	<?php endif; ?>
<div class="textCopy profileColumn2">
	<div class="entry-content">
		<?php if(get_field('position_title')) { ?>
		<div class="row"><?php the_field('position_title'); ?></div>
		<?php } ?>
		
		<?php if(get_field('phone_number')) { ?>
		<div class="row"><div class="subTitle">Phone</div><?php the_field('phone_number'); ?></div>
		<?php } ?>
		
		<?php if(get_field('email_address')) { ?>
		<div class="row"><div class="subTitle">Email</div><a href="mailto:<?php the_field('email_address'); ?>"><?php the_field('email_address'); ?></a></div>
		<?php } ?>
		
		<?php if(get_field('office_location')) { ?>
		<div class="row"><div class="subTitle">Office</div><?php the_field('office_location'); ?></div>
		<?php } ?>
		
		
		
		
		
		<?php //wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'uwmadison' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
</div>
	<div class="textCopy profileColumn3">
		<?php if(get_field('contact_department')) { ?>
		<div class="row"><div class="subTitle">Contacts By Department</div>
			<?php the_field('contact_department'); ?>
			</div>
		<?php } ?>
	</div>
	
	
	<footer class="entry-meta">
	</footer><!-- .entry-meta -->

</div><!-- #post-<?php the_ID(); ?> -->
