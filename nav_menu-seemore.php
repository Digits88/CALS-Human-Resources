<?php
	
	//hold original $post object in temp var
	$tmp_post = $post;
	
	//get children of current page
	//$child_pages = get_pages('child_of='.$post->ID.'&parent='.$post->ID.'&hierarchical=0&post_type=page&sort_column=menu_order&sort_order=ASC');

	$child_page_args = array(
	'sort_order' => 'asc',
	'sort_column' => 'post_title',
	'hierarchical' => 1,
	'exclude' => '',
	'include' => '',
	'meta_key' => '',
	'meta_value' => '',
	'authors' => '',
	'child_of' => $post->ID,
	'parent' => -1,
	'exclude_tree' => '',
	'number' => '',
	'offset' => 0,
	'post_type' => 'page',
	'post_status' => 'publish'
	); 
	
	$pages = get_pages($child_page_args); 


	if(!empty($pages)){?>
		<div class="seemoreMenu">
		
        <ul id="nav_explore">
			
			<?php
            foreach($pages as $post){
            	setup_postdata($post);?>
           			<li class="page_item page-item-<?php the_ID();?>">
               			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><h6><?php the_title(); ?></h6><?php 
						
						//Remove "read more" link from excerpt and then output it. 
						//Note: could do it by removing  get_excerpt filter, but 
						//for some reason it's not working. Need to research it more.
						//echo preg_replace('/(<a\b[^>]*)>Read more <span class="meta-nav">&raquo;<\/span><\/a>/', '', get_the_excerpt());?>
						<?php echo get_the_excerpt(); ?>
						</a>
                     </li>
            <?php } ?>
            </ul><!-- #nav_explore --> 
		</div>   
	<?php 
	}

	//restore original $post object
	$post = $tmp_post;
?>