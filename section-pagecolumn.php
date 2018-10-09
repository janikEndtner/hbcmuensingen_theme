<?php if ( is_home() || is_front_page() ) { ?>

<?php $hidefourbxsec = of_get_option('hidefourbxsec', '1'); ?>
		<?php if($hidefourbxsec == ''){ ?>                    
<section id="pagearea">
  <div class="container"> 
		<?php
			$title_arr = array( esc_attr__('Market Research','milestonez-pro'), esc_attr__('24/7 Supports','milestonez-pro'),  esc_attr__('Digital Payments ','milestonez-pro'), esc_attr__('Expert Opinion','milestonez-pro'));
			$boxArr = array();
			   if( of_get_option('box1',true) != '' ){
				$boxArr[] = of_get_option('box1',false);
			   }
			   if( of_get_option('box2',true) != '' ){
				$boxArr[] = of_get_option('box2',false);
			   }
			   if( of_get_option('box3',true) != '' ){
				$boxArr[] = of_get_option('box3',false);
			   }
			   if( of_get_option('box4',true) != '' ){
				$boxArr[] = of_get_option('box4',false);
			   }
			   if( of_get_option('box5',true) != '' ){
				$boxArr[] = of_get_option('box5',false);
			   }
			    if( of_get_option('box6',true) != '' ){
				$boxArr[] = of_get_option('box6',false);
			   }			   			  
			
			
			if (!array_filter($boxArr)) {
			for($fx=1; $fx<=4; $fx++) {
			?>
            <div class="fourbox <?php if($fx % 4 == 0) { echo "last_column"; } ?>">
             
            <div class="thumbbx"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/services-icon<?php echo $fx; ?>.jpg" alt="" /></a></div>
             <div class="pagecontent">
             <a href="#"><h3><?php echo $title_arr[$fx-1]; ?></h3></a>             
             <p><?php _e('Phasellus nec metus scelerisque, feugiat est quis, vestibulum ante. Proin id vehicula enim. Pellentesque habitant...', 'milestonez-pro') ?></p> 
             <?php if( of_get_option('readmorebutton',true) != '') { ?>
               <a class="pagemore" href="#"><?php echo of_get_option('readmorebutton'); ?></a>      
			 <?php } ?>
             </div>
         	</div>
			<?php 
			} 
			} else {			
				$box_column = array('no_column','one_column','two_column','three_column','four_column','five_column','six_column');
				$fx = 1;				
				$queryvar = new wp_query(array('post_type' => 'page', 'post__in' => $boxArr, 'posts_per_page' => 6, 'orderby' => 'post__in' ));				
				while( $queryvar->have_posts() ) : $queryvar->the_post(); ?> 
        	    <div class="fourbox <?php echo $box_column[count($boxArr)]; ?> <?php if($fx % count($boxArr) == 0) { echo "last_column"; } ?>">
				<?php if( of_get_option('boximg'.$fx, true) != '') { ?>	
                <div class="thumbbx"><a href="<?php the_permalink(); ?>"><img alt="" src="<?php echo esc_url( of_get_option( 'boximg'.$fx, true )); ?>" / ></a></div>
                <?php } ?>
                <div class="pagecontent">
                 <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                 <p><?php echo wp_trim_words( get_the_content(), of_get_option('pageboxlength'), '' ); ?></p>
				  <?php if( of_get_option('readmorebutton',true) != '') { ?>
                   <a class="pagemore" href="<?php the_permalink(); ?>"><?php echo of_get_option('readmorebutton'); ?></a>      
				  <?php } ?>
                </div>
        	   </div>
             <?php 
			 $fx++; 
			 endwhile;
			 wp_reset_postdata();
			 }		
		 ?>  
         
        <div class="clear"></div>
    </div><!-- .container -->
</section><!-- #pagearea -->
<?php } ?>

<?php } ?>