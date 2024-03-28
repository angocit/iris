<?php 
$thumbnail_id = get_term_meta( $value->term_id, 'thumbnail_id', true );
$image_url    = wp_get_attachment_url( $thumbnail_id )
?>
<div class="text-center">
    <div class="feature-category__img">
        <img
            srcset="<?=$image_url?> 2x"
            alt=""
            class="w-full"
        />
    </div>
    <h3 class="feature-category__name"><a href="<?=get_term_link($value->term_id,'product_cat')?>" class="feature-category__link 2x"><?=$value->name?></a></h3>
</div>