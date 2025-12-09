<?php // phpcs:ignore
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Template for theme info page.
 *
 */

?>
<div id="welcome-panels" class="welcome-panel stylish-brand-shop-hero ">
	<div class="welcome-panel-content stylish-brand-shop-hero">
		<div class="welcome-panel-header stylish-brand-shop-hero">
			<h2>
				<?php esc_html_e( 'Welcome to Stylish Brand Shop', 'stylish-brand-shop' ); ?>
			</h2>
			<p>
				<?php
				esc_html_e( 'Stylish Brand Shop is designed to give your website a bold, elegant, and professional look—ready to launch in just a few clicks.', 'stylish-brand-shop' );
				?>
			</p>




		<div class="not-link">
			<a href="https://www.thealphablocks.com/themes/fashion-wordpress-theme/" target="_blank" rel="noopener noreferrer nofollow" class="stylish-brand-shop-btn stylish-brand-shop-btn-default button button-secodary button-hero ddd" >
				<?php esc_html_e( 'Buy Now', 'stylish-brand-shop' ); ?>
			</a>
			<a href="https://www.thealphablocks.com/themes/wordpress-theme-bundle/" target="_blank" rel="noopener noreferrer nofollow" class="stylish-brand-shop-btn stylish-brand-shop-btn-default button button-secodary button-hero bbb" target="_blank">
				<?php esc_html_e( 'Get All Themes', 'stylish-brand-shop' ); ?>
			</a>
			<a href="https://www.thealphablocks.com/demos/stylish-brand-shop-pro/" target="_blank" rel="noopener noreferrer nofollow" class="stylish-brand-shop-btn stylish-brand-shop-btn-default button button-secodary button-hero ccc" target="_blank">
				<?php esc_html_e( 'Live Demo', 'stylish-brand-shop' ); ?>
			</a>
			<a href="https://www.thealphablocks.com/docs/stylish-brand-shop-free/" target="_blank" rel="noopener noreferrer nofollow" class="stylish-brand-shop-gsn-btn  stylish-brand-shop-btn-outline button button-primary button-hero ghf stylish-brand-shop-install-plugins"  target="_blank">
				<?php esc_html_e( 'Documentation', 'stylish-brand-shop' ); ?>
			</a>
		</div>
		</div>

					<div class="bundle-img-wrap">
			            <img src="<?php echo esc_url( get_template_directory_uri() . '/images/main-banner.png' ); ?>">
			        </div>
		
	</div>
</div>

