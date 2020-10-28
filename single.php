<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package seed
 */

get_header(); ?>


<div class="main-header">
	<div class="container">
		<h2 class="main-title"><?php the_title(); ?></h2>
	</div>
</div>

<div class="container">
	<div class ="port col-sm-12">

		<div class="port col-sm-8">

			<div id="primary" class="content-area <?php echo '-'.SEED_BLOG_LAYOUT; ?>">
				<main id="main" class="site-main -hide-title" role="main">
					<?php while ( have_posts() ) : the_post(); ?><?php?>
						
						<div id ="nee" > <?php $Gym = get_field('Gym'); 
						if($Gym==  $any){
							echo $Gym;
						}else{
							echo get_field('Gym');
						}	?>
					</div>
					
					
					<?php get_template_part( 'template-parts/content', 'single' ); ?>

					<?php //the_post_navigation(); ?>

					<?php
				// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
				endif;
				?>
				
				
					
				
				
				
							<div class="classi">
						<p class="servi">
						การบริการ
					</p>
					
						     <?php the_field('service');?>
    
				</div>
				
					
				
			                   <div id ='_description'>   
					<p class="description">
						รายละเอียดการบริการ
					</p>	
					
					<?php		$_description = get_field('_description'); 
					if($_description==  $any){
						echo $_description;
					}else{
						echo get_field('_description');
					}
					?>		
				</div>
					
					
				
				<div id ='history'>      
					<p class="history1">
						ประวัติและผลงาน
					</p>
					<?php		$history = get_field('history'); 
					if($history ==  $any){
						echo $history;
					}else{
						echo get_field('history');
					}
					?>		
				</div>
				
				<div class="vedio01">
					
					
				<p class="vedio">
					Video
				</p>
				<div class="embed-container"> 
					<?php the_field('oembed'); ?>
				</div>
</div>
				
				<p class="vedio">
					Location on Map
				</p>
			
					<?php 
				$location = get_field('location');
				if( !empty($location) ):
					?>
					<div class="acf-map">
						<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
					</div>
				<?php endif; ?>
				
				
				
				<div class="map01">
					
				<?php the_field('map');						
				?>
				</div>
				
				

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>

<div class="port col-sm-4">
	<div id="primary" class="content-area <?php echo '-'.SEED_BLOG_LAYOUT; ?>">
		<main id="main" class="site-main -hide-title" role="main">


			<?php while ( have_posts() ) : the_post(); ?><?php?>
							
				
				
				<div class="pppp">
					<table class="table table-borderless">
						<thead>
							<tr>   
								<th class="name_icon"></th>
								<th class="name_icon">		<div id ='image'>
									<?php	
									$image = get_field('image');
									$size = 'full'; 

									if( $image ) {

										echo wp_get_attachment_image( $image, $size );
									}			 
									if( !empty($image) ): ?>

										<img class="image1"  src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />  

									<?php endif; 	?>		

									<?php if( get_field('image') ): ?>
										<?php endif; ?> </div> </th>
										

									</tr>
								</thead>

								<tbody>
									<tr>
										<td class="j1"> <img src="" class="icon_ppt bed"> <?php echo $bedroom_ppt; ?></td>
										<td class="name">                          
											<?php		$name = get_field('name'); 
											if($name==  $any){
												echo $name;
											}else{
												echo get_field('name');
											}
											?>
										</td></tr>
										<tr>
											<td class="j2"> <img src="https://image.flaticon.com/icons/svg/126/126509.svg" class="icon_ppt bed"> <?php echo $bedroom_ppt; ?></td>
											<td class="number">   
												<?php  $number = get_field('number');
												if($number==  $number){
													echo $number;
												}else{
													echo get_field('number');
												}		
												?> 			   
											</tr>
											<tr>
												<td class="j3"> <img src="https://image.flaticon.com/icons/svg/174/174848.svg" class="icon_ppt bed"> <?php  ?></td>
												<td class="facebook">   <?php		$facebook= get_field('facebook'); 
												if($facebook==  $any){
													echo $facebook;
												}else{
													echo get_field('facebook');
												}	?> </td>
											</tr>
											<tr>
												<td class="j3"> <img src="https://image.flaticon.com/icons/svg/1409/1409946.svg" class="icon_ppt bed"> <?php ?></td>
												
												<td class="instagram">   <?php		$instagram = get_field('instagram');
												if($instagram==  $any){
													echo $instagram;
												}else{
													echo get_field('instagram');
												}		?> 
											</td></tr>
											<tr>
												<td class ="j4"><img src="https://image.flaticon.com/icons/svg/124/124027.svg" class="icon_ppt bed"> <?php  ?>
												
											</td>
											<td class ="line"><?php		$line = get_field('line'); 
											if($line==  $any){
												echo $line;
											}else{
												echo get_field('line');
											}
											?>
										</td>
									</tr>
									<tr>
										<td class ="j5"><img src="https://image.flaticon.com/icons/svg/131/131155.svg" class="icon_ppt bed"> <?php  ?>
									</td>
									<td class="email"> <?php		$email= get_field('email'); 
									if($email==  $any){
										echo $email;
									}else{
										echo get_field('email');
									}
									?>			</td>  </tr>		
									
									
									
									<tr>
										<td class="j6"><img src="https://image.flaticon.com/icons/svg/684/684908.svg" class="icon_ppt bed">  <?php  ?></td>
										<td class="address"> <?php		$address = get_field('address'); 
										if($address==  $any){
											echo $address;
										}else{
											echo get_field('address');
										}
										?>			  </tr>
									</tbody>
								</table>
							</div>
							
			

					
						<?php endwhile; // End of the loop. ?>
			

					</main><!-- #main -->
				</div><!-- #primary -->

			
		</div>	
	</div>
	</div>	<!--container-->
			<?php get_footer(); ?>
