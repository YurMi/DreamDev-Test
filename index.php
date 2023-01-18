<?php get_header( )?>
<main class="main">
    <section class="first_screen">
        <div class="container">
            <div class="first_screen__content">
                <div class="first_screen__little_title light__title"><?php the_field('little_title')?>
                </div>
                <div class="first_screen__big_title big__title"><?php the_field('big_title')?></div>
                <div class="first_screen__btns">
                    <?php $buttons = get_field('buttons')?>
                    <?php if($buttons['button_1']): ?>
                    <button class="first_screen__btn btn btn_dark"><?= $buttons['button_1']?></button>
                    <?php endif;?>
                    <?php if($buttons['button_2']): ?>
                    <button class="first_screen__btn btn btn_light"><?= $buttons['button_2']?></button>
                    <?php endif;?>
                </div>

                <p class="first_screen__text"><?php the_field('text', false, false)?></p>


                <?php $partner_images = get_field('gallery_of_partners') ?>
                <?php if($partner_images): ?>
                <div class="first_screen__partners"></div>
                <?php endif;?>

            </div>
        </div>
    </section>
    <section class="image_section">
        <div class="container">
            <div class="image_section__images">
                <?php $bg_images = get_field('background_images')?>

                <?php if($bg_images['image_1']):?>
                <div class="image_section__image image_1">
                    <img src="<?=  $bg_images['image_1']?>" alt="not content image" />
                </div>
                <?php endif;?>

                <?php if($bg_images['image_2']):?>
                <div class="image_section__image image_2">
                    <img src="<?=  $bg_images['image_2']?>" alt="not content image" />
                </div>
                <?php endif;?>
            </div>
        </div>
    </section>
</main>
<?php get_footer()?>