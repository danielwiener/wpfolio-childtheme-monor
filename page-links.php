<?php
/*
Template Name: Page of Links
*/

/**
 * The template for displaying a page with links, created in the links admin of Wordpress.
 *
 * @package WordPress
 * @subpackage Mandy
 * @since Mandy 1.0
 */
?>

<?php
    // calling the header.php
    get_header(); 

?>

<!-- generated with page.php -->
   
<!-- begin page -->    
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<div id="content"> 
	
	<div class="<?php wp_title('',true,'');  ?>">

		<h2 class="pagetitle"><a href="<?php the_permalink() ?>" title="Permalink"><?php the_title(); ?></a></h2>
		
         			<ul id='dw_links'>

			<?php 

			$args = array('show_description' => 1,
			'between' => '<br />&nbsp;&nbsp;--',
			'category_order' => 'DESC');
			wp_list_bookmarks($args);
			?>  
			</ul>

	</div><!-- .page[title] -->
</div><!-- #content -->
   

    

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.', 'wpfolio'); ?></p>
<?php endif; ?>

<!-- end page -->     

<?php     

	// calling footer.php
    get_footer();

?>