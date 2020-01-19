<?php 
/*
 * Author Template File.
 */
get_header(); ?>
<section>
    <div class="breadcumb-bg">
	<div class="deserve-container container">
    	<div class="site-breadcumb">
			<div class="row">
			 <div class="col-md-6 col-sm-6">
               <h1>
				<?php printf(/* translators: %1$s is Author name */
                        esc_html__( 'Author : %1$s', 'deserve' ),                    
                        esc_html( get_the_author() )
                    ); ?>
                </h1>
        	</div>
        	 <div class="col-md-6 col-sm-6">
				<ol class="breadcrumb breadcrumb-menubar">
			   <?php if (function_exists('deserve_custom_breadcrumbs')) deserve_custom_breadcrumbs(); ?>
				</ol>
			</div>
			</div>
        </div>
    </div>
    </div>
    <div class="deserve-container">       
        <div class="col-md-9 col-sm-8  dblog">        
          <?php while ( have_posts() ) : the_post(); ?>            
             <div class="blog-box">            	
            	<?php  if(has_post_thumbnail()) { ?>
                    <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('large'); ?>
                    </a>
                <?php } ?>
                   <div class="post-data">
					<a href="<?php the_permalink(); ?>" class="blog-title"><?php the_title(); ?></a>   
					 <div class="post-meta">
						<ul>
							<?php if (function_exists('deserve_entry_meta')) deserve_entry_meta(); ?>
						</ul>                    
                    </div>
                     <?php the_excerpt(); ?>
                </div>          
            </div>
         <?php endwhile;  ?>
            <div class="gallery-pagination blog-pagination">
                <ul>
					<li class="link_pagination" >
					<?php deserve_pagination(); ?>
				</li>
                </ul>
            </div>
        </div>
    <?php get_sidebar(); ?> 
    </div>
</section>
<?php get_footer(); ?>