<?php
/**
 * Template Name: Coming Soon
 *
 * The template file for displaying home page.
 */

get_header(); ?>

<div class="comingSoonWrap">
  <div class="row">
    <div class="">
      <div class="comingSoon__imageWrap comingSoon__imageWrapMobile">
        <img class="comingSoon__mainImage" src="<?php echo get_field('main_picture')['url']; ?>" alt="">
        <div class="comingSoon__imgOverlay"></div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="comingSoon__content">
        <img class="comingSoon__comingSoonImg" src="<?php echo get_field('coming_soon_text_pic')['url']; ?>" alt="">
        <img class="comingSoon__logo" src="<?php echo get_field('logo')['url']; ?>" alt="">
        <p class="comingSoon__slogan"><?php the_field('slogan'); ?></p>
        <a class="comingSoon__storeLink" href="<?php the_field('store_link') ?>"><?php the_field('store_link_text') ?></a>
        <p class="comingSoon__lgoDescription"><?php the_field('lgo_description') ?></p>
      </div>
      <div class="comingSoon__socialLinks">
        <span class="comingSoon__socialGroup">
          <a href="mailto:hello@lgocrew.com" class="">hello@lgocrew.com</a>
        </span>
        <span class="comingSoon__socialGroup">
          <a href="facebook.com"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          <a href="facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a href="facebook.com"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
        </span>
        <span class="comingSoon__socialGroup">877 Alness st, unit 5</span>
      </div>
    </div>
    <div class="comingSoon__imageWrapDesktop">
      <div class="comingSoon__imageWrap">
        <img class="comingSoon__mainImage" src="<?php echo get_field('main_picture')['url']; ?>" alt="">
        <div class="comingSoon__imgOverlay"></div>
      </div>
    </div>

    
  </div>
</div>

<?php get_footer(); ?>
