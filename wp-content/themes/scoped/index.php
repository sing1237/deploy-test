<?php
/*
	Template Name: Home
*/
get_header();
global $post;
if(have_posts()) :  while(have_posts()) : the_post(); ?> 

<?php
	if ( has_post_thumbnail() ) 
	{
		$imageArray = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),'banner_size' );
		$image  = $imageArray[0];
	} 
	else 
	{ 
		$image ="http://placehold.it/1440x533&amp;text=No image found";
	}
?>  
  
<!-- Bnaner -->

<section class="home-banner banner">
    <div class="container">
        <div  class="banner-inn" style="background-image: url('<?php echo $image; ?>"></div>
    </div>
</section>
 

<section class="banner-bottom-sec">
    <div class="cookies-sec">
        <div class="container">
            <div class="cookies-inn">
            <div class="cookies-content">
                <?php the_field('cookies_content'); ?>
            </div>
            <div class="cookies-close">
                <a href="javascript:void(0);" class="cookies-close-btn">
                        <svg class="close_svg" width="14" height="14" viewBox="0 0 14 14">
                            <defs>
                            </defs>
                            <g id="Icon_-_Close" data-name="Icon - Close" transform="translate(1 1)">
                                <path id="Shape" d="M12 0L0 12" class="cls-1"/>
                                <path id="Shape-2" d="M0 0l12 12" class="cls-1" data-name="Shape"/>
                            </g>
                        </svg>
                </a>
            </div>
			</div>
			</div>
		</div>
			<div class="container">
				<div class="title">
					<h2><?php the_field('title'); ?></h2>
				</div>
		<div class="banner-bottom-content">
			<p><?php the_content(); ?></p>
		</div>
		<div class="button_outr">
			<a href="<?php the_field('touch_link'); ?>" class="link-btn">GET IN TOUCH 
				<svg class="arrow_svg" width="18" height="14" viewBox="0 0 18 14">
				<defs>
				</defs>
				<g id="Icon_-_Go" data-name="Icon - Go" transform="translate(1 1)">
					<path id="Shape" d="M0 0h16" class="cls-1" transform="translate(0 6)"/>
					<path id="Shape-2" d="M0 0l6 6-6 6" class="cls-1" data-name="Shape" transform="translate(10)"/>
				</g>
    </svg>
      </a>
    </div>    
    </div>
</section>


<section class="project-sec">
    <div class="container">
        <div class="project-main">
            <ul>
			
			<?php  /* Getting testimonial post data */
				query_posts( array ( 'post_type' =>'testimonials', 'posts_per_page' => -1, 'order' => 'DESC')  ); 
				if( have_posts() ) :
					while ( have_posts() ) : the_post();	 
						if ( has_post_thumbnail() ) 
						{
							$imageArray = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),'testmonial_size' );
							$image  = $imageArray[0];
						} 
						else 
						{ 
							$image ="http://placehold.it/1440x533&amp;text=No image found";
						} ?>
					 <li>
						<div class="project-box">
							<a href="<?php the_permalink(); ?>">
								<figure class="project-figure-box" style="background-image: urL('<?php echo $image; ?>')"></figure>
								<div class="project-overlay">
									<h3>“<?php the_title();?>”</h3>
									<p><?php echo  get_the_date( 'F j, Y' ); ?></p>
								</div>
							</a>
						</div>
					</li>
					 
			<?php $i++;	endwhile; wp_reset_query(); else: ?>
				<p><?php _e('Sorry, no Portfolio found.'); ?></p>
			<?php endif; ?>
			<li>
					<div class="project-box project-upcoming">
						<h3>More coming soon…</h3>
					</div>
				</li>
            </ul>
        </div>
    </div>
</section>
<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<?php
get_footer();
