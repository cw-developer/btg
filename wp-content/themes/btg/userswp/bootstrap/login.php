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
<h1>Access MyBTG</h1>
<?php do_action('uwp_template_before', 'login'); ?>
    <div class="uwp-content-wrap">
        <div class="uwp-login" <?php if(!empty($uwp_login_widget_args['form_padding'])){echo "style='padding:".absint($uwp_login_widget_args['form_padding'])."px'";}?>>
            <div class="uwp-lf-icon"><i class="fas fa-user fa-fw"></i></div>
            <?php do_action('uwp_template_form_title_before', 'login'); ?>
            <?php do_action('uwp_template_display_notices', 'login'); ?>
            <form class="uwp-login-form uwp_form" method="post">
                <?php do_action('uwp_template_fields', 'login', $args); ?>
                <div class="uwp-remember-me">
                    <label style="display: inline-block;" for="remember_me<?php if(wp_doing_ajax()){echo "_ajax";}?>">
                        <input name="remember_me" id="remember_me<?php if(wp_doing_ajax()){echo "_ajax";}?>" value="forever" type="checkbox">
                        <?php _e( 'Keep me logged in', 'userswp' ); ?>
                    </label>
                </div>
                <input class="button-link button-link-Primary hvr-sweep-to-right" type="submit" name="uwp_login_submit" value="<?php _e( 'Login', 'userswp' ); ?>">
            </form>
            <div class="uwp-login-links">
                <div class="uwp-footer-link uwp-register-now"><?php _e( 'Not a member?', 'userswp' ); ?> <a rel="nofollow" href="<?php echo uwp_get_register_page_url(); ?>"><?php echo uwp_get_option("register_link_title") ? uwp_get_option("register_link_title") : __( 'Create account', 'userswp' ); ?></a></div>
                <p>BTG collects your personal data to deliver the services you have requested such as technical documentation on BTG products. It might further be used to provide product-relevant information. You have the possibility to unsubscribe and delete your user account at any time.</p>
                <div class="uwp-footer-link uwp-forgotpsw"><a rel="nofollow" href="<?php echo uwp_get_forgot_page_url(); ?>"><?php echo uwp_get_option("forgot_link_title") ? uwp_get_option("forgot_link_title") : __( 'Forgot password?', 'userswp' ); ?></a></div>
            </div>
	        <?php do_action('uwp_social_fields', 'login', $args); ?>
        </div>
    </div>
<?php do_action('uwp_template_after', 'login'); ?>