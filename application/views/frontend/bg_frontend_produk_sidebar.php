
<!-- SIDEBAR -->
<div class="do-blog-sidebar col-md-4 col-sm-4 col-xs-12">
    <!-- CATEGORY WIDGET -->
    <div class="do-blog-sidebar-widget">
        <h3 class="do-sidebar-widget-title">KATEGORI</h3>

        <ul>
            <?php foreach ($data_produk_kategori->result() as $b) { ?>
                <li>
                    <a href="<?php echo base_url('frontend/produk_kategori/' . $b->id_kategori_produk . '-' . $b->kategori . ''); ?>">
                        <i class="fa fa-angle-right"></i> <?php echo $b->kategori; ?>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>
    <!-- CATEGORY WIDGET END -->




</div>
<!-- SIDEBAR END -->

</div>
<?php echo $this->pagination->create_links(); ?>  
</div>
</section>