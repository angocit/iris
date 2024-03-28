<?php
get_header();
$theme_class = new THEME_CLASS();
?>
<section class="max-w-screen-1xl mx-auto p-4 breadcrumb-container">
      <ul class="breadcrumb flex items-center">
        <li class="breadcrumb-item">
          <a href="#">Trang chủ</a>
          <img src="./images/icons/right.png" alt="" />
        </li>
        <li class="breadcrumb-item">
          <a href="#">Sản phẩm</a> <img src="./images/icons/right.png" alt="" />
        </li>
        <li class="breadcrumb-item breadcrumb-active" aria-current="page">
          <a href="#">Ghế Sofa</a>
        </li>
      </ul>
    </section>
    <!--End .breadcrumb-category-->
    <section class="max-w-screen-1xl mx-auto px-4 lg:mt-[80px]">
      <div class="gap-11 lg:flex lg:items-center lg:flex-wrap">
        <div class="font-Playfair py-4 lg:w-[30%]">
          <h2 class="mb-4 lg:mb-7 text-center lg:text-left">
            <span
              class="text-[32px] lg:text-[56px] text-[#62606a] italic font-light tracking-[1px]"
              >Ghế
            </span>
            <span
              class="text-[32px] lg:text-[56px] text-[#ba9b63] font-light tracking-[1px]"
              >Sofa</span
            >
          </h2>
          <p
            class="font-SFPro line-clamp-3 mt-1 mb-6 lg:mt-3 lg:mb-5 leading-tight text-[16px]"
          >
            Sunny Table là sự kết hợp hài hòa giữa hình thức và chức năng. Tựa
            lưng cong nâng niu điểm chạm từ các phía, bề mặt ngồi thoải mái, cả
            hai đều có kết cấu kim loại bọc bên ngoài một lớp mút polyurethane.
          </p>
        </div>

        <div class="lg:flex-1 flex justify-center">
          <img
            class="w-[375px] lg:w-[940px]"
            src="./images/banner/banner-products 1.png"
            alt=""
          />
        </div>
      </div>
    </section>
    <!--End .products-page-banner--->
    <section class="feature-category mt-[40px] lg:mt-[80px] my-5">
      <div class="max-w-screen-1xl mx-auto px-4">
        <div class="section-body">
          <div class="swiper feature-category-slides">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="grid grid-cols-3 lg:grid-cols-6 gap-x-8 gap-y-4">
                  <div class="text-center">
                    <div class="feature-category__img">
                      <img
                        srcset="./images/products/1.jpg 2x"
                        alt=""
                        class="w-full"
                      />
                    </div>
                    <h3 class="feature-category__name">Ghế Ăn</h3>
                    <a href="" class="feature-category__link 2x"></a>
                  </div>
                  <div class="text-center">
                    <div class="feature-category__img">
                      <img
                        srcset="./images/products/2.jpg 2x"
                        alt=""
                        class="w-full"
                      />
                    </div>
                    <h3 class="feature-category__name">Bàn Trà</h3>
                    <a href="" class="feature-category__link 2x"></a>
                  </div>
                  <div class="text-center">
                    <div class="feature-category__img">
                      <img
                        srcset="./images/products/3.jpg 2x"
                        alt=""
                        class="w-full"
                      />
                    </div>
                    <h3 class="feature-category__name">Kệ Tivi</h3>
                    <a href="" class="feature-category__link 2x"></a>
                  </div>
                  <div class="text-center">
                    <div class="feature-category__img">
                      <img
                        srcset="./images/products/4.jpg 2x"
                        alt=""
                        class="w-full"
                      />
                    </div>
                    <h3 class="feature-category__name">Tủ Giày</h3>
                    <a href="" class="feature-category__link 2x"></a>
                  </div>
                  <div class="text-center">
                    <div class="feature-category__img">
                      <img
                        srcset="./images/products/5.jpg 2x"
                        alt=""
                        class="w-full"
                      />
                    </div>
                    <h3 class="feature-category__name">Ghế Sofa</h3>
                    <a href="" class="feature-category__link 2x"></a>
                  </div>
                  <div class="text-center">
                    <div class="feature-category__img">
                      <img
                        srcset="./images/products/6.jpg 2x"
                        alt=""
                        class="w-full"
                      />
                    </div>
                    <h3 class="feature-category__name">Bàn Ăn</h3>
                    <a href="" class="feature-category__link 2x"></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-button-next feature-category-next"></div>
            <div class="swiper-button-prev feature-category-prev"></div>
          </div>
        </div>
      </div>
    </section>
    <!--End .feature-category-->
    <div
      class="filter-product border-y-[1px] border-[#cccccc] my-[40px] lg:my-[80px]"
    >
      <div class="flex justify-between max-w-screen-1xl mx-auto px-4">
        <div class="flex justify-start items-center py-5">
          <div class="flex justify-start items-center gap-4">
            <div   id="open-products-filter" class="flex items-center gap-2 cursor-pointer">
              <img src="./images/icons/filters.png" alt="" />
              <p
              
                class="uppercase font-SFPro text-[14px] font-medium "
                href=""
                >Bộ lọc</a
              >
            </div>
            <a
              class="hidden lg:block uppercase font-SFPro text-[14px] font-medium text-[#78828a] hover:underline hover:border-[#78828a]"
              href=""
              >Xoá bộ lọc</a
            >
          </div>
          <div></div>
        </div>
        <div class="flex justify-between gap-8 items-center">
          <div class="flex gap-2">
            <span
              class="uppercase font-SFPro text-[14px] text-[#ba9b63] font-semibold"
            >
              80
            </span>
            <p class="uppercase font-SFPro text-[14px] font-semibold" href="">
              Sản phẩm
            </p>
          </div>
          <div class="flex items-center gap-8">
            <p
              class="hidden lg:block uppercase font-SFPro text-[14px] font-semibold"
              href=""
            >
              Xắp xếp theo :
            </p>
            <div class="flex items-center gap-2">
              <a
                class="uppercase font-SFPro text-[14px] font-medium text-[#cccccc] hover:underline hover:border-[#cccccc]"
                href=""
                >Thứ tự a-z</a
              >
              <img src="./images/icons/down.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End .filter-->
    <div id="fullscreen-modal" class="fixed inset-0 z-50 overflow-auto bg-gray-800 bg-opacity-75 hidden">
    <div class="bg-white w-full h-full">
      <div class="flex justify-between p-4 ">
        <p             
        class="uppercase font-SFPro text-[14px] font-medium "
        href=""
        >Bộ lọc</p>
        <a
        class=" uppercase font-SFPro text-[14px] font-bold text-[#78828a] hover:underline hover:border-[#78828a]"
        href=""
        >Xoá bộ lọc</a>
      <button id="modal-close-btn" class="">Close</button>
      </div>
      <div  class="p-4" >
        <ul >
          <li >
              <button  class="faq-button relative flex gap-44 items-center w-full py-2 text-base font-semibold text-left  md:text-lg border-base-content/10" aria-expanded="false" >
                  <span class="flex-1 text-left font-SFPro text-[14px] font-semibold uppercase text-base-content">Các danh mục khác</span>
                  <img class="image_plus flex-shrink-0 w-4 h-4 ml-auto fill-current" src="./images/icons/plus 2.png" alt="">
              </button>
              <div class="transition-all  duration-300 ease-in-out max-h-0 overflow-hidden" style="transition: max-height 0.3s ease-in-out 0s;">
                  <div class=" space-y-[16px] leading-relaxed">
                      <div class="leading-relaxed font-SFPro text-[14px] font-medium "><a class="hover:underline" href="">Danh mục 1</a></div>
                      <div class="leading-relaxed font-SFPro text-[14px] font-medium text-[#ba9b63]"><a class="hover:underline" href="">Danh mục 2</a></div>
                  </div>
              </div>
          </li>
          <li >
            <button  class="faq-button relative flex gap-44 items-center w-full py-2 text-base font-semibold text-left  md:text-lg border-base-content/10" aria-expanded="false" >
                <span class="flex-1 text-left font-SFPro text-[14px] font-semibold uppercase text-base-content">Màu</span>
                <img class="image_plus flex-shrink-0 w-4 h-4 ml-auto fill-current" src="./images/icons/plus 2.png" alt="">
            </button>
            <div class="transition-all  duration-300 ease-in-out max-h-0 overflow-hidden" style="transition: max-height 0.3s ease-in-out 0s; ">
              <div class="grid grid-cols-2 gap-x-[56px] gap-y-[16px] py-[8px] ">
                <div class="cursor-pointer flex items-center gap-1">
                  <div class="rounded-full w-[30px] h-[30px] bg-black">
                  </div>
                  <span class=" leading-relaxed font-SFPro text-[14px] font-medium">
                    Đen (24)
                  </span>
                </div>
                <div class="cursor-pointer flex items-center gap-1">
                  <div class="rounded-full w-[30px] h-[30px] bg-[#38618A]">
                  </div>
                  <span class=" leading-relaxed font-SFPro text-[14px] font-medium">
                    Đen (24)
                  </span>
                </div>
                <div class="cursor-pointer flex items-center gap-1">
                  <div class="rounded-full w-[30px] h-[30px] bg-black">
                  </div>
                  <span class=" leading-relaxed font-SFPro text-[14px] font-medium">
                    Đen (24)
                  </span>
                </div>
                <div class="cursor-pointer flex items-center gap-1">
                  <div class="rounded-full w-[30px] h-[30px] bg-[#38618A]">
                  </div>
                  <span class=" leading-relaxed font-SFPro text-[14px] font-medium">
                    Đen (24)
                  </span>
                </div>
              </div>                
            </div>
        </li>
          <li >
            <button  class="faq-button relative flex gap-44 items-center w-full py-2 text-base font-semibold text-left  md:text-lg border-base-content/10" aria-expanded="false" >
                <span class="flex-1 text-left font-SFPro text-[14px] font-semibold uppercase text-base-content">Giá</span>
                <img class="image_plus flex-shrink-0 w-4 h-4 ml-auto fill-current" src="./images/icons/plus 2.png" alt="">
            </button>
            <div class="transition-all  duration-300 ease-in-out max-h-0 overflow-hidden" style="transition: max-height 0.3s ease-in-out 0s; ">
              <div >
                <input type="range" class="overflow-hidden   h-2 w-full cursor-ew-resize appearance-none rounded-full bg-gray-200 disabled:cursor-not-allowed">
                <div class="flex justify-between w-full">
                  <div>0</div>
                  <div>10</div>
              </div>
            </div>
            
            </div>
        </li>
        <li >
          <button  class="faq-button relative flex gap-44 items-center w-full py-2 text-base font-semibold text-left  md:text-lg border-base-content/10" aria-expanded="false" >
              <span class="flex-1 text-left font-SFPro text-[14px] font-semibold uppercase text-base-content">Thương hiệu</span>
              <img class="image_plus flex-shrink-0 w-4 h-4 ml-auto fill-current" src="./images/icons/plus 2.png" alt="">
          </button>
          <div class="transition-all  duration-300 ease-in-out max-h-0 overflow-hidden" style="transition: max-height 0.3s ease-in-out 0s;">
              <div class=" space-y-[16px] leading-relaxed">
                  <div class="leading-relaxed font-SFPro text-[14px] font-medium "><a class="hover:underline" href="">Thương hiệu 1</a></div>
                  <div class="leading-relaxed font-SFPro text-[14px] font-medium text-[#ba9b63]"><a class="hover:underline" href="">Thương hiệu 2</a></div>
              </div>
          </div>
      </li>
        <li >
          <button  class="faq-button relative flex gap-44 items-center w-full py-2 text-base font-semibold text-left  md:text-lg border-base-content/10" aria-expanded="false" >
              <span class="flex-1 text-left font-SFPro text-[14px] font-semibold uppercase text-base-content">Chất liệu</span>
              <img class="image_plus flex-shrink-0 w-4 h-4 ml-auto fill-current" src="./images/icons/plus 2.png" alt="">
          </button>
          <div class="transition-all  duration-300 ease-in-out max-h-0 overflow-hidden" style="transition: max-height 0.3s ease-in-out 0s;">
            <div class="grid grid-cols-2 gap-x-[56px] gap-y-[16px] py-[16px] ">
              <div class="cursor-pointer flex items-center gap-1">
                <div class="rounded-full w-[30px] h-[30px] bg-black">
                </div>
                <span class=" leading-relaxed font-SFPro text-[14px] font-medium">
                  Vải (24)
                </span>
              </div>
              <div class="cursor-pointer flex items-center gap-1">
                <div class="rounded-full w-[30px] h-[30px] bg-[#38618A]">
                </div>
                <span class=" leading-relaxed font-SFPro text-[14px] font-medium">
                  Da (24)
                </span>
              </div>
              <div class="cursor-pointer flex items-center gap-1">
                <div class="rounded-full w-[30px] h-[30px] bg-black">
                </div>
                <span class=" leading-relaxed font-SFPro text-[14px] font-medium">
                  Gỗ sổi (24)
                </span>
              </div>
              <div class="cursor-pointer flex items-center gap-1">
                <div class="rounded-full w-[30px] h-[30px] bg-[#38618A]">
                </div>
                <span class=" leading-relaxed font-SFPro text-[14px] font-medium">
                  Đen (24)
                </span>
              </div>
            </div>    
          </div>
      </li>
      <li >
        <button  class="faq-button relative flex gap-44 items-center w-full py-2 text-base font-semibold text-left  md:text-lg border-base-content/10" aria-expanded="false" >
            <span class="flex-1 text-left font-SFPro text-[14px] font-semibold uppercase text-base-content">Kiểu dáng</span>
            <img class="image_plus flex-shrink-0 w-4 h-4 ml-auto fill-current" src="./images/icons/plus 2.png" alt="">
        </button>
        <div class="transition-all  duration-300 ease-in-out max-h-0 overflow-hidden" style="transition: max-height 0.3s ease-in-out 0s;">
            <div class=" space-y-[16px] leading-relaxed">
                <div class="leading-relaxed font-SFPro text-[14px] font-medium "><a class="hover:underline" href="">Kiểu dáng 1</a></div>
                <div class="leading-relaxed font-SFPro text-[14px] font-medium text-[#ba9b63]"><a class="hover:underline" href="">Kiểu dáng 2</a></div>
            </div>
        </div>
    </li>
    <li >
      <button  class="faq-button relative flex gap-44 items-center w-full py-2 text-base font-semibold text-left  md:text-lg border-base-content/10" aria-expanded="false" >
          <span class="flex-1 text-left font-SFPro text-[14px] font-semibold uppercase text-base-content">Decor theo phòng</span>
          <img class="image_plus flex-shrink-0 w-4 h-4 ml-auto fill-current" src="./images/icons/plus 2.png" alt="">
      </button>
      <div class="transition-all  duration-300 ease-in-out max-h-0 overflow-hidden" style="transition: max-height 0.3s ease-in-out 0s;">
          <div class=" space-y-[16px] leading-relaxed">
              <div class="leading-relaxed font-SFPro text-[14px] font-medium "><a class="hover:underline" href="">Decor theo phòng 1</a></div>
              <div class="leading-relaxed font-SFPro text-[14px] font-medium text-[#ba9b63]"><a class="hover:underline" href="">Decor theo phòng 2</a></div>
          </div>
      </div>
  </li>
  <li >
    <button  class="faq-button relative flex gap-44 items-center w-full py-2 text-base font-semibold text-left  md:text-lg border-base-content/10" aria-expanded="false" >
        <span class="flex-1 text-left font-SFPro text-[14px] font-semibold uppercase text-base-content">Bộ sưu tập</span>
        <img class="image_plus flex-shrink-0 w-4 h-4 ml-auto fill-current" src="./images/icons/plus 2.png" alt="">
    </button>
    <div class="transition-all  duration-300 ease-in-out max-h-0 overflow-hidden" style="transition: max-height 0.3s ease-in-out 0s;">
        <div class=" space-y-[16px] leading-relaxed">
            <div class="leading-relaxed font-SFPro text-[14px] font-medium "><a class="hover:underline" href="">Bộ sưu tập 1</a></div>
            <div class="leading-relaxed font-SFPro text-[14px] font-medium text-[#ba9b63]"><a class="hover:underline" href="">Bộ sưu tập 2</a></div>
        </div>
    </div>
