<?php
/**
 * The template for displaying all pages.
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

				<div id="prof_s_wrapper" ><input id="prof_s" class="field" type="text" placeholder="Filter Staff" name="s_profiles"></div>
				
				<div class="filtered2">

				<?php $args = array( 'post_type' => 'staff', 'meta_key' => 'last_name', 'posts_per_page' => 200, 'orderby' => 'last_name', 'order' => 'ASC' );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<li class="item clearfix">
						<?php get_template_part( 'content', 'directory' ); ?>
					</li>
					

				<?php endwhile; // end of the loop. ?>
				</div>
				
			</div><!-- #content -->
			<?php get_sidebar(); ?>
			
			<style>
	.hidden {
		display: none;
	}	
</style>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
			$(function(){			
		
		
		
		
		//Regular Expression Search Filter Auto Complete
		$("#prof_s").keyup(function () {
			var filter = $(this).val(), count = 0;
			var resultscounted = 0;
			//console.log(filter);
			
		        //console.log("s");    
			$(".filtered2 li.item").each(function () {
				//console.log($(this).text().search(new RegExp(filter, "i")));
		        if ($(this).text().search(new RegExp(filter, "i")) < 0) {
			        
			        $(this).addClass("hidden"); 
			        $(this).removeClass("visible"); 
			       
			        
		        } else {
				
					
					
			
				
		            $(this).removeClass("hidden");
		            $(this).addClass("visible");
		            
		          
		            
		            count++;
		           
		            
		        }
		    });
		   
		
		
		   });
		   
		   });
				</script>
			
			<div class="clear"></div>
			
		</div><!-- #primary -->

	</div>
<?php get_footer(); ?>

</div>