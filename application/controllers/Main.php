<?php
    class Main extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->library('template_website');
            if(!$this->session->userdata('lang')){
                $this->session->set_userdata('lang', 'indonesia');
            }
            $this->lang->load('adibuana', $this->session->userdata('lang'));
            $this->data['page'] = '';
            $this->data['title'] = 'Universitas PGRI Adi Buana';

            $this->data['hal'] = '';

        }

        function index(){
            $data = $this->data;
            $data['hal'] = 'index';
            $this->load->model('NewsModel', 'news_model');
            $this->load->model('EventModel', 'event_model');

            $data['berita_terbaru'] = $this->news_model->get_berita_terbaru();
            $data['pengumuman_terbaru'] = $this->news_model->get_pengumuman_terbaru();
            $data['agenda_terbaru'] = $this->event_model->get_agenda_terbaru();

            $data['kategori_berita'] = $this->news_model->get_news_type_with_content();
            $this->template_website->display('web/content/index', $data);
        }


        function beritadanpengumuman($slug, $id){
            $data = $this->data;
            $this->load->model('NewsModel', 'news_model');

            if($this->input->is_ajax_request()){
                $this->load->library('Adi_Pagination', 'adi_pagination');

                $per_page = 10;
                $page = $this->input->get('page');
                if($page == null){
                    $page = 0;
                }else{
                    $page = $page - 1;
                }

                $total_data = sizeof($this->news_model->get_berita_katagori($id, 9999999, 0));

                $data['paging'] = $this->adi_pagination->adibuana_pagination(base_url().'berita-dan-pengumuman/'.$id, $per_page, $page, $total_data);

                $data['berita_katagori'] = $this->news_model->get_berita_katagori($id, $per_page, $page*$per_page);
                $data['halaman'] = $page;
                $this->load->view('web/content/ajax/beritadanpengumuman', $data);
            }else{
                $data['id'] = $id;
                $data['berita'] = $this->news_model->get_tipe_by_id($id);
                $data['kategori'] = $this->news_model->get_all_kategori();
                $this->template_website->display('web/content/beritadanpengumuman', $data);
            }
        }

        function detilberitadanpengumuman($slug, $id){
          $data = $this->data;
          $this->load->model('NewsModel', 'news_model');

          $data['berita'] = $this->news_model->get_berita_by_id($id);
          $data['kategori'] = $this->news_model->get_all_kategori();

          $this->template_website->display('web/content/detilberitadanpengumuman', $data);
        }

        function sekilas($slug, $id){
            $data = $this->data;

            $this->load->model('PageModel', 'page_model');

            $data['page'] = $this->page_model->get_by_id($id);
            $this->template_website->display('web/content/sekilas', $data);
        }
        function areafakultas($slug, $id){
            $data = $this->data;

              $this->template_website->display('web/content/areafakultas');
        }
        function detilfakultas($slug_faculty, $id_faculty, $slug_prodi=null, $id_prodi=null){
            $data = $this->data;

            $this->load->model('FacultyModel', 'faculty_model');

            $data['fakultas'] = $this->faculty_model->get_by_id($id_prodi);

            $this->template_website->display('web/content/fakultasdetil', $data);
        }
        function satuankerja(){

        }
        function sarana(){

        }
        function karier(){
            $data = $this->data;
            $this->load->model('KarirModel', 'karir_model');

            $data['karir'] = $this->karir_model->get_by_id();
            $this->template_website->display('web/content/karier', $data);
        }
        function blog(){

        }
        function tracestudy(){

        }
        function galeri(){
            $data = $this->data;

            $this->template_website->display('web/content/galeri');
        }

        function kegiatan(){
            $data = $this->data;
            $this->load->model('EventModel', 'event_model');

            $data['kegiatan'] = $this->event_model->get_by_id();
            $this->template_website->display('web/content/listkegiatan', $data);
        }
        function login(){

            

            // $this->load->model('UserModel', 'user_model');

            // $login = $this->user_model->do_login($this->input->post());

            
        }
        function kkn($aksi='index'){
            $data = $this->data;
            $this->load->model('FacultyModel', 'faculty_model');
            switch ($aksi) {
                case 'index':
                    // $data['course'] = $this->
                    $this->template_website->display('web/content/kkn', $data);
                    break;
                case 'printpdf':
                    $this->load->library('pdf');
                    $data['kkn'] = $this->input->post();
                    $this->pdf->load_view('web/content/kknpdf', $data);
                    $this->pdf->set_paper("A4", 'portrait');
                    $this->pdf->render();
                    $this->pdf->stream("KKN.pdf");
                break;
                default:
                    # code...
                    break;
            }            
        }

        function ganti_bahasa($lang){
            $this->session->set_userdata('lang', $lang);
            redirect(base_url());
        }

    }
