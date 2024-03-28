<?php
get_header();
$theme_class = new THEME_CLASS();
?>
<section class="relative">
    <div class="banner-item">
        <img srcset="<?= get_option('banner_home') ?>" alt="" class="object-center h-[220px] md:h-auto lg:h-[940px] w-full" />
        <div class="banner__content">
            <h2 class="banner__title -tracking-[2px] leading-[33px] text-[36px] lg:text-[128px] lg:leading-[114px] lg:-tracking-[7px]">
                <?= get_option('title_banner_home') ?>
            </h2>
            <a href="<?= get_option('url_banner_home') ?>" class="inline-flex items-center text-white no-underline uppercase font-bold text-[10px] lg:text-[14px] font-SFPro tracking-[0.7px] mt-[5px]">
                get started <img src="<?= get_template_directory_uri() ?>/src/images/icons/arrow-right.svg" class="ml-2" />
            </a>
        </div>
    </div>
</section>
<!--End .banner-->
<section class="feature-category lg:mt-[80px]">
    <div class="max-w-screen-1xl mx-auto px-4">
        <div class="relative font-Playfair text-center pt-5 pb-3 lg:py-4 mb-1">
            <h2>
                <span class="text-xl lg:text-[36px] text-[#ba9b63] font-semibold tracking-[1px]">Danh mục
                </span>
                <span class="text-xl lg:text-[36px] text-[#1f1f1f] italic font-light tracking-[1px]">Sản phẩm</span>
            </h2>
            <div class="hidden absolute lg:flex items-center justify-end top-[67%] right-0 -translate-y-1/2">
                <div class="swiper-button-prev feature-category-prev relative">
                    <img src="<?= get_template_directory_uri() ?>/src/images/icons/arrow-slide-left.svg" />
                </div>
                <div class="swiper-button-next feature-category-next relative">
                    <img src="<?= get_template_directory_uri() ?>/src/images/icons/arrow-slide-right.svg" />
                </div>
            </div>
        </div>
        <div class="section-body">
            <div class="swiper feature-category-slides relative">
                <div class="swiper-wrapper pt-3">
                    <?php $theme_class->GetProductCat(); ?>
                </div>
            </div>
            <div class="flex lg:hidden items-center justify-center mt-10">
                <div class="swiper-button-prev feature-category-prev relative">
                    <img src="<?= get_template_directory_uri() ?>/src/images/icons/arrow-slide-left.svg" />
                </div>
                <div class="swiper-button-next feature-category-next relative">
                    <img src="<?= get_template_directory_uri() ?>/src/images/icons/arrow-slide-right.svg" />
                </div>
            </div>
        </div>
    </div>
</section>
<!--End .feature-category-->
<section class="room-space mt-12 lg:mt-[65px]">
    <div class="font-Playfair text-center py-4">
        <h2 class="mb-4 lg:mb-7">
            <span class="text-xl lg:text-[36px] text-[#1f1f1f] italic font-light tracking-[1px]">Không gian phòng</span>
            <span class="text-xl lg:text-[36px] text-[#ba9b63] font-semibold tracking-[1px]">nội thất</span>
        </h2>
        <div class="overflow-hidden">
            <ul id="room-space-tabs" class="nav room-space-tab flex justify-start space-x-4 overflow-auto whitespace-nowrap pb-7 pl-2 lg:pl-0 lg:justify-center lg:space-x-11">
                <?php
                $theme_class->Get_Slider_Home(885); ?>
            </ul>
        </div>
    </div>
    <div class="section-body">
        <div class="room-space-tab-content mb-6">
            <?php $theme_class->Get_Slider_Home(885, 'content'); ?>
        </div>
        <div class="swiper room-space-slide-2 bg-[#ba9b63]">
            <div class="swiper-wrapper">
                <div class="swiper-slide lg:h-[740px]">
                    <div class="pt-12 lg:pt-[94px] md:max-w-[490px] px-8 lg:px-5 mx-auto">
                        <?php
                        if (is_active_sidebar('bhleft')) :
                            dynamic_sidebar('bhleft');
                        endif;
                        ?>
                    </div>
                </div>
                <div class="swiper-slide lg:h-[740px]">
                    <img srcset="<?= get_option('banner_home_mid') ?> 2x" class="mx-auto object-cover h-full" alt="" />
                </div>
                <div class="swiper-slide lg:h-[740px] pt-[30px] p-8">
                    <?php
                    if (is_active_sidebar('bhright')) :
                        dynamic_sidebar('bhright');
                    endif;
                    ?>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
<section class="best-selling mt-[60px] lg:mt-[74px]">
    <div class="max-w-screen-1xl mx-auto px-4">
        <div class="font-Playfair text-center py-4">
            <h2 class="mb-4">
                <span class="text-xl lg:text-[36px] text-[#1f1f1f] italic font-light tracking-[1px]">Sản phẩm</span>
                <span class="text-xl lg:text-[36px] text-[#ba9b63] font-[500] tracking-[1px]">Bán chạy</span>
            </h2>
        </div>
        <div>
            <div class="swiper best-selling-slide pb-8 mb-5 hidden md:block">
                <div class="swiper-wrapper">
                    <?php $theme_class->Get_BestSellerProducts(); ?>
                </div>
                <div class="swiper-scrollbar"></div>
            </div>
            <div class="swiper best-selling-slide pb-5 lg:pb-20 block md:hidden">
                <div class="swiper-wrapper">
                    <?php $theme_class->Get_BestSellerProducts(4); ?>
                </div>
                <div class="swiper-scrollbar"></div>
            </div>
        </div>
    </div>
