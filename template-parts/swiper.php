<div class="swiper">
    <div class="swiper-container">
        <div class="image-slider__wrapper swiper-wrapper">
            <?php
            $images = rwmb_meta('gallery_images');
            ?>
            <?php foreach ($images as $id =>  $image): ?>
                <div class="image-slider__slide swiper-slide">
                    <div class="image-slider__image">
                        <img src="<?= wp_get_attachment_image_src($id, 'full')[0] ?>" alt="pfoto">
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="pagination-and-navigation">
        <div class="swiper-pagination"></div>
        </div>
    </div>
</div>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    new Swiper('.swiper-container', {
        pagination: {
            el: '.swiper-pagination'
        }
    });
</script>

