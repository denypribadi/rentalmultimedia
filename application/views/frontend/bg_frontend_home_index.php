

<!--================================
   CUSTOM SECTION  WITH IMAGE LEFT
=================================-->
<!--TAMPILKAN DATA ABOUT DARI DATABASE-->
<?php foreach ($data_about->result() as $produk)
    ;
?>
<section class="do-custom-section-with-img">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12 do-custom-sec-img appear fadeIn" data-wow-duration="1.5s" data-wow-delay=".4s">
                <img src="<?php echo base_url('Assets/company/' . $produk->img_about . ''); ?>" alt="">
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 do-custom-sec-content">
                <h3><?php echo $produk->subject_about; ?></h3>
                <p><?php echo $produk->about; ?></p>
                <ul class="do-icon-list">
                    <li><i class="fa fa-angle-right"></i> <?php echo $produk->sub_about1; ?></li>
                    <li><i class="fa fa-angle-right"></i> <?php echo $produk->sub_about2; ?></li>
                    <li><i class="fa fa-angle-right"></i> <?php echo $produk->sub_about3; ?></li>
                </ul>
            </div>
        </div>
    </div>
</section>



<!--================================
    PORTFOLIO SECTION 
=================================-->
<section class="do-portfolio-section do-section hide">
    <div class="container">
        <div class="row">
            <!-- SECTION HEADING -->
            <div class="do-section-heading">
                <h1>PORTOFOLIO</h1>
                <p class="do-section-subheading">OUR CREATIVE GALLERY</p>
            </div>
            <!-- SECTION HEADING END -->

            <!-- WORKS -->
            <div class="do-portfolio-works do-portfolio-one-px">
                <?php
                foreach ($data_portofolio_home as $datpor) {
                    $c = array(' ');
                    $d = array('-', '/', '\\', ',', '.', '#', ':', ';', '\'', '"', '[', ']', '{', '}', ')', '(', '|', '`', '~', '!', '@', '%', '$', '^', '&', '*', '=', '?', '+');
                    $s = strtolower(str_replace($d, "", $datpor->judul));
                    $link = strtolower(str_replace($c, '-', $s));
                    ?>
                    <div class="do-work-item">
                        <div class="do-work-item-inner-wrap appear fadeIn" data-wow-duration="1.5s" data-wow-delay=".3s">
                            <img src="<?php echo base_url('Assets/img_portofolio/' . $datpor->img_portofolio . ''); ?>" alt="">
                            <div class="do-work-item-hover">
                                <a href="portfolio-single-one.html" class="do-single-page-link"></a>
                                <div class="do-work-item-details">
                                    <h3 class="do-work-item-title">
                                        <a href="<?php echo base_url() . 'frontend/portofolio_detail/' . $datpor->id_portofolio . '-' . $link . '.html'; ?>"><?php echo $datpor->judul; ?></a>
                                    </h3>
                                    <span class="do-work-item-subtitle"><?php echo $datpor->kategori_portofolio; ?></span>
                                </div>
                                <a href="<?php echo base_url('Ultraviolet_GUI/Frontend/images/portfolio-image/work-1px-2.jpg'); ?>" class="do-work-item-popup"></a>
                            </div>
                        </div>
                    </div>
<?php } ?>


            </div>
            <!-- WORKS END -->
        </div>
    </div>

    <a href="portfolio-1px.html" class="do-btn-round-outline">MORE</a>
</section>
<!-- PORTFOLIO SECTION END -->



<!--================================
    BLOG SECTION
=================================-->
<section class="do-blog-section do-section">
    <div class="container">
        <div class="row">
            <!-- SECTION HEADING -->
            <div class="do-section-heading">
                <h1>Paket Display</h1>
            </div>
            <!-- SECTION HEADING END -->

            <!-- BLOG WRAPPER -->
            <div class="do-blog-post-wrapper">

                <?php
//                foreach ($data_blog_home->result() as $blog) {
//                    $c = array(' ');
//                    $d = array('-', '/', '\\', ',', '.', '#', ':', ';', '\'', '"', '[', ']', '{', '}', ')', '(', '|', '`', '~', '!', '@', '%', '$', '^', '&', '*', '=', '?', '+');
//                    $s = strtolower(str_replace($d, "", $blog->judul));
//                    $link = strtolower(str_replace($c, '-', $s));
//                    $isi = substr($blog->desc, 0, 10);
//                    
                ?>

<?php foreach ($data_paket_home->result_array() as $paket) { ?>
                    <!-- BLOG ITEMS -->
                    <div class="do-blog-masonry-items col-md-4 col-sm-4 col-xs-12">
                        <div class="do-blog-item-wrapper appear fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">                            
                            <div class="do-blo-title-excerpt">
                                <h3>
                                    <a href=""><?php echo $paket['tipe_paket']; ?></a>
                                </h3>
                                <ul>
                                <?php echo $paket['isi_paket']; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- BLOG ITEMS END -->
<?php } ?>
                <!-- BLOG ITEMS -->

            </div>
            <!-- BLOG WRAPPER END -->              
        </div>
    </div>
</section>
<!-- BLOG SECTION END -->