</section>
<!--End .room-space-->
<div class="partners mb-[25px]">
    <div class="swiper partners-swiper">
        <div class="swiper-wrapper">
            <?= $theme_class->Get_logoPartner(18757) ?>
        </div>
    </div>
</div>
<section class="video relative h-[230px] sm:h-auto lg:h-[860px]">
    <div class="video-container">
        <!-- <video id="background-video" autoplay muted loop poster="./images/banner3.jpg">
                    <source
                        src="https://www.youtube.com/embed/dw3hGjrAq-A?si=dl5iRxH1vykQy301"
                        type="video/mp4"
                    />
                </video> -->
        <img src="<?= get_template_directory_uri() ?>/src/images/banner3.jpg" alt="" class="h-[230px] sm:h-auto lg:h-[860px] object-cover" />
    </div>
    <h2 class="banner__title absolute left-1/2 -bottom-[6px] xl:-bottom-[60px] -translate-x-1/2 text-6xl md:text-9xl xl:text-10xl xl:leading-[240px] w-full">
        YOUR HOME
    </h2>
    <button id="play-button" class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-16 lg:w-auto">
        <img src="<?= get_template_directory_uri() ?>/src/images/icons/play.svg" alt="" />
    </button>
</section>
<section class="trending bg-[#F9F5F0] pt-[12px] pb-10 lg:pt-[45px] lg:h-[940px] lg:pb-0">
    <div class="mx-auto px-4 lg:px-20">
        <div class="font-Playfair text-center py-4">
            <h2 class="mb-[5px]">
                <span class="text-xl lg:text-[36px] text-[#1f1f1f] italic font-light tracking-[1px]">Xu hướng</span>
                <span class="text-xl lg:text-[36px] text-[#ba9b63] font-[500] tracking-[1px]">
                    Thế giới</span>
            </h2>
            <span class="font-SFPro">Định vị phong cách - mở góc khác biệt</span>
        </div>
        <div>
            <div class="swiper trending-slides">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="grid lg:grid-cols-[auto,40%,auto] lg:h-[780px]">
                            <?php
                            if (is_active_sidebar('xhleft')) :
                                dynamic_sidebar('xhleft');
                            endif;
                            ?>
                            <div class="pt-4 lg:pt-[134px] font-SFPro text-center font-SFPro text-lg md:text-2xl lg:text-4xl text-[#1F1F1F] space-y-5">
                                <h2>Những set Bàn Ăn ấn tượng</h2>
                                <?php
                                if (is_active_sidebar('xhmid')) :
                                    dynamic_sidebar('xhmid');
                                endif;
                                ?>
                            </div>

                            <div class="hidden lg:block self-end mb-10">
                                <?php
                                if (is_active_sidebar('xhright')) :
                                    dynamic_sidebar('xhright');
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="projects mt-[72px]">
    <div class="max-w-screen-1xl mx-auto px-4">
        <div class="font-Playfair text-center py-4 mb-[18px]">
            <h2>
                <span class="text-[36px] text-[#1f1f1f] italic font-light tracking-[1px]">Dự án</span>
                <span class="text-[36px] text-[#ba9b63] font-[500] tracking-[1px]">
                    Tiêu biểu</span>
            </h2>
        </div>
        <div>
            <div class="swiper project-slides">
                <div class="swiper-wrapper">
                    <?php $theme_class->Get_Project_Home(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End .projects-->
<section class="baochi mt-5 lg:mt-[71px]">
    <div class="max-w-screen-1xl mx-auto px-4">
        <div class="font-Playfair text-center py-4 mb-6">
            <h2>
                <span class="text-xl text-[36px] text-[#1f1f1f] italic font-light tracking-[1px]">Báo chí</span>
                <span class="text-xl text-[36px] text-[#ba9b63] font-[500] tracking-[1px]">
                    Nói về chúng tôi</span>
            </h2>
        </div>
        <div>
            <div class="flex gap-4 justify-center mx-auto lg:space-x-11 items-center">
                <?php
                if (is_active_sidebar('baochi')) :
                    dynamic_sidebar('baochi');
                endif;
                ?>
            </div>
        </div>
    </div>
</section>
<section class="instagram my-4 lg:my-8">
    <div class="mx-auto px-4 lg:px-8">
        <div class="font-Playfair text-center py-4 mb-6">
            <h2>
                <span class="text-xl text-[36px] text-[#1f1f1f] italic font-light tracking-[1px]">Theo dõi chúng tôi trên
                </span>
                <span class="text-xl text-[36px] text-[#ba9b63] font-[500] tracking-[1px]">
                    Instagram</span>
            </h2>
        </div>
        <div class="grid grid-cols-2 lg:grid-cols-6 gap-4">
        <?php
                if (is_active_sidebar('instagram')) :
                    dynamic_sidebar('instagram');
                endif;
                ?>
        </div>
    </div>
</section>
<?php
get_footer();
?>