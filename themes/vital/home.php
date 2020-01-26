<?php
/*
*
* Template Name: HomePage
*
*
*/

	get_header(); ?>
	
	<div class="section sectionWhite">
		<div class="container">
			<div class="tickerBox">
			
				<div class="width25">
					<div class="tickerInnerContent">
						<h3 class="tickerUp">
							<?php echo get_theme_mod("vital_first_number_setting"); ?>
						</h3>
						<p>
						<?php echo get_theme_mod("vital_first_status_setting"); ?>
						</p> 
					</div><!-- .tickerInnerContent -->
				</div><!-- .width25 -->
				
				<div class="width25">
					<div class="tickerInnerContent">
						<h3 class="tickerUp">
						<?php echo get_theme_mod("vital_second_number_setting"); ?>
						</h3>
						<p>
						<?php echo get_theme_mod("vital_second_status_setting"); ?>
						</p> 
					</div><!-- .tickerInnerContent -->
				</div><!-- .width25 -->
				
				<div class="width25">
					<div class="tickerInnerContent">
						<h3 class="tickerUp">
						<?php echo get_theme_mod("vital_third_number_setting"); ?>
						</h3>
						<p>
						<?php echo get_theme_mod("vital_third_status_setting"); ?>
						</p> 
					</div><!-- .tickerInnerContent -->
				</div><!-- .width25 -->
				
				<div class="width25">
					<div class="tickerInnerContent">
						<h3 class="tickerUp">
						<?php echo get_theme_mod("vital_fourth_number_setting"); ?>
						</h3>
						<p>
						<?php echo get_theme_mod("vital_fourth_status_setting"); ?>
						</p> 
					</div><!-- .tickerInnerContent -->
				</div><!-- .width25 -->
				
				<div class="clear"></div><!-- .clear -->
				
			</div><!-- .tickerBox -->
		</div><!-- .container -->
	</div><!-- .sectionWhite -->

		<div class="servicesImage">
				<img src="<?php echo get_theme_mod('services_image_setting', '') ?>" alt="services image">
			</div><!-- .servicesImage -->	
			
	
	<div class="clear"></div><!-- .clear -->
	
	<div class="section sectionThemeColor">
		<div class="container">
		
			<div class="services">
				
				<div class="centerText">
					<h2>Services Provided</h2>
				</div><!-- .centerText -->
					<div class="servicesBox servicesBox1">
						<h3>
						<?php echo get_theme_mod("vital_first_service_setting"); ?>
						</h3>
						<p>
						<?php echo get_theme_mod("vital_first_service_desc_setting"); ?>
						</p>
					</div><!-- .servicesBox1 -->
					
					<div class="servicesBox servicesBox2">
						<h3>
						<?php echo get_theme_mod("vital_second_service_setting"); ?>
						</h3>
						<p>
						<?php echo get_theme_mod("vital_second_service_desc_setting"); ?>
						</p>
					</div><!-- .servicesBox2 -->
					
					<div class="servicesBox servicesBox3">
						<h3>
						<?php echo get_theme_mod("vital_third_service_setting"); ?>
						</h3>
						<p>
						<?php echo get_theme_mod("vital_third_service_desc_setting"); ?>
						</p>
					</div><!-- .servicesBox3 -->	
				
			</div><!-- .services -->

<div class="clear"></div><!-- .clear -->
		</div><!-- .container -->
	</div><!-- .sectionThemeColor -->
	

	
	<div class="section sectionWhite">
		<div class="container">
		
	<div class="plans">
		
				<div class="centerText">
					<h2>Future Plans</h2>
				</div><!-- .centerText -->
				
				<div class="plansBox plansBox1">
					<h3>
						<?php echo get_theme_mod("vital_first_future_plan_setting"); ?>
						</h3>
					<p><?php echo get_theme_mod("vital_first_future_plan_desc_setting"); ?></p>
				</div><!-- .plansBox1 -->
				
				<div class="plansBox plansBox2">
					<h3>
						<?php echo get_theme_mod("vital_second_future_plan_setting"); ?>
						</h3>
				<p><?php echo get_theme_mod("vital_second_future_plan_desc_setting"); ?></p>
				</div><!-- .plansBox2 -->

				<div class="plansBox plansBox3">
					<h3>
						<?php echo get_theme_mod("vital_third_future_plan_setting"); ?>
						</h3>
					<p><?php echo get_theme_mod("vital_third_future_plan_desc_setting"); ?></p>
				</div><!-- .plansBox3 -->

				<div class="plansBox plansBox4">
					<h3>
						<?php echo get_theme_mod("vital_fourth_future_plan_setting"); ?>
						</h3>
					<p><?php echo get_theme_mod("vital_fourth_future_plan_desc_setting"); ?></p>
				</div><!-- .plansBox4 -->
	
			
		</div><!-- .plans -->

		

		<div class="clear"></div><!-- .clear -->
	</div><!-- #primary -->
	</div><!-- .container -->
	</div><!-- .sectionWhite -->
	
	<?php 
	get_footer(); ?>
	