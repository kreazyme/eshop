<?php
 /**
  * Title: Default Header
  * Slug: stylish-brand-shop/header-default
  * Categories: stylish-brand-shop
  */
?>

<!-- wp:group {"className":"header-wrap","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group header-wrap"><!-- wp:group {"className":"topbar-box","style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"0px","right":"0px"}}},"backgroundColor":"foreground","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group topbar-box has-foreground-background-color has-background" style="padding-top:10px;padding-right:0px;padding-bottom:10px;padding-left:0px"><!-- wp:group {"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"center","className":"top-header","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center top-header" style="padding-top:0;padding-bottom:0"><!-- wp:column {"verticalAlignment":"center","width":"30%","className":"header-info-box"} -->
<div class="wp-block-column is-vertically-aligned-center header-info-box" style="flex-basis:30%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"background","fontSize":"extra-small","fontFamily":"inter"} -->
<p class="has-background-color has-text-color has-link-color has-inter-font-family has-extra-small-font-size" style="font-style:normal;font-weight:400"><span class="dashicons dashicons-email"></span><?php esc_html_e('brand1235@example.com','stylish-brand-shop'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"40%","className":"header-info-box"} -->
<div class="wp-block-column is-vertically-aligned-center header-info-box" style="flex-basis:40%"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"background","fontSize":"extra-small","fontFamily":"inter"} -->
<p class="has-text-align-center has-background-color has-text-color has-link-color has-inter-font-family has-extra-small-font-size" style="font-style:normal;font-weight:400"><?php esc_html_e('Exclusive Deal! Sign Up & Get 10% Off Your First Order!','stylish-brand-shop'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:group {"className":"top-contact","style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group top-contact"><!-- wp:buttons {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}}} -->
<div class="wp-block-buttons" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:button {"backgroundColor":"foreground","textColor":"background","style":{"spacing":{"padding":{"left":"10px","right":"10px","top":"0px","bottom":"0px"}},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"1px"}},"typography":{"fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"fontSize":"extra-small","fontFamily":"inter"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background-color has-foreground-background-color has-text-color has-background has-link-color has-inter-font-family has-extra-small-font-size has-custom-font-size wp-element-button" href="#" style="border-top-style:none;border-top-width:0px;border-right-width:1px;padding-top:0px;padding-right:10px;padding-bottom:0px;padding-left:10px;font-style:normal;font-weight:400"><?php esc_html_e('Faq','stylish-brand-shop'); ?> </a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"foreground","textColor":"background","style":{"spacing":{"padding":{"left":"0px","right":"0px","top":"0px","bottom":"0px"}},"typography":{"fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"fontSize":"extra-small","fontFamily":"inter"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background-color has-foreground-background-color has-text-color has-background has-link-color has-inter-font-family has-extra-small-font-size has-custom-font-size wp-element-button" href="#" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;font-style:normal;font-weight:400"><?php esc_html_e('Contact us','stylish-brand-shop'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"header-wrapper-inner","style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group header-wrapper-inner has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:10px;padding-right:0;padding-bottom:10px;padding-left:0"><!-- wp:columns {"verticalAlignment":"center","className":"header-main"} -->
<div class="wp-block-columns are-vertically-aligned-center header-main"><!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"#171717"}}},"color":{"text":"#171717"},"typography":{"fontSize":"25px","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontFamily":"inter"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"40%","className":"header-search"} -->
<div class="wp-block-column is-vertically-aligned-center header-search" style="flex-basis:40%"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search products…","width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"query":{"post_type":"product"},"style":{"border":{"radius":"30px","color":"#eeeeee","width":"1px"},"color":{"background":"#f6f6f6"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"40%","className":"call-box"} -->
<div class="wp-block-column is-vertically-aligned-center call-box" style="flex-basis:40%"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"center","className":"top-contact-box","style":{"spacing":{"blockGap":{"left":"15px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center top-contact-box"><!-- wp:column {"verticalAlignment":"center","className":"contact-main-box"} -->
<div class="wp-block-column is-vertically-aligned-center contact-main-box"><!-- wp:columns {"verticalAlignment":"center","className":"phone-box","style":{"spacing":{"blockGap":{"left":"10px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center phone-box"><!-- wp:column {"verticalAlignment":"center","width":"33.33%","className":"call-icon"} -->
<div class="wp-block-column is-vertically-aligned-center call-icon" style="flex-basis:33.33%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"66.66%","className":"phone-text"} -->
<div class="wp-block-column is-vertically-aligned-center phone-text" style="flex-basis:66.66%"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"textColor":"foreground","fontFamily":"inter"} -->
<h5 class="wp-block-heading has-foreground-color has-text-color has-link-color has-inter-font-family" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;font-size:14px;font-style:normal;font-weight:600"><?php esc_html_e('Call Us','stylish-brand-shop'); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"textColor":"black","fontSize":"tiny","fontFamily":"inter"} -->
<p class="has-black-color has-text-color has-link-color has-inter-font-family has-tiny-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;font-style:normal;font-weight:400"> <?php esc_html_e('+1234 456 789','stylish-brand-shop'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","className":"contact-main-box"} -->
<div class="wp-block-column is-vertically-aligned-center contact-main-box"><!-- wp:columns {"verticalAlignment":"center","className":"phone-box","style":{"spacing":{"blockGap":{"left":"10px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center phone-box"><!-- wp:column {"verticalAlignment":"center","width":"33.33%","className":"mail-icon"} -->
<div class="wp-block-column is-vertically-aligned-center mail-icon" style="flex-basis:33.33%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"66.66%","className":"phone-text"} -->
<div class="wp-block-column is-vertically-aligned-center phone-text" style="flex-basis:66.66%"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"textColor":"foreground","fontFamily":"inter"} -->
<h5 class="wp-block-heading has-foreground-color has-text-color has-link-color has-inter-font-family" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;font-size:14px;font-style:normal;font-weight:600"> <?php esc_html_e('Wish list','stylish-brand-shop'); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"textColor":"black","fontFamily":"inter"} -->
<p class="has-black-color has-text-color has-link-color has-inter-font-family" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;font-size:14px;font-style:normal;font-weight:400"><?php esc_html_e('02 items','stylish-brand-shop'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","className":"contact-main-box"} -->
<div class="wp-block-column is-vertically-aligned-center contact-main-box"><!-- wp:group {"className":"contact-box","style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group contact-box"><!-- wp:woocommerce/mini-cart {"iconColor":{"color":"#39A0A7","name":"Primary","slug":"primary","class":"has-primary-icon-color"},"productCountVisibility":"never"} /-->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"textColor":"foreground","fontFamily":"inter"} -->
<h5 class="wp-block-heading has-foreground-color has-text-color has-link-color has-inter-font-family" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;font-size:14px;font-style:normal;font-weight:600"><?php esc_html_e('Add To Cart','stylish-brand-shop'); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"textColor":"black","fontFamily":"inter"} -->
<p class="has-black-color has-text-color has-link-color has-inter-font-family" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;font-size:14px;font-style:normal;font-weight:400"><?php esc_html_e('items','stylish-brand-shop'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"header-wrapper-inner","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group header-wrapper-inner has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"verticalAlignment":"center","className":"header-main","style":{"spacing":{"blockGap":{"left":"20px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center header-main"><!-- wp:column {"verticalAlignment":"center","width":"15%","className":"product-categories-list"} -->
<div class="wp-block-column is-vertically-aligned-center product-categories-list" style="flex-basis:15%"><!-- wp:woocommerce/product-categories {"hasCount":false,"hasEmpty":true,"isDropdown":true,"style":{"elements":{"link":{"color":{"text":"#ff4242"}}},"color":{"text":"#ff4242"}},"fontSize":"tiny"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"85%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:85%"><!-- wp:columns {"verticalAlignment":"center","className":"lower-header","style":{"spacing":{"padding":{"left":"0","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"10px"},"margin":{"top":"0","bottom":"0"},"blockGap":{"left":"10px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center lower-header" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--20);padding-right:10px;padding-bottom:var(--wp--preset--spacing--20);padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":"67%","className":"header-nav","style":{"spacing":{"blockGap":"30px"}}} -->
<div class="wp-block-column is-vertically-aligned-center header-nav" style="flex-basis:67%"><!-- wp:navigation {"textColor":"black","icon":"menu","overlayBackgroundColor":"background","overlayTextColor":"heading","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account"]},"style":{"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"500"},"spacing":{"blockGap":"30px"}},"fontFamily":"inter","layout":{"type":"flex","justifyContent":"left","orientation":"horizontal"}} -->
<!-- wp:navigation-link {"label":"Home","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"About Us","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Categories","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Shop","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Page","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Blogs","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Contact Us","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"18%","className":"top-social"} -->
<div class="wp-block-column is-vertically-aligned-center top-social" style="flex-basis:18%"><!-- wp:social-links {"style":{"spacing":{"blockGap":{"top":"10px"}}}} -->
<ul class="wp-block-social-links"><!-- wp:social-link {"url":"#","service":"youtube"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"15%","className":"header-btn"} -->
<div class="wp-block-column is-vertically-aligned-center header-btn" style="flex-basis:15%"><!-- wp:group {"className":"admin-btn","style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"20px","right":"20px"},"blockGap":"10px"},"border":{"radius":"30px"}},"backgroundColor":"foreground","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group admin-btn has-foreground-background-color has-background" style="border-radius:30px;padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><!-- wp:woocommerce/customer-account {"displayStyle":"icon_only","iconStyle":"line","iconClass":"wc-block-customer-account__account-icon","textColor":"background","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}}} /-->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"background","fontSize":"extra-small","fontFamily":"inter"} -->
<p class="has-background-color has-text-color has-link-color has-inter-font-family has-extra-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Login/Resister','stylish-brand-shop'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->