<div class="stylish-brand-shop-main">
	<div class="row margin stylish-brand-shop-main-wrp">
		<div class="col-lg-3">
			<div class="stylish-brand-shop-main-sidebar">
				<div class="theme-screenshot-box">
					<div class="stylish-brand-shop-card-header abc">
						<h4 class="stylish-brand-shop-card-header-ttl">
							<?php esc_html_e( 'Premium Theme', 'stylish-brand-shop' ); ?>
						</h4>
					</div>	
					<div class="screenshot-container" id="screenshotContainer">
						<img id="scrollImage" src="<?php echo esc_url( get_template_directory_uri() . '/images/screenshort-image.png' ); ?>">
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-6 alpha-right">
			<div class="stylish-brand-shop-main-cont">
				<div class="row features">
					<div class="col-md-6 col-xl-3">
						<div class="stylish-brand-shop-card">
							<div class="stylish-brand-shop-card-header">
								<span class="dashicons dashicons-media-document"></span>
								<h4 class="stylish-brand-shop-card-header-mmm">
									<?php esc_html_e( 'Responsive Design', 'stylish-brand-shop' ); ?>
								</h4>
							</div>
							<div class="stylish-brand-shop-card-body">
								<p class="margin">
									<?php esc_html_e( 'Your website adapts to all screen sizes for seamless viewing experience.', 'stylish-brand-shop' ); ?>
								</p>
								
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-3">
						<div class="stylish-brand-shop-card">
							<div class="stylish-brand-shop-card-header">
								<span class="dashicons dashicons-groups"></span>
									<h4 class="stylish-brand-shop-card-header-mmm">
									<?php esc_html_e( 'Demo Import', 'stylish-brand-shop' ); ?>
								</h4>
							</div>
							<div class="stylish-brand-shop-card-body">
								<p class="margin">
									<?php esc_html_e( 'Our themes has one-click demo import making it easier to launch website.', 'stylish-brand-shop' ); ?>
								</p>
								
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-3">
						<div class="stylish-brand-shop-card">
							<div class="stylish-brand-shop-card-header">
								<span class="dashicons dashicons-backup"></span>
									<h4 class="stylish-brand-shop-card-header-mmm">
									<?php esc_html_e( 'Cross Browser Compatible
									', 'stylish-brand-shop' ); ?>
								</h4>
							</div>
							<div class="stylish-brand-shop-card-body">
								<p class="margin">
									<?php esc_html_e( 'Runs smoothly across all major browsers for consistent site experience.', 'stylish-brand-shop' ); ?>
								</p>
								
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-3">
						<div class="stylish-brand-shop-card">
							<div class="stylish-brand-shop-card-header">
								<span class="dashicons dashicons-video-alt3"></span>
									<h4 class="stylish-brand-shop-card-header-mmm">
									<?php esc_html_e( 'Easy Customization', 'stylish-brand-shop' ); ?>
								</h4>
							</div>
							<div class="stylish-brand-shop-card-body">
								<p class="margin">
									<?php esc_html_e( 'Quickly personalize fonts, colors, and layouts using simple customization panel.', 'stylish-brand-shop' ); ?>
								</p>
								
							</div>
						</div>
					</div>
				</div>
				
					<div class="<?php echo esc_attr( $quick_links_col ); ?>">
						<div class="stylish-brand-shop-card">
							<div class="stylish-brand-shop-card-header justify-content ">
								<span class="dashicons dashicons-admin-links"></span>
								<h4 class="stylish-brand-shop-card-header-ttl">
									<?php esc_html_e( 'Quick Links', 'stylish-brand-shop' ); ?>
								</h4>
							</div>
							<div class="stylish-brand-shop-card-body">
								<div class="stylish-brand-shop-card-btn-grp rrr">
									<a class="stylish-brand-shop-btn stylish-brand-shop-btn-primary-outline button button-hero btn-col" href="<?php echo esc_url( admin_url( 'site-editor.php?categoryId=header&postType=wp_template_part' ) ); ?>" target="_blank">
										<?php esc_html_e( 'Edit Header', 'stylish-brand-shop' ); ?>
									</a>
									<a class="stylish-brand-shop-btn stylish-brand-shop-btn-primary-outline button button-hero btn-col" href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template_part&postId=' . STYLISH_BRAND_SHOP_THEME_NAME . '%2F%2Ffooter&canvas=edit' ) ); ?>" target="_blank">
										<?php esc_html_e( 'Edit Footer', 'stylish-brand-shop' ); ?>
									</a>
									<a class="stylish-brand-shop-btn stylish-brand-shop-btn-primary-outline button button-hero btn-col" href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template_part&postId=' . STYLISH_BRAND_SHOP_THEME_NAME . '%2F%2Fsidebar&canvas=edit' ) ); ?>" target="_blank">
										<?php esc_html_e( 'Edit Sidebar', 'stylish-brand-shop' ); ?>
									</a>
								<a class="stylish-brand-shop-btn stylish-brand-shop-btn-primary-outline button button-hero btn-col" 
										href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template&postId=' . STYLISH_BRAND_SHOP_THEME_NAME . '%2F%2Fhome&canvas=edit' ) ); ?>" 
										target="_blank">
										<?php esc_html_e( 'Edit Blog Home', 'stylish-brand-shop' ); ?>
									</a>


									<a class="stylish-brand-shop-btn stylish-brand-shop-btn-primary-outline button button-hero btn-col" href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template_part' ) ); ?>" target="_blank">
										<?php esc_html_e( 'All Template Parts', 'stylish-brand-shop' ); ?>
									</a>
									<a class="stylish-brand-shop-btn stylish-brand-shop-btn-primary-outline button button-hero btn-col" href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template&postId=' . STYLISH_BRAND_SHOP_THEME_NAME . '%2F%2Ffront-page&canvas=edit' ) ); ?>" target="_blank">
										<?php esc_html_e( 'Edit Frontpage', 'stylish-brand-shop' ); ?>
									</a>
									<a class="stylish-brand-shop-btn stylish-brand-shop-btn-primary-outline button button-hero btn-col" href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template&postId=' . STYLISH_BRAND_SHOP_THEME_NAME . '%2F%2Farchive&canvas=edit' ) ); ?>" target="_blank">
										<?php esc_html_e( 'Edit Archive Page', 'stylish-brand-shop' ); ?>
									</a>
									<a class="stylish-brand-shop-btn stylish-brand-shop-btn-primary-outline button button-hero btn-col" href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template' ) ); ?>" target="_blank">
										<?php esc_html_e( 'All Templates', 'stylish-brand-shop' ); ?>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
				$faqs = function_exists( 'stylish_brand_shop_get_theme_faq' ) ? stylish_brand_shop_get_theme_faq() : null;
				if ( $faqs ) {
					?>
						<div class="row">
							<div class="col-12">
								<div class="stylish-brand-shop-card">
									<div class="stylish-brand-shop-card-header">
										<span class="dashicons dashicons-format-chat"></span>
										<h4 class="stylish-brand-shop-card-header-ttl">
											<?php esc_html_e( 'Frequently Asked Questions', 'stylish-brand-shop' ); ?>
										</h4>
									</div>
									<div class="stylish-brand-shop-card-body">
										<div class="stylish-brand-shop-accordion">
									<div class="stylish-brand-shop-accordion ">
									<?php foreach ( $faqs as $key => $faq ) : ?>
										<details class="stylish-brand-shop-accordion-section ">
											<summary class="stylish-brand-shop-accordion-section-title">
												<h4 class="stylish-brand-shop-accordion-heading">
													<span class="dashicons dashicons-arrow-right"></span>
													<?php echo esc_html( $faq['q'] ); ?>
												</h4>
											</summary>
											<div id="stylish-brand-shop-info-faq-<?php echo esc_attr( $key ); ?>" class="stylish-brand-shop-accordion-section-content">
												<?php echo wp_kses_post( $faq['a'] ); ?>
											</div>
										</details>
									<?php endforeach; ?>
								</div>
								</div>

									</div>
								</div>
							</div>
						</div>
					<?php
				}
				?>
			</div>

		<div class="col-lg-3">
			<div class="stylish-brand-shop-main-sidebar">
				
				<div class="stylish-brand-shop-card">
					<div class="stylish-brand-shop-card-header abc">
						<h4 class="stylish-brand-shop-card-header-ttl">
							<?php esc_html_e( 'Buy Premium Theme', 'stylish-brand-shop' ); ?>
						</h4>
					</div>

					<div class="bun-para">
						<p><?php esc_html_e( 'Our Premium WordPress Themes are crafted to deliver powerful design, seamless performance, and full customization options—perfect for building stunning, professional websites with ease.', 'stylish-brand-shop' ); ?></p>
					</div>
					
					<a href="https://www.thealphablocks.com/themes/fashion-wordpress-theme/" target="_blank" rel="noopener noreferrer nofollow" class="stylish-brand-shop-btn stylish-brand-shop-btn-default button button-secodary button-hero cba cbaa" target="_blank">
						<?php esc_html_e( 'Buy Now $40', 'stylish-brand-shop' ); ?>
					</a>
			
				</div>

				<div class="stylish-brand-shop-card">
					<div class="bundle-image-wrap">
			            <img src="<?php echo esc_url( get_template_directory_uri() . '/images/bundle-image.png' ); ?>">
			        </div>
					<div class="stylish-brand-shop-card-header abc">
						<h4 class="stylish-brand-shop-card-header-ttl">
							<?php esc_html_e( 'Get All Themes', 'stylish-brand-shop' ); ?>
						</h4>
					</div>

					<div class="bun-para">
						<p><?php esc_html_e( 'Whether you need a website for a blog, business, portfolio, or online store, this WP Theme Bundle provides everything you need for a visually appealing and fully functional site.', 'stylish-brand-shop' ); ?></p>
					</div>
					
					<a href="https://www.thealphablocks.com/themes/wordpress-theme-bundle/" target="_blank" rel="noopener noreferrer nofollow" class="stylish-brand-shop-btn stylish-brand-shop-btn-default button button-secodary button-hero cba" target="_blank">
						<?php esc_html_e( 'Get All Block Themes $59', 'stylish-brand-shop' ); ?>
					</a>
			
				</div>

			</div>
			</div>

		</div>
	</div>
</div>

