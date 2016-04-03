<section class="do-blog-single-wrapper">
    <div class="container">
        <div class="row">
            <!-- BLOG SINGLE CONTENT -->
            <div class="do-blog-single-content col-md-8 col-sm-8 col-xs-12">
                <div class="do-blog-single-img-wrapper">
                    <?php foreach ($data_produk_detail as $v)
                        ; ?>
                    <img src="<?php echo base_url('Assets/img_produk/' . $v->gambar . ''); ?>" alt="Produk Single Image">
                    <div class="do-post-format-icon">
                        <i class="fa fa-quote-right"></i>
                    </div>
                </div>
                <div class="do-blog-single-details ">
                    <!--  POST TITLE -->
                    <div class="do-blog-post-titles">
                        <h1><a href="#"><?php echo $v->nama_produk; ?></a></h1>
                    </div>
                </div>
                <!--  POST TITLE END-->
                <!--  POST TEXT -->
                <div class="do-blog-post-text do-blog-single-inner-sec">
                    <p><?php echo $v->desc; ?>.</p>
                    <a href="<?php echo base_url('frontend/produk'); ?>" class="do-btn-round-outline">Back</a>
                </div>
                <!--  POST TEXT END -->
            </div>
        </div>
        <!-- BLOG SINGLE CONTENT END -->

