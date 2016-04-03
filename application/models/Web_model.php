

<?php



Class Web_model extends CI_Model {



    function __constuct() {

        parent::__constuct();  // Call the Model constructor 

        loader::database();    // Connect to current database setting.

    }



//        HOME START

    function data_about() {

        $this->db->select('*');

        $this->db->from('tb_front_about');

        return $this->db->get();

    }



    function data_logo() {

        $this->db->select('*');

        $this->db->from('tb_front_logo');

        return $this->db->get();

    }



    function data_footer() {

        $this->db->select('*');

        $this->db->from('tb_front_footer');

        return $this->db->get();

    }



    function data_paket_home() {

        $this->db->select('*');

        $this->db->from('tbl_paket');

        $this->db->order_by('id_paket');

        return $this->db->get();

    }



//        HOME END

//        

//        PORTOFOLIO START

    function data_portofolio() {

        $this->db->join('tb_kategori_portofolio', 'tb_front_portofolio.id_kategori_portofolio = tb_kategori_portofolio.id_kategori_portofolio');

        $data = $this->db->get('tb_front_portofolio');

        return $data->result();

    }



    function data_portofolio_home() {



        $this->db->join('tb_kategori_portofolio', 'tb_front_portofolio.id_kategori_portofolio = tb_kategori_portofolio.id_kategori_portofolio');

        $this->db->limit('10');

        $data = $this->db->get('tb_front_portofolio');

        return $data->result();

    }



    function data_portofolio_kategori() {



        $this->db->select('*');

        $this->db->from('tb_kategori_portofolio');

        $this->db->order_by("kategori_portofolio");

        return $this->db->get();

    }



    function data_portofolio_detail($id_portofolio) {

        $this->db->join('tb_kategori_portofolio', 'tb_front_portofolio.id_kategori_portofolio = tb_kategori_portofolio.id_kategori_portofolio');

        $this->db->where('id_portofolio', $id_portofolio);

        $data = $this->db->get('tb_front_portofolio');

        return $data->result();

    }



//        PORTOFOLIO END

//        

//        BLOG START

    function data_blog($sampai, $dari) {

        $this->db->join('tb_kategori_produk', 'tb_front_blog.id_kategori_blog = tb_kategori_produk.id_kategori_produk');

        $this->db->order_by("date");

        $data = $this->db->get('tb_front_blog', $sampai, $dari);

        return $data->result();

    }



    function data_blog_detail($id_blog) {

        $this->db->join('tb_kategori_blog', 'tb_front_blog.id_kategori_blog = tb_kategori_produk.id_kategori_produk');

        $this->db->where('id_blog', $id_blog);

        $data = $this->db->get('tb_front_blog');

        return $data->result();

    }



    function data_blog_kategori_list($sampai, $dari, $id_kat) {

        $this->db->where('id_kategori_blog', $id_kat);

        $data = $this->db->get('tb_front_blog', $sampai, $dari);

        return $data->result();

    }



    function blog_jumlah() {

        return $this->db->get('tb_front_blog')->num_rows();

    }



    function blog_jumlah_kategori($id_kat) {

        $this->db->where('id_kategori_blog', $id_kat);

        return $this->db->get('tb_front_blog')->num_rows();

    }



    function data_blog_home() {

        $this->db->select('*');

        $this->db->from('tb_front_blog');

        $this->db->order_by('date');

        $this->db->limit('3');

        return $this->db->get();

    }



    function data_blog_kategori() {

        $this->db->select('*');

        $this->db->from('tb_kategori_produk');

        $this->db->order_by("kategori");

        return $this->db->get();

    }

//	BLOG END

    

//      PRODUK START

    function data_produk($sampai, $dari) {

        $this->db->join('tb_kategori_produk', 'tb_produk.id_kategori= tb_kategori_produk.id_kategori_produk');

        $data = $this->db->get('tb_produk', $sampai, $dari);

        return $data->result();

    }



    function data_produk_detail($id_produk) {

        $this->db->join('tb_kategori_produk', 'tb_produk.id_kategori= tb_kategori_produk.id_kategori_produk');

        $this->db->where('id_produk', $id_produk);

        $data = $this->db->get('tb_produk');

        return $data->result();

    }



    function data_produk_kategori_list($sampai, $dari, $id_kat) {

        $this->db->where('id_kategori_produk', $id_kat);

        $data = $this->db->get('tb_kategori_produk', $sampai, $dari);

        return $data->result();

    }



    function produk_jumlah() {

        return $this->db->get('tb_produk')->num_rows();

    }



    function produk_jumlah_kategori($id_kat) {

        $this->db->where('id_kategori', $id_kat);

        return $this->db->get('tb_produk')->num_rows();

    }



    function data_produk_home() {

        $this->db->select('*');

        $this->db->from('tb_produk');

        $this->db->limit('3');

        return $this->db->get();

    }



    function data_produk_kategori() {

        $this->db->select('*');

        $this->db->from('tb_kategori_produk');

        $this->db->order_by("kategori");

        return $this->db->get();

    }

//      PRODUK END

}



?>

