<div class="tab-content" data-tab-id="tab<?=($key+1)?>">
                        <div class="swiper room-space-slide">
                            <div class="swiper-wrapper">
                                <?php 
                                $gallerys = get_post_meta($value->ID,'_project_image_gallery',true);
                                $gallery = explode(',',$gallerys);
                                foreach ($gallery as $key1 => $value1) {
                                ?>
                                <div class="swiper-slide">
                                    <img
                                        srcset="<?=wp_get_attachment_image_url($value1,'')?> 2x"
                                        class="img-fluid lg:h-[740px]"
                                        alt=""
                                    />
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>