</li>

      </ul>         
    </div>
    </div>
    </div>
    <!-- End .modal-filter-->
    <section class="list-products">
      <div class="flex max-w-screen-1xl mx-auto px-4">
       <!-- <div id="list-option" class="hidden "> -->
        <div id="list-option" class="hidden ">
          
        <div class="mt-[-40px] ">
          <div >
              <h2 class="text-left font-SFPro text-[16px] pb-3 font-semibold uppercase">Bộ lọc</h2>
          </div>
          <div >
            <ul class="space-y-2 basis-1/2">
              <li >
                  <button  class="faq-button relative flex gap-44 items-center w-full py-2 text-base font-semibold text-left  md:text-lg border-base-content/10" aria-expanded="false" >
                      <span class="flex-1 text-left font-SFPro text-[14px] font-semibold uppercase text-base-content">Các danh mục khác</span>
                      <img class="image_plus flex-shrink-0 w-4 h-4 ml-auto fill-current" src="./images/icons/plus 2.png" alt="">
                  </button>
                  <div class="transition-all  duration-300 ease-in-out max-h-0 overflow-hidden" style="transition: max-height 0.3s ease-in-out 0s;">
                      <div class=" space-y-[16px] leading-relaxed">
                          <div class="leading-relaxed font-SFPro text-[14px] font-medium "><a class="hover:underline" href="">Danh mục 1</a></div>
                          <div class="leading-relaxed font-SFPro text-[14px] font-medium text-[#ba9b63]"><a class="hover:underline" href="">Danh mục 2</a></div>
                      </div>
                  </div>
              </li>
              <li >
                <button  class="faq-button relative flex gap-44 items-center w-full py-2 text-base font-semibold text-left  md:text-lg border-base-content/10" aria-expanded="false" >
                    <span class="flex-1 text-left font-SFPro text-[14px] font-semibold uppercase text-base-content">Màu</span>
                    <img class="image_plus flex-shrink-0 w-4 h-4 ml-auto fill-current" src="./images/icons/plus 2.png" alt="">
                </button>
                <div class="transition-all  duration-300 ease-in-out max-h-0 overflow-hidden" style="transition: max-height 0.3s ease-in-out 0s; ">
                  <div class="grid grid-cols-2 gap-x-[56px] gap-y-[16px] py-[8px] ">
                    <div class="cursor-pointer flex items-center gap-1">
                      <div class="rounded-full w-[30px] h-[30px] bg-black">
                      </div>
                      <span class=" leading-relaxed font-SFPro text-[14px] font-medium">
                        Đen (24)
                      </span>
                    </div>
                    <div class="cursor-pointer flex items-center gap-1">
                      <div class="rounded-full w-[30px] h-[30px] bg-[#38618A]">
                      </div>
                      <span class=" leading-relaxed font-SFPro text-[14px] font-medium">
                        Đen (24)
                      </span>
                    </div>
                    <div class="cursor-pointer flex items-center gap-1">
                      <div class="rounded-full w-[30px] h-[30px] bg-black">
                      </div>
                      <span class=" leading-relaxed font-SFPro text-[14px] font-medium">
                        Đen (24)
                      </span>
                    </div>
                    <div class="cursor-pointer flex items-center gap-1">
                      <div class="rounded-full w-[30px] h-[30px] bg-[#38618A]">
                      </div>
                      <span class=" leading-relaxed font-SFPro text-[14px] font-medium">
                        Đen (24)
                      </span>
                    </div>
                  </div>                
                </div>
            </li>
              <li >
                <button  class="faq-button relative flex gap-44 items-center w-full py-2 text-base font-semibold text-left  md:text-lg border-base-content/10" aria-expanded="false" >
                    <span class="flex-1 text-left font-SFPro text-[14px] font-semibold uppercase text-base-content">Giá</span>
                    <img class="image_plus flex-shrink-0 w-4 h-4 ml-auto fill-current" src="./images/icons/plus 2.png" alt="">
                </button>
                <div class="transition-all  duration-300 ease-in-out max-h-0 overflow-hidden" style="transition: max-height 0.3s ease-in-out 0s; ">
                  <div >
                    <input type="range" class="overflow-hidden   h-2 w-full cursor-ew-resize appearance-none rounded-full bg-gray-200 disabled:cursor-not-allowed">
                    <div class="flex justify-between w-full">
                      <div>0</div>
                      <div>10</div>
                  </div>
                </div>
                
                </div>
            </li>
            <li >
              <button  class="faq-button relative flex gap-44 items-center w-full py-2 text-base font-semibold text-left  md:text-lg border-base-content/10" aria-expanded="false" >
                  <span class="flex-1 text-left font-SFPro text-[14px] font-semibold uppercase text-base-content">Thương hiệu</span>
                  <img class="image_plus flex-shrink-0 w-4 h-4 ml-auto fill-current" src="./images/icons/plus 2.png" alt="">
              </button>
              <div class="transition-all  duration-300 ease-in-out max-h-0 overflow-hidden" style="transition: max-height 0.3s ease-in-out 0s;">
                  <div class=" space-y-[16px] leading-relaxed">
                      <div class="leading-relaxed font-SFPro text-[14px] font-medium "><a class="hover:underline" href="">Thương hiệu 1</a></div>
                      <div class="leading-relaxed font-SFPro text-[14px] font-medium text-[#ba9b63]"><a class="hover:underline" href="">Thương hiệu 2</a></div>
                  </div>
              </div>
          </li>
            <li >
              <button  class="faq-button relative flex gap-44 items-center w-full py-2 text-base font-semibold text-left  md:text-lg border-base-content/10" aria-expanded="false" >
                  <span class="flex-1 text-left font-SFPro text-[14px] font-semibold uppercase text-base-content">Chất liệu</span>
                  <img class="image_plus flex-shrink-0 w-4 h-4 ml-auto fill-current" src="./images/icons/plus 2.png" alt="">
              </button>
              <div class="transition-all  duration-300 ease-in-out max-h-0 overflow-hidden" style="transition: max-height 0.3s ease-in-out 0s;">
                <div class="grid grid-cols-2 gap-x-[56px] gap-y-[16px] py-[16px] ">
                  <div class="cursor-pointer flex items-center gap-1">
                    <div class="rounded-full w-[30px] h-[30px] bg-black">
                    </div>
                    <span class=" leading-relaxed font-SFPro text-[14px] font-medium">
                      Vải (24)
                    </span>
                  </div>
                  <div class="cursor-pointer flex items-center gap-1">
                    <div class="rounded-full w-[30px] h-[30px] bg-[#38618A]">
                    </div>
                    <span class=" leading-relaxed font-SFPro text-[14px] font-medium">
                      Da (24)
                    </span>
                  </div>
                  <div class="cursor-pointer flex items-center gap-1">
                    <div class="rounded-full w-[30px] h-[30px] bg-black">
                    </div>
                    <span class=" leading-relaxed font-SFPro text-[14px] font-medium">
                      Gỗ sổi (24)
                    </span>
                  </div>
                  <div class="cursor-pointer flex items-center gap-1">
                    <div class="rounded-full w-[30px] h-[30px] bg-[#38618A]">
                    </div>
                    <span class=" leading-relaxed font-SFPro text-[14px] font-medium">
                      Đen (24)
                    </span>
                  </div>
                </div>    
              </div>
          </li>
          <li >
            <button  class="faq-button relative flex gap-44 items-center w-full py-2 text-base font-semibold text-left  md:text-lg border-base-content/10" aria-expanded="false" >
                <span class="flex-1 text-left font-SFPro text-[14px] font-semibold uppercase text-base-content">Kiểu dáng</span>
                <img class="image_plus flex-shrink-0 w-4 h-4 ml-auto fill-current" src="./images/icons/plus 2.png" alt="">
            </button>
            <div class="transition-all  duration-300 ease-in-out max-h-0 overflow-hidden" style="transition: max-height 0.3s ease-in-out 0s;">
                <div class=" space-y-[16px] leading-relaxed">
                    <div class="leading-relaxed font-SFPro text-[14px] font-medium "><a class="hover:underline" href="">Kiểu dáng 1</a></div>
                    <div class="leading-relaxed font-SFPro text-[14px] font-medium text-[#ba9b63]"><a class="hover:underline" href="">Kiểu dáng 2</a></div>
                </div>
            </div>
        </li>
        <li >
          <button  class="faq-button relative flex gap-44 items-center w-full py-2 text-base font-semibold text-left  md:text-lg border-base-content/10" aria-expanded="false" >
              <span class="flex-1 text-left font-SFPro text-[14px] font-semibold uppercase text-base-content">Decor theo phòng</span>
              <img class="image_plus flex-shrink-0 w-4 h-4 ml-auto fill-current" src="./images/icons/plus 2.png" alt="">
          </button>
          <div class="transition-all  duration-300 ease-in-out max-h-0 overflow-hidden" style="transition: max-height 0.3s ease-in-out 0s;">
              <div class=" space-y-[16px] leading-relaxed">
                  <div class="leading-relaxed font-SFPro text-[14px] font-medium "><a class="hover:underline" href="">Decor theo phòng 1</a></div>
                  <div class="leading-relaxed font-SFPro text-[14px] font-medium text-[#ba9b63]"><a class="hover:underline" href="">Decor theo phòng 2</a></div>
              </div>
          </div>
      </li>
      <li >
        <button  class="faq-button relative flex gap-44 items-center w-full py-2 text-base font-semibold text-left  md:text-lg border-base-content/10" aria-expanded="false" >
            <span class="flex-1 text-left font-SFPro text-[14px] font-semibold uppercase text-base-content">Bộ sưu tập</span>
            <img class="image_plus flex-shrink-0 w-4 h-4 ml-auto fill-current" src="./images/icons/plus 2.png" alt="">
        </button>
        <div class="transition-all  duration-300 ease-in-out max-h-0 overflow-hidden" style="transition: max-height 0.3s ease-in-out 0s;">
            <div class=" space-y-[16px] leading-relaxed">
                <div class="leading-relaxed font-SFPro text-[14px] font-medium "><a class="hover:underline" href="">Bộ sưu tập 1</a></div>
                <div class="leading-relaxed font-SFPro text-[14px] font-medium text-[#ba9b63]"><a class="hover:underline" href="">Bộ sưu tập 2</a></div>
            </div>
        </div>
    </li>
   
          </ul>         
        </div>
        </div>
       </div>
        <div
        id="list-product"
          class=" grid grid-cols-2 md:grid-cols-4 gap-8 pb-7 border-b-[1px] border-[#ccccc]"
        >
          <div class="product-item text-center">
            <img srcset="./images/products/12.png 2x" />
            <h3 class="font-SFPro text-sm uppercase text-[#1F1F1F]">
              <a href="">Ghế ăn cao cấp Matt</a>
            </h3>
            <div class="mt-2 flex space-x-4 justify-center">
              <span class="font-SFPro text-[#1F1F1F]">4,920,000₫</span>
              <span class="font-SFPro text-[#9CA4AB] line-through"
                >5,800,000₫</span
              >
            </div>
            <div class="flex justify-center items-center space-x-1.5 mt-3">
              <div class="attribute-item bg-[#BC8A40]"></div>
              <div class="attribute-item bg-[#C5B7A3]"></div>
              <div class="attribute-item bg-[#737272]"></div>
              <div class="attribute-item bg-[#0F2944]"></div>
              <span class="text-[#9CA4AB]">+</span>
            </div>
          </div>
          <div class="product-item text-center">
            <img srcset="./images/products/13.png 2x" />
            <h3 class="font-SFPro text-sm uppercase text-[#1F1F1F]">
              <a href="">Ghế ăn cao cấp Matt</a>
            </h3>
            <div class="mt-2 flex space-x-4 justify-center">
              <span class="font-SFPro text-[#1F1F1F]">4,920,000₫</span>
              <span class="font-SFPro text-[#9CA4AB] line-through"
                >5,800,000₫</span
              >
            </div>
            <div class="flex justify-center items-center space-x-1.5 mt-3">
              <div class="attribute-item bg-[#BC8A40]"></div>
              <div class="attribute-item bg-[#C5B7A3]"></div>
              <div class="attribute-item bg-[#737272]"></div>
              <div class="attribute-item bg-[#0F2944]"></div>
              <span class="text-[#9CA4AB]">+</span>
            </div>
          </div>
          <div class="product-item text-center">
            <img srcset="./images/products/14.png 2x" />
            <h3 class="font-SFPro text-sm uppercase text-[#1F1F1F]">
              <a href="">Ghế ăn cao cấp Matt</a>
            </h3>
            <div class="mt-2 flex space-x-4 justify-center">
              <span class="font-SFPro text-[#1F1F1F]">4,920,000₫</span>
              <span class="font-SFPro text-[#9CA4AB] line-through"
                >5,800,000₫</span
              >
            </div>
            <div class="flex justify-center items-center space-x-1.5 mt-3">
              <div class="attribute-item bg-[#BC8A40]"></div>
              <div class="attribute-item bg-[#C5B7A3]"></div>
              <div class="attribute-item bg-[#737272]"></div>
              <div class="attribute-item bg-[#0F2944]"></div>
              <span class="text-[#9CA4AB]">+</span>
            </div>
          </div>
          <div class="product-item text-center">
            <img srcset="./images/products/12.png 2x" />
            <h3 class="font-SFPro text-sm uppercase text-[#1F1F1F]">
              <a href="">Ghế ăn cao cấp Matt</a>
            </h3>
            <div class="mt-2 flex space-x-4 justify-center">
              <span class="font-SFPro text-[#1F1F1F]">4,920,000₫</span>
              <span class="font-SFPro text-[#9CA4AB] line-through"
                >5,800,000₫</span
              >
            </div>
            <div class="flex justify-center items-center space-x-1.5 mt-3">
              <div class="attribute-item bg-[#BC8A40]"></div>
              <div class="attribute-item bg-[#C5B7A3]"></div>
              <div class="attribute-item bg-[#737272]"></div>
              <div class="attribute-item bg-[#0F2944]"></div>
              <span class="text-[#9CA4AB]">+</span>
            </div>
          </div>
          <div class="product-item text-center">
            <img srcset="./images/products/12.png 2x" />
            <h3 class="font-SFPro text-sm uppercase text-[#1F1F1F]">
              <a href="">Ghế ăn cao cấp Matt</a>
            </h3>
            <div class="mt-2 flex space-x-4 justify-center">
              <span class="font-SFPro text-[#1F1F1F]">4,920,000₫</span>
              <span class="font-SFPro text-[#9CA4AB] line-through"
                >5,800,000₫</span
              >
            </div>
            <div class="flex justify-center items-center space-x-1.5 mt-3">
              <div class="attribute-item bg-[#BC8A40]"></div>
              <div class="attribute-item bg-[#C5B7A3]"></div>
              <div class="attribute-item bg-[#737272]"></div>
              <div class="attribute-item bg-[#0F2944]"></div>
              <span class="text-[#9CA4AB]">+</span>
            </div>
          </div>
          <div class="product-item text-center">
            <img srcset="./images/products/13.png 2x" />
            <h3 class="font-SFPro text-sm uppercase text-[#1F1F1F]">
              <a href="">Ghế ăn cao cấp Matt</a>
            </h3>
            <div class="mt-2 flex space-x-4 justify-center">
              <span class="font-SFPro text-[#1F1F1F]">4,920,000₫</span>
              <span class="font-SFPro text-[#9CA4AB] line-through"
                >5,800,000₫</span
              >
            </div>
            <div class="flex justify-center items-center space-x-1.5 mt-3">
              <div class="attribute-item bg-[#BC8A40]"></div>
              <div class="attribute-item bg-[#C5B7A3]"></div>
              <div class="attribute-item bg-[#737272]"></div>
              <div class="attribute-item bg-[#0F2944]"></div>
              <span class="text-[#9CA4AB]">+</span>
            </div>
          </div>
          <div class="product-item text-center">
            <img srcset="./images/products/14.png 2x" />
            <h3 class="font-SFPro text-sm uppercase text-[#1F1F1F]">
              <a href="">Ghế ăn cao cấp Matt</a>
            </h3>
            <div class="mt-2 flex space-x-4 justify-center">
              <span class="font-SFPro text-[#1F1F1F]">4,920,000₫</span>
              <span class="font-SFPro text-[#9CA4AB] line-through"
                >5,800,000₫</span
              >
            </div>
            <div class="flex justify-center items-center space-x-1.5 mt-3">
              <div class="attribute-item bg-[#BC8A40]"></div>
              <div class="attribute-item bg-[#C5B7A3]"></div>
              <div class="attribute-item bg-[#737272]"></div>
              <div class="attribute-item bg-[#0F2944]"></div>
              <span class="text-[#9CA4AB]">+</span>
            </div>
          </div>
          <div class="product-item text-center">
            <img srcset="./images/products/12.png 2x" />
            <h3 class="font-SFPro text-sm uppercase text-[#1F1F1F]">
              <a href="">Ghế ăn cao cấp Matt</a>
            </h3>
            <div class="mt-2 flex space-x-4 justify-center">
              <span class="font-SFPro text-[#1F1F1F]">4,920,000₫</span>
              <span class="font-SFPro text-[#9CA4AB] line-through"
                >5,800,000₫</span
              >
            </div>
            <div class="flex justify-center items-center space-x-1.5 mt-3">
              <div class="attribute-item bg-[#BC8A40]"></div>
              <div class="attribute-item bg-[#C5B7A3]"></div>
              <div class="attribute-item bg-[#737272]"></div>
              <div class="attribute-item bg-[#0F2944]"></div>
              <span class="text-[#9CA4AB]">+</span>
            </div>
          </div>
        </div>
      </div>
      <div class="flex justify-center my-5 lg:my-7">
        <button
          class="flex justify-center gap-1 items-center px-8 py-[10px] rounded-md border-2 border-[#ba9b63] text-[#ba9b63] uppercase"
        >
          <img src="./images/icons/plus.png" alt="" />Xem Thêm
        </button>
      </div>
    </section>
    <!--End .product-->
    <section class="room-space mt-6 lg:mt-[65px]">
      <div class="font-Playfair text-center lg:py-4">
        <h2 class="mb-5 lg:mb-7">
          <span
            class="text-xl lg:text-[36px] text-[#1f1f1f] italic font-light tracking-[1px]"
            >Không gian phòng</span
          >
          <span
            class="text-xl lg:text-[36px] text-[#ba9b63] font-semibold tracking-[1px]"
            >nội thất</span
          >
        </h2>
        <div class="overflow-hidden">
          <ul
            id="room-space-tabs"
            class="nav room-space-tab flex justify-start space-x-4 overflow-auto whitespace-nowrap pb-7 pl-2 lg:pl-0 lg:justify-center lg:space-x-11"
          >
            <li class="nav-item room-space-tabs__item">
              <a
                class="font-SFPro lg:text-[20px] font-semibold text-[#1f1f1f] cursor-pointer uppercase py-5 px-1 hover:text-[#ba9b63] active"
                aria-current="page"
                data-id="tab1"
                >Phòng Khách</a
              >
            </li>
            <li class="nav-item room-space-tabs__item">
              <a
                class="font-SFPro text-[14px] lg:text-[20px] font-semibold text-[#1f1f1f] cursor-pointer uppercase py-3 lg:py-5 px-1 hover:text-[#ba9b63]"
                data-id="tab2"
                >Phòng Bếp</a
              >
            </li>
            <li class="nav-item room-space-tabs__item">
              <a
                class="font-SFPro text-[14px] lg:text-[20px] font-semibold text-[#1f1f1f] cursor-pointer uppercase py-3 lg:py-5 px-1 hover:text-[#ba9b63]"
                data-id="tab3"
                >Phòng Ngủ</a
              >
            </li>
            <li class="nav-item room-space-tabs__item">
              <a
                class="font-SFPro text-[14px] lg:text-[20px] font-semibold text-[#1f1f1f] cursor-pointer uppercase py-3 lg:py-5 px-1 hover:text-[#ba9b63]"
                data-id="tab4"
                >Phòng Làm Việc</a
              >
            </li>
            <li class="nav-item room-space-tabs__item">
              <a
                class="nav-link font-SFPro text-[14px] lg:text-[20px] font-semibold text-[#1f1f1f] cursor-pointer uppercase py-3 lg:py-5 px-1 hover:text-[#ba9b63]"
                data-id="tab5"
                >Không Gian Khác</a
              >
            </li>
          </ul>
        </div>
      </div>
      <div class="section-body">
        <div class="room-space-tab-content mb-6">
          <div class="tab-content" data-tab-id="tab1">
            <div
              class="swiper room-space-slide swiper-initialized swiper-horizontal swiper-backface-hidden"
            >
              <div
                class="swiper-wrapper"
                id="swiper-wrapper-bd3dff36e8ca1c4c"
                aria-live="off"
                style="
                  transform: translate3d(-1547.39px, 0px, 0px);
                  transition-duration: 0ms;
                  transition-delay: 0ms;
                "
              >
                <div
                  class="swiper-slide swiper-slide-prev"
                  role="group"
                  aria-label="2 / 3"
                  data-swiper-slide-index="1"
                  style="margin-right: 25px"
                >
                  <img
                    srcset="./images/banner2.jpg 2x"
                    class="img-fluid lg:h-[740px]"
                    alt=""
                  />
                </div>
                <div
                  class="swiper-slide swiper-slide-active"
                  role="group"
                  aria-label="3 / 3"
                  data-swiper-slide-index="2"
                  style="margin-right: 25px"
                >
                  <img
                    srcset="./images/banner2.jpg 2x"
                    class="img-fluid lg:h-[740px]"
                    alt=""
                  />
                </div>
                <div
                  class="swiper-slide swiper-slide-next"
                  role="group"
                  aria-label="1 / 3"
                  data-swiper-slide-index="0"
                  style="margin-right: 25px"
                >
                  <img
                    srcset="./images/banner2.jpg 2x"
                    class="img-fluid lg:h-[740px]"
                    alt=""
                  />
                </div>
              </div>
              <div class="swiper-pagination"></div>
              <span
                class="swiper-notification"
                aria-live="assertive"
                aria-atomic="true"
              ></span>
            </div>
          </div>
          <div class="tab-content" data-tab-id="tab2" style="display: none">
            Content tab 2
          </div>
          <div class="tab-content" data-tab-id="tab3" style="display: none">
            Content tab 3
          </div>
          <div class="tab-content" data-tab-id="tab4" style="display: none">
            Content tab 3
          </div>
          <div class="tab-content" data-tab-id="tab5" style="display: none">
            Content tab 3
          </div>
        </div>
      </div>
    </section>
    <!--End .room-space-->
    <section class="projects lg:mt-[72px]">
      <div class="max-w-screen-1xl mx-auto px-4">
        <div class="font-Playfair text-center lg:py-4 mb-[18px]">
          <h2>
            <span
              class="text-xl lg:text-[36px] text-[#1f1f1f] italic font-light tracking-[1px]"
              >Dự án</span
            >
            <span
              class="text-xl lg:text-[36px] text-[#ba9b63] font-[500] tracking-[1px]"
            >
              Tiêu biểu</span
            >
          </h2>
        </div>
        <div>
          <div class="swiper project-slides">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="projects-item">
                  <div>
                    <img src="./images/posts/1.jpg" alt="" />
                  </div>
                  <div class="text-center lg:text-left">
                    <h3 class="mt-[14px] mb-[7px]">
                      <a
                        href=""
                        class="text-xl font-bold text-[#1F1F1F] font-berling md:font-SFPro"
                        >Dự án may đo nội thất mã 002</a
                      >
                    </h3>
                    <p
                      class="text-[#1F1F1F] font-SFPro text-center lg:text-left"
                    >
                      Dành cho phòng khách rộng và to
                    </p>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="projects-item">
                  <div>
                    <img src="./images/posts/1.jpg" alt="" />
                  </div>
                  <div class="text-center lg:text-left">
                    <h3 class="mt-[14px] mb-[7px]">
                      <a
                        href=""
                        class="text-xl font-bold text-[#1F1F1F] font-berling md:font-SFPro"
                        >Dự án may đo nội thất mã 004</a
                      >
                    </h3>
                    <p class="text-[#1F1F1F] font-SFPro">
                      Dành cho phòng khách rộng và to
                    </p>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="projects-item">
                  <div>
                    <img src="./images/posts/1.jpg" alt="" />
                  </div>
                  <div class="text-center lg:text-left">
                    <h3 class="mt-[14px] mb-[7px]">
                      <a
                        href=""
                        class="text-xl font-bold text-[#1F1F1F] font-berling md:font-SFPro"
                        >Dự án may đo nội thất mã 113</a
                      >
                    </h3>
                    <p class="text-[#1F1F1F] font-SFPro">
                      Yêu cầu của khách hàng với thiết kế đơn giản tông trắng và
                      gỗ
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End .typical-projects  -->
    <section class="related-articles lg:mt-[72px] mb-10 lg:mb-[70px]">
      <div class="max-w-screen-1xl mx-auto px-4">
        <div class="font-Playfair text-center lg:py-4 mb-[18px]">
          <h2>
            <span
              class="text-xl lg:text-[36px] text-[#1f1f1f] italic font-light tracking-[1px]"
              >Bài viết</span
            >
            <span
              class="text-xl lg:text-[36px] text-[#ba9b63] font-[500] tracking-[1px]"
            >
              liên quan</span
            >
          </h2>
        </div>
        <div>
          <div class="swiper related-articles-slides">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div>
                  <div class="text-left">
                    <h3 class="mt-[14px] mb-[7px]">
                      <a
                        href=""
                        class="text-xl font-bold text-[#1F1F1F] font-berling md:font-SFPro"
                        >Có thể bạn chưa biết câu chuyện về thương hiệu Iris của
                        chúng tôi
                      </a>
                    </h3>
                    <div class="flex items-center gap-2">
                      <p
                        class="text-[#899299] text-[16px] font-SFPro text-center lg:text-left"
                      >
                        November 1, 2023
                      </p>
                      |
                      <p
                        class="text-[#899299] text-[16px] font-SFPro text-center lg:text-left"
                      >
                        Kiến thức decor nội thất
                      </p>
                    </div>
                  </div>
                  <div>
                    <img src="./images/posts/4.png" alt="" />
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div>
                  <div class="text-center lg:text-left">
                    <h3 class="mt-[14px] mb-[7px]">
                      <a
                        href=""
                        class="text-xl font-bold text-[#1F1F1F] font-berling md:font-SFPro"
                        >Có thể bạn chưa biết câu chuyện về thương hiệu Iris của
                        chúng tôi
                      </a>
                    </h3>
                    <div class="flex items-center gap-2">
                      <p
                        class="text-[#899299] text-[16px] font-SFPro text-center lg:text-left"
                      >
                        November 1, 2023
                      </p>
                      |
                      <p
                        class="text-[#899299] text-[16px] font-SFPro text-center lg:text-left"
                      >
                        Kiến thức decor nội thất
                      </p>
                    </div>
                  </div>
                  <div>
                    <img src="./images/posts/4.png" alt="" />
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div>
                  <div class="text-center lg:text-left">
                    <h3 class="mt-[14px] mb-[7px]">
                      <a
                        href=""
                        class="text-xl font-bold text-[#1F1F1F] font-berling md:font-SFPro"
                        >Có thể bạn chưa biết câu chuyện về thương hiệu Iris của
                        chúng tôi
                      </a>
                    </h3>
                    <div class="flex items-center gap-2">
                      <p
                        class="text-[#899299] text-[16px] font-SFPro text-center lg:text-left"
                      >
                        November 1, 2023
                      </p>
                      |
                      <p
                        class="text-[#899299] text-[16px] font-SFPro text-center lg:text-left"
                      >
                        Kiến thức decor nội thất
                      </p>
                    </div>
                  </div>
                  <div>
                    <img src="./images/posts/4.png" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php
get_footer();
?>