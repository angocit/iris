<div class="product-item text-center">
    <img srcset="<?= get_the_post_thumbnail_url($value->ID,'') ?> 2x" />
    <h3 class="font-SFPro text-sm uppercase text-[#1F1F1F]">
        <a href="<?=get_permalink($value->ID)?>"><?=$value->post_title?></a>
    </h3>
    <div class="mt-2 flex space-x-4 justify-center font-SFPro">
        <?=$product->get_price_html()?>
    </div>
    <div class="flex justify-center items-center space-x-1.5 mt-3">
        <div class="attribute-item bg-[#BC8A40]"></div>
        <div class="attribute-item bg-[#C5B7A3]"></div>
        <div class="attribute-item bg-[#737272]"></div>
        <div class="attribute-item bg-[#0F2944]"></div>
        <span class="text-[#9CA4AB]">+</span>
    </div>
</div>