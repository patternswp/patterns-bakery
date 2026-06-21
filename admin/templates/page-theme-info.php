<?php // phpcs:ignore
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Template for theme info page.
 *
 * @link       https://www.acmeit.org/
 * @since      1.0.0
 *
 * @package    Patterns_Bakery
 * @subpackage Patterns_Bakery/Patterns_Bakery_Intro
 */

?>
	<div id="welcome-panel" class="welcome-panel patterns-bakery-hero at-bg-img">
		<div class="welcome-panel-content">
			<div class="welcome-panel-header">
				<h2>
					<?php esc_html_e( 'Welcome to Patterns Bakery', 'patterns-bakery' ); ?>
				</h2>
				<p>
					<?php
					esc_html_e( 'The Patterns Bakery is now active and ready for use. Unleash your creativity with its extensive library of one-click demo Starter Packages, Patterns, and Pattern Kits.', 'patterns-bakery' );
					?>
				</p>
				<a href="https://patternswp.com/full-site-editing-fse-themes/patterns-bakery" target="_blank" rel="noopener noreferrer nofollow" class="patterns-bakery-gsn-btn patterns-bakery-btn-outline button button-primary button-hero patterns-bakery-install-plugins">
					<?php esc_html_e( 'Documentation', 'patterns-bakery' ); ?>
				</a>
				<a href="https://patternswp.com/full-site-editing-fse-themes/patterns-bakery" target="_blank" rel="noopener noreferrer nofollow" class="patterns-bakery-btn patterns-bakery-btn-default button button-secodary button-hero" target="_blank">
					<?php esc_html_e( 'Visit Starter Templates', 'patterns-bakery' ); ?>
				</a>
			</div>

			<div class="welcome-panel-column-container">
				<div class="welcome-panel-column">
					<svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
						<rect width="48" height="48" rx="4" fill="#2e312f"></rect>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M18 16h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H18a2 2 0 0 1-2-2V18a2 2 0 0 1 2-2zm12 1.5H18a.5.5 0 0 0-.5.5v3h13v-3a.5.5 0 0 0-.5-.5zm.5 5H22v8h8a.5.5 0 0 0 .5-.5v-7.5zm-10 0h-3V30a.5.5 0 0 0 .5.5h2.5v-8z" fill="#fff"></path>
					</svg>
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Use ready-made Design, Patterns, Templates & Template Parts', 'patterns-bakery' ); ?></h3>
						<p>
							<?php esc_html_e( 'Effortlessly use ready-made patterns, templates, and template parts to enhance your site design, making customization quick and easy without starting from scratch.', 'patterns-bakery' ); ?>
						</p>
						<a href="<?php echo esc_url( admin_url( 'post-new.php?post_type=page' ) ); ?>">
							<?php esc_html_e( 'Add a new page', 'patterns-bakery' ); ?>
						</a>
					</div>
				</div>
				<div class="welcome-panel-column">
					<svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
						<rect width="48" height="48" rx="4" fill="#2e312f"></rect>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M32.0668 17.0854L28.8221 13.9454L18.2008 24.671L16.8983 29.0827L21.4257 27.8309L32.0668 17.0854ZM16 32.75H24V31.25H16V32.75Z" fill="white"></path>
					</svg>
					<div class="welcome-panel-column-content">
						<h3>
							<?php esc_html_e( 'Customize Templates, Template Parts & More', 'patterns-bakery' ); ?>    
						</h3>
						<p>
							<?php esc_html_e( 'With a block theme, you can customize every aspect of both the theme and the site, from headers and footers to individual blocks, providing a cohesive and personalized design.', 'patterns-bakery' ); ?>
						</p>
						<a href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>">
							<?php esc_html_e( 'Site Editor', 'patterns-bakery' ); ?>
						</a>
					</div>
				</div>
				<div class="welcome-panel-column">
					<svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
						<rect width="48" height="48" rx="4" fill="#2e312f"></rect>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M31 24a7 7 0 0 1-7 7V17a7 7 0 0 1 7 7zm-7-8a8 8 0 1 1 0 16 8 8 0 0 1 0-16z" fill="#fff"></path>
					</svg>
					<div class="welcome-panel-column-content">
						<h3>
							<?php esc_html_e( 'Transform your site\'s appearance with customizable fonts & colors', 'patterns-bakery' ); ?>
						</h3>
						<p>
							<?php esc_html_e( 'Give your site a unique look by customizing fonts and colors. Achieve anything from subtle tweaks to complete makeovers, enhancing your  site\'s visual appeal and overall design.', 'patterns-bakery' ); ?>
						</p>
						<a href="<?php echo esc_url( admin_url( '/site-editor.php?path=%2Fwp_global_styles' ) ); ?>">
							<?php esc_html_e( 'Customize styles', 'patterns-bakery' ); ?>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="patterns-bakery-main at-p">
		<div class="at-row at-m patterns-bakery-main-wrp">
			<div class="at-col-sm-3 at-col-md-5 at-col-lg-4 at-col-xl-3">
				<div class="patterns-bakery-main-sidebar at-flx at-flx-col at-gap">
					<div class="patterns-bakery-card at-bg-cl at-bdr">
						<div class="patterns-bakery-card-body at-p">
							<div class="patterns-bakery-intro-auth at-p">
								<div class="patterns-bakery-intro-profile at-h at-w at-bdr at-bdr-rad at-m at-flx at-al-itm-ctr at-jfy-cont-ctr">
									<span class="at-w at-h at-bdr-rad">
										<img class="patterns-bakery-gsm-screenshot" src="<?php echo esc_url( PATTERNS_BAKERY_URL . 'assets/img/patternswp-logo-green.png' ); ?>" alt="<?php esc_attr_e( 'Patterns Bakery', 'patterns-bakery' ); ?>" />
									</span>
								</div>
								<div class="patterns-bakery-intro-profile-info at-m at-txt-al">
									<h3 class="txt">
										<?php esc_html_e( 'Patterns Bakery', 'patterns-bakery' ); ?>
									</h3>
									<a href="https://patternswp.com/full-site-editing-fse-themes/patterns-bakery" target="_blank" rel="noopener noreferrer nofollow" class="button-primary patterns-bakery-btn-primary">
										<?php esc_html_e( 'Visit Site', 'patterns-bakery' ); ?>
									</a>
									<a href="https://wordpress.org/support/theme/patterns-bakery" target="_blank" rel="noopener noreferrer nofollow" class="button-secondary patterns-bakery-btn-secondary">
										<?php esc_html_e( 'Support', 'patterns-bakery' ); ?>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="patterns-bakery-card at-bg-cl at-bdr">
						<div class="patterns-bakery-card-header at-bdr at-p at-jfy-cont-st at-gap at-flx">
							<h4 class="patterns-bakery-card-header-ttl at-txt at-m">
								<?php esc_html_e( 'Contact Information', 'patterns-bakery' ); ?>
							</h4>
						</div>
						<div class="patterns-bakery-card-body at-p at-p">
							<div class="patterns-bakery-intro-auth--info">								
								<ul class="patterns-bakery-personal-detail at-flx at-flx-col at-gap">
									<li class="">
										<dl class="at-flx at-al-itm-ctr at-gap">
											<dt class="at-w">
												<span class="dashicons dashicons-smartphone"></span>
												<b>
													<?php esc_html_e( 'Support:', 'patterns-bakery' ); ?>
												</b>
											</dt>
											<dd class="at-m">
												<a href="https://wordpress.org/support/theme/patterns-bakery" target="_blank" rel="noopener noreferrer nofollow">
													<?php esc_html_e( 'Create A Ticket', 'patterns-bakery' ); ?>
												</a>
											</dd>                                                        
										</dl>
									</li>
									<li class="mt-2">
										<dl class="at-flx at-al-itm-ctr at-gap">
											<dt  class="at-w">
												<span class="dashicons dashicons-location"></span>
												<b>
													<?php esc_html_e( 'Location:', 'patterns-bakery' ); ?>
												</b>
											</dt>
											<dd class="at-m">
												<?php esc_html_e( 'Kathmandu, Nepal', 'patterns-bakery' ); ?>
											</dd>                                                        
										</dl>
									</li>
								</ul>
								<ul class="patterns-bakery-social at-flx at-jfy-cont-ctr at-al-itm-ctr at-gap at-m">
									<li>
										<a class="at-p at-bdr at-bdr-rad" href="https://profiles.wordpress.org/patternswp/" target="_blank" rel="noopener noreferrer nofollow">
											<span class="dashicons dashicons-wordpress"></span>
										</a>
									</li>
									<li>
										<a class="at-p at-bdr at-bdr-rad" href="https://twitter.com/patternswp" target="_blank" rel="noopener noreferrer nofollow">
											<span class="dashicons dashicons-twitter"></span>
										</a>
									</li>
								</ul>	
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="at-col-sm-9 at-col-md-7 at-col-lg-8 at-col-xl-9">
				<div class="patterns-bakery-main-cont at-flx at-flx-col at-gap">
					<div class="at-row at-gap">
						<div class="at-col-md-6 at-col-xl-3">
							<div class="patterns-bakery-card at-bg-cl at-bdr">
								<div class="patterns-bakery-card-header at-bdr at-p at-jfy-cont-st at-gap at-flx at-jfy-cont-st at-gap at-flx">
									<span class="dashicons dashicons-media-document"></span>
									<h4 class="patterns-bakery-card-header-ttl at-txt at-m">
										<?php esc_html_e( 'Knowledge Base', 'patterns-bakery' ); ?>
									</h4>
								</div>
								<div class="patterns-bakery-card-body at-p">
									<p class="at-m">
										<?php esc_html_e( 'In-depth and well documented articles will help you to use the Patterns Bakery Themes in easiest way.', 'patterns-bakery' ); ?>
									</p>
									<a href="https://patternswp.com/full-site-editing-fse-themes/patterns-bakery" target="_blank" rel="noopener noreferrer nofollow" class="patterns-bakery-btn">
										<?php esc_html_e( 'Visit Knowledge Base', 'patterns-bakery' ); ?>
									</a>
								</div>
							</div>
						</div>
						<div class="at-col-md-6 at-col-xl-3">
							<div class="patterns-bakery-card at-bg-cl at-bdr">
								<div class="patterns-bakery-card-header at-bdr at-p at-jfy-cont-st at-gap at-flx">
									<span class="dashicons dashicons-groups"></span>
										<h4 class="patterns-bakery-card-header-ttl at-txt at-m">
										<?php esc_html_e( 'Community', 'patterns-bakery' ); ?>
									</h4>
								</div>
								<div class="patterns-bakery-card-body at-p">
									<p class="at-m">
										<?php esc_html_e( 'We want to make customer experience even better. So, join our Facebook community for instant support from experts.', 'patterns-bakery' ); ?>
									</p>
									<a href="https://patternswp.com/full-site-editing-fse-themes/patterns-bakery" target="_blank" rel="noopener noreferrer nofollow" class="patterns-bakery-btn">
										<?php esc_html_e( 'Join Facebook Group', 'patterns-bakery' ); ?>
									</a>
								</div>
							</div>
						</div>
						<div class="at-col-md-6 at-col-xl-3">
							<div class="patterns-bakery-card at-bg-cl at-bdr">
								<div class="patterns-bakery-card-header at-bdr at-p at-jfy-cont-st at-gap at-flx">
									<span class="dashicons dashicons-backup"></span>
										<h4 class="patterns-bakery-card-header-ttl at-txt at-m">
										<?php esc_html_e( '24x7 Support', 'patterns-bakery' ); ?>
									</h4>
								</div>
								<div class="patterns-bakery-card-body at-p">
									<p class="at-m">
										<?php esc_html_e( 'We have dedicated support team 24*7 to help you in case you encounter any issue during and after the use of Patterns Bakery.', 'patterns-bakery' ); ?>
									</p>
									<a href="https://patternswp.com/full-site-editing-fse-themes/patterns-bakery" target="_blank" rel="noopener noreferrer nofollow" class="patterns-bakery-btn">
										<?php esc_html_e( 'Create A Ticket', 'patterns-bakery' ); ?>
									</a>
								</div>
							</div>
						</div>
						<div class="at-col-md-6 at-col-xl-3">
							<div class="patterns-bakery-card at-bg-cl at-bdr">
								<div class="patterns-bakery-card-header at-bdr at-p at-jfy-cont-st at-gap at-flx">
									<span class="dashicons dashicons-video-alt3"></span>
										<h4 class="patterns-bakery-card-header-ttl at-txt at-m">
										<?php esc_html_e( 'Video Guide', 'patterns-bakery' ); ?>
									</h4>
								</div>
								<div class="patterns-bakery-card-body at-p">
									<p class="at-m">
										<?php esc_html_e( 'Patterns Bakery Theme comes with detailed video tutorials of each and every customization with practical demonstration.', 'patterns-bakery' ); ?>
									</p>
									<a href="https://patternswp.com/full-site-editing-fse-themes/patterns-bakery" target="_blank" rel="noopener noreferrer nofollow" class="patterns-bakery-btn">
										<?php esc_html_e( 'View Video Guide', 'patterns-bakery' ); ?>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="at-row at-gap">
						<?php
						$recommended_plugins = function_exists( 'patterns_bakery_get_recommended_plugins' ) ? patterns_bakery_get_recommended_plugins() : null;
						$quick_links_col     = 'at-col-12';

						if ( $recommended_plugins ) {
							$quick_links_col = 'at-col-sm-8 at-col-md-12 at-col-lg-6 at-col-xl-8';
							?>
						<div class="at-col-sm-4 at-col-md-12 at-col-lg-6 at-col-xl-4">
							<div class="patterns-bakery-card at-bg-cl at-bdr">
								<div class="patterns-bakery-card-header at-bdr at-p at-jfy-cont-st at-gap at-flx">
									<span class="dashicons dashicons-admin-plugins"></span>
									<h4 class="patterns-bakery-card-header-ttl at-txt at-m">
										<?php esc_html_e( 'Recommended Plugins', 'patterns-bakery' ); ?>
									</h4>
								</div>
								<div class="patterns-bakery-card-body at-p at-flx at-flx-col at-gap">
									<?php
									foreach ( $recommended_plugins as $key => $plugin_info ) {
										?>
										<div class="at-flx at-jfy-cont-btw at-al-itm-ctr patterns-bakery-plugin-recommend">
											<h4 class="patterns-bakery-plugin-title">
												<?php
												if ( isset( $plugin_info['url'] ) ) {
													?>
												<a href='<?php echo esc_url( $plugin_info['url'] ); ?>' target="_blank" rel="noopener noreferrer nofollow">
													<?php echo esc_html( $plugin_info['name'] ); ?>
												</a>
													<?php
												} else {
													echo esc_html( $plugin_info['name'] );
												}
												?>
											</h4>
											<?php
											if ( patterns_bakery_is_plugin_active( $plugin_info['plugin'] ) ) {
												?>
												<button class="patterns-bakery-btn-primary  button-primary" disabled>
													<?php esc_html_e( 'Installed and Activated', 'patterns-bakery' ); ?>
												</button>
												<?php
											} else {
												?>
												<button class="patterns-bakery-btn-primary button-primary patterns-bakery-install-plugin" data-plugin="<?php echo esc_attr( wp_json_encode( $plugin_info ) ); ?>" data-success-text="<?php esc_attr_e( 'Installed and Activated', 'patterns-bakery' ); ?>" data-fail-text="<?php esc_attr_e( 'Failed to install', 'patterns-bakery' ); ?>">
													<?php
													if ( file_exists( WP_PLUGIN_DIR . '/' . $plugin_info['plugin'] ) ) {
														esc_html_e( 'Activate', 'patterns-bakery' );
													} else {
														esc_html_e( 'Install and Activate', 'patterns-bakery' );
													}
													?>
												</button>
												<?php
											}
											?>
										</div>
										<?php
									}
									?>
								</div>				
							</div>
						</div>
							<?php
						}
						?>
						<div class="<?php echo esc_attr( $quick_links_col ); ?>">
							<div class="patterns-bakery-card at-bg-cl at-bdr">
								<div class="patterns-bakery-card-header at-bdr at-p at-jfy-cont-st at-gap at-flx at-jfy-cont-st at-gap at-flx">
									<span class="dashicons dashicons-admin-links"></span>
									<h4 class="patterns-bakery-card-header-ttl at-txt at-m">
										<?php esc_html_e( 'Quick Links', 'patterns-bakery' ); ?>
									</h4>
								</div>
								<div class="patterns-bakery-card-body at-p">
									<div class="patterns-bakery-card-btn-grp at-flx at-flx-wrp at-gap">
										<a class="patterns-bakery-btn patterns-bakery-btn-primary-outline button button-hero" href="<?php echo esc_url( admin_url( 'site-editor.php?categoryId=header&postType=wp_template_part' ) ); ?>">
											<?php esc_html_e( 'Edit Header', 'patterns-bakery' ); ?>
										</a>
										<a class="patterns-bakery-btn patterns-bakery-btn-primary-outline button button-hero" href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template_part&postId=' . PATTERNS_BAKERY_THEME_NAME . '%2F%2Ffooter&canvas=edit' ) ); ?>">
											<?php esc_html_e( 'Edit Footer', 'patterns-bakery' ); ?>
										</a>
										<a class="patterns-bakery-btn patterns-bakery-btn-primary-outline button button-hero" href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template_part&postId=' . PATTERNS_BAKERY_THEME_NAME . '%2F%2Fprimary-sidebar&canvas=edit' ) ); ?>">
											<?php esc_html_e( 'Edit Primary Sidebar', 'patterns-bakery' ); ?>
										</a>
										<a class="patterns-bakery-btn patterns-bakery-btn-primary-outline button button-hero" href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template_part&postId=' . PATTERNS_BAKERY_THEME_NAME . '%2F%2Fsecondary-sidebar&canvas=edit' ) ); ?>">
											<?php esc_html_e( 'Edit Secondary Sidebar', 'patterns-bakery' ); ?>
										</a>
										<a class="patterns-bakery-btn patterns-bakery-btn-primary-outline button button-hero" href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template_part' ) ); ?>">
											<?php esc_html_e( 'All template parts', 'patterns-bakery' ); ?>
										</a>
										<a class="patterns-bakery-btn patterns-bakery-btn-primary-outline button button-hero" href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template&postId=' . PATTERNS_BAKERY_THEME_NAME . '%2F%2Ffront-page&canvas=edit' ) ); ?>">
											<?php esc_html_e( 'Edit Frontpage', 'patterns-bakery' ); ?>
										</a>
										<a class="patterns-bakery-btn patterns-bakery-btn-primary-outline button button-hero" href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template&postId=' . PATTERNS_BAKERY_THEME_NAME . '%2F%2Farchive&canvas=edit' ) ); ?>">
											<?php esc_html_e( 'Edit Atchive Page', 'patterns-bakery' ); ?>
										</a>
										<a class="patterns-bakery-btn patterns-bakery-btn-primary-outline button button-hero" href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template' ) ); ?>">
											<?php esc_html_e( 'All Templates', 'patterns-bakery' ); ?>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php
					$faqs = function_exists( 'patterns_bakery_get_theme_faq' ) ? patterns_bakery_get_theme_faq() : null;
					if ( $faqs ) {
						?>
							<div class="at-row">
								<div class="at-col-12">
									<div class="patterns-bakery-card at-bg-cl at-bdr">
										<div class="patterns-bakery-card-header at-bdr at-p at-jfy-cont-st at-gap at-flx">
											<span class="dashicons dashicons-format-chat"></span>
											<h4 class="patterns-bakery-card-header-ttl at-txt at-m">
												<?php esc_html_e( 'Frequently Asked Questions', 'patterns-bakery' ); ?>
											</h4>
										</div>
										<div class="patterns-bakery-card-body at-p ">
											<div class="patterns-bakery-accordion at-flx at-flx-col at-gap">
												<?php
												foreach ( $faqs as $key => $faq ) {
													echo "<details class='patterns-bakery-accordion-section at-bdr'>";
													echo "<summary class='patterns-bakery-accordion-section-title at-p at-pos at-bdr'>";
													echo "<h4 class='patterns-bakery-accordion-heading at-m'>";
													echo esc_html( $faq['q'] );
													echo '</h4>';
													echo '</summary>';/*patterns-bakery-card-header*/
													echo "<div id='patterns-bakery-info-faq-" . esc_attr( $key ) . "' class='patterns-bakery-accordion-section-content at-p'>";
													echo wp_kses_post( $faq['a'] );
													echo '</div>';/*id*/
													echo '</details>';/*patterns-bakery-card*/
												}
												?>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php
					}
					?>
					<?php
					$changelog = function_exists( 'patterns_bakery_parse_changelog' ) ? patterns_bakery_parse_changelog() : '';
					if ( $changelog ) {
						?>
							<div class="at-row">
								<div class="at-col-12">
									<div class="patterns-bakery-card at-bg-cl at-bdr">
										<div class="patterns-bakery-card-header at-bdr at-p at-jfy-cont-st at-gap at-flx">
											<span class="dashicons dashicons-backup"></span>
											<h4 class="patterns-bakery-card-header-ttl at-txt at-m">
												<?php esc_html_e( 'Changelog', 'patterns-bakery' ); ?>
											</h4>
										</div>
										<div class="patterns-bakery-card-body at-p">
											<pre class="patterns-bakery-changelog"><?php echo wp_kses_post( $changelog ); ?></pre>
										</div>
									</div>
								</div>
							</div>
						<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>
