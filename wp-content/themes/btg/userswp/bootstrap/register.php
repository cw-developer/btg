<?php
/**
 * Register template (default)
 *
 * @ver 1.0.1
 */?>
<div class="my_btg_content_header">
                     <div class="btg_website_button">
                        <?php $btg_button_link = get_field('my_btg_link', 'option');
                           if($btg_button_link):
                              $link_url = $btg_button_link['url'];
                              $link_title = $btg_button_link['title'];
                              $link_target = $btg_button_link['target'] ? $btg_button_link['target'] : '_self';
                           ?>
                        <div class="button_wrap">
                           <a class="button-link button-link-Primary hvr-sweep-to-right" href="<?php echo $link_url; ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo $link_title; ?></a>
                        </div>
                        <?php endif; ?>
                     </div>
                     <div id="ct-logo" class="site-branding">
                  <?php
                     the_custom_logo();
                     ?>						
               </div>
                  </div>
<h1>Register MyBTG</h1>
<?php
$css_class = ! empty( $args['css_class'] ) ? esc_attr( $args['css_class'] ) : 'border-0';
$form_title = ! empty( $args['form_title'] ) || $args['form_title']=='0' ? esc_attr__( $args['form_title'], 'userswp' ) : __( 'Register', 'userswp' );
$form_title = apply_filters( 'uwp_template_form_title', $form_title, 'register' );
do_action( 'uwp_template_before', 'register', $args ); ?>
    <div class="row">
        <div class="card mx-auto container-fluid p-0 <?php echo esc_attr( $css_class ); ?>" >
			<?php
			// ajax modal
			if(wp_doing_ajax() && $form_title != '0'){
				?>
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo esc_attr($form_title);?></h5>
					<?php
					echo aui()->button(array(
						'type'       =>  'button',
						'class'      => 'close',
						'content'    => '<span aria-hidden="true">&times;</span>',
						'extra_attributes'  => array('aria-label'=>__("Close","userswp"), 'data-dismiss'=>"modal")
					));
					?>
                </div>
				<?php
			}
			?>
            <div class="card-body">
				<?php
				do_action( 'uwp_template_form_title_before', 'register', $args );

				if (!wp_doing_ajax() && $form_title != '0' ) {
					// echo '<h3 class="card-title text-center mb-4">';
					// echo esc_attr( $form_title );
					// echo '</h3>';
				}

				do_action( 'uwp_template_display_notices', 'register', $args ); ?>

                <form class="uwp-registration-form uwp_form" method="post" enctype="multipart/form-data">
					<?php
					do_action( 'uwp_template_fields', 'register', $args );
					echo aui()->button(array(
						'type'       => 'submit',
						'class'      => 'button-link button-link-Primary hvr-sweep-to-right',
						'content'    => __( 'Create Account', 'userswp' ),
						'name'       => 'uwp_register_submit',
					));
					?>
				<div class="uwp-footer-links">
                    <div class="uwp-footer-link">
						<?php
						echo aui()->button(array(
							'type'  =>  'a',
							'href'       => uwp_get_login_page_url(),
							'class'      => 'button-link button-link-Primary hvr-sweep-to-right',
							'content'    => uwp_get_option("login_link_title") ? __(uwp_get_option("login_link_title"), 'userswp') : __( 'Login', 'userswp' ),
							'extra_attributes'  => array('rel'=>'nofollow')
						));
						?>
                    </div>
                </div>
                </form>

                <div class="form-group text-center mb-0 p-0">
					<?php do_action( 'uwp_social_fields', 'register', $args ); ?>
                </div>

            </div>
        </div>
    </div>
<?php do_action( 'uwp_template_after', 'register', $args ); ?>