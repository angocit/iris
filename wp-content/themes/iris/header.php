<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php
        if (is_search()) {
            echo "Kết quả tìm kiếm cho từ khóa: " . get_search_query();
        } elseif (is_home()) {
            bloginfo('name');
            echo " | ";
            bloginfo('description');
        } else {
            wp_title('|', true, 'right');
        }
        ?>
    </title>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet" />
    <!-- <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous"
        /> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <?php wp_head(); ?>
</head>

<body>
    <div class="bg-[#ba9b63] px-4">
        <div class="tw-container-fluid">
            <div class="flex justify-between items-center text-white py-3 lg:py-2">
                <div class="flex-1 text-sm hidden lg:flex items-center space-x-1">
                    <img src="<?= get_template_directory_uri() ?>/src/images/icons/phone.svg" /> <span>090 486 3155</span>
                </div>
                <p class="flex-1 text-center text-[10px] lg:text-[12px] m-0 uppercase tracking-[2px]">
                    MIỄN PHÍ GIAO HÀNG VỚI ĐƠN TỪ 3.000.000 VNĐ
                </p>
                <div class="lighthouse__lang flex-1 text-right hidden lg:block">
                    <span>Tiếng Việt</span>
                </div>
            </div>
        </div>
    </div>
    <nav class="md:absolute top-[50px] z-10 w-full py-2">
        <div class="max-w-screen-1xl mx-auto px-4">
            <div class="flex justify-between">
                <ul class="flex-1 hidden lg:flex items-center space-x-4 text-white">
                    <li class="nav-item">
                        <a class="nav-link text-sm" href="#">Sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-sm" href="#">Không gian nội thất</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-sm" href="#">Bộ sưu tập</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-sm" href="#">Về chúng tôi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-sm" href="#">Liên hệ</a>
                    </li>
                </ul>
                <div class="flex-1 flex lg:justify-center items-center pt-2 pb-1 lg:py-0">
                    <a href="">
                        <picture>
                            <source media="(min-width: 800px)" srcset="<?= get_template_directory_uri() ?>/src/images/logo.svg" />
                            <img src="<?= get_template_directory_uri() ?>/src/images/logo-mobile.svg" alt="" />
                        </picture>
                    </a>
                </div>
                <div class="flex-1 hidden lg:flex items-center justify-end space-x-4">
                    <form class="flex justify-end items-center border-b border-[#E5E5E5] pb-1" role="search">
                        <button class="btn btn-outline-success" type="submit">
                            <img src="<?= get_template_directory_uri() ?>/src/images/icons/search.svg" alt="" />
                        </button>
                        <input class="bg-transparent outline-none px-2 text-white text-sm w-[245px]" type="search" placeholder="Search" aria-label="Search" />
                    </form>
                    <div class="flex items-center space-x-[25px]">
                        <button>
                            <img src="<?= get_template_directory_uri() ?>/src/images/icons/heart.svg" alt="" />
                        </button>
                        <button>
                            <img src="<?= get_template_directory_uri() ?>/src/images/icons/cart.svg" alt="" />
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>