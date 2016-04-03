<!-- **************************************
                   Page Title
   *************************************** -->
<section class="do-normal-page-title-section">
    <div class="container">
        <div class="row">
            <!-- Page Title -->
            <div class="do-page-title-wrapper">
                <div class="do-default-page-title col-md-7 col-sm-7 col-xs-12">
                    <h2>PRODUK</h2>
                    <p>ALAT - ALAT YANG KAMI SEWAKAN</p>
                </div>
            </div>
            <!-- Page Title End -->
        </div>
    </div>
</section>
<!-- DO PAGE TITLE END -->


<!-- **************************************
            SINGLE PAGE CONTENT
*************************************** -->
<section class="do-blog-page-wrapper">
    <div class="container">
        <div class="row">
            <!-- PRODUK Posts -->
            <div class="do-masonry-blog-wrapper col-md-8 col-sm-8 col-xs-12">
                <!-- PRODUK ITEMS -->
                <?php
                foreach ($data_produk_kategori_list as $pks) {
                    $judulberita = $pks->nama_produk;
                    echo $judulberita;
                    $c = array(' ');
                    $d = array('-', '/', '\\', ',', '.', '#', ':', ';', '\'', '"', '[', ']', '{', '}', ')', '(', '|', '`', '~', '!', '@', '%', '$', '^', '&', '*', '=', '?', '+');
                    $s = strtolower(str_replace($d, "", $pks->nama_produk));
                    $link = strtolower(str_replace($c, '-', $s));
                    $isi = substr($pks->desc, 0, 100);
                    ?>
                    <div class="do-blog-masonry-items do-blog-items">
                        <div class="do-blog-item-wrapper">
                            <div class="do-blog-img-wrapper">
                                <img src="<?php echo base_url('Assets/img_produk/' . $pks->gambar . ''); ?>" alt="ENDLESS ROAD STARTS">
                            </div>
                            <div class="do-blo-title-excerpt">
                                <h3>

                                    <a href="<?php echo base_url() . 'frontend/produk_detail/' . $pks->id_produk . '-' . $link . '.php'; ?>"><?php echo $pks->nama_produk; ?></a>
                                </h3>
                                <p><?php echo $isi; ?>...</p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <!-- BLOG ITEMS END -->


            </div>               <!-- Blog Posts End -->
