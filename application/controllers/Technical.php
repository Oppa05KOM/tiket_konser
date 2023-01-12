<?php
    class Technical extends CI_Controller
        {
            public function __construct()
            {
                parent::__construct() ;
                if ($this->session->userdata('is_login') != true) {
                    redirect('login') ;
                }
                $this->load->model('m_technical') ;
            }

            public function index()
            {
                if ($this->input->post('submit')) {
                    $data ['keyword'] = $this->input->post('keyword') ;
                    $this->session->set_userdata('keyword', $data['keyword']) ;
                } else {
                    $data['keyword'] = $this->session->userdata('keyword') ;
                }
                
                $config['base_url']     = 'http://localhost/engine_ut/technical/index' ;
                $this->db->like('tanggal', $data['keyword']) ;
                $this->db->or_like('judul', $data['keyword']) ;
                $this->db->from('tb_technical') ;
                $config['total_rows']   = $this->db->count_all_results() ;
                $data['total_rows']     = $config['total_rows'] ;
                $config['per_page']     = 20 ;
                
                // Styling
                $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">' ;
                $config['full_tag_close']   = '</ul></nav></div>' ;

                $config['first_link']   = 'First' ;
                $config['first_tag_open']   = '<li class="page-item"><span class="page-link">' ;
                $config['first_tag_close']  = '</li></span>' ;

                $config['last_link']    = 'Last' ;
                $config['last_tag_open']   = '<li class="page-item"><span class="page-link">' ;
                $config['last_tag_close']  = '</li></span>' ;

                $config['next_link']    = '&raquo' ;
                $config['next_tag_open']    = '<li class="page-item"><span class="page-link">' ;
                $config['next_tag_close']   = '<span aria-hidden="true"></span></span></li>' ;

                $config['prev_link']    = '&laquo' ;
                $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">' ;
                $config['prev_tag_close']   = '</li></span>' ;

                $config['cur_tag_open']     = '<li class="page-item active "><span class="page-link">' ;
                $config['cur_tag_close']    = '</li><span>' ;

                $config['num_tag_open']     = '<li class="page-item"><span class="page-link">' ;
                $config['num_tag_close']    = '</li></span>' ;

                // Initialize
                $this->pagination->initialize($config) ;

                $data['start'] = $this->uri->segment(3) ;
                $data['technical'] = $this->m_technical->get_data($config["per_page"], $data['start'], $data['keyword']) ;

                $this->load->view('templates/header');
                $this->load->view('templates/sidebar');
                $this->load->view('technical', $data);
                $this->load->view('templates/footer');
            }

            public function tambah_aksi(){
                $tanggal         = $this->input->post('tanggal');
                $judul           = $this->input->post('judul');
                $file            = $_FILES['file'];
                    if ($file=''){}else{
                        $config['upload_path']          = './assets/file/technical/';
                        $config['allowed_types']        = 'png|jpg|jpeg|pdf';
                    
                        $this->load->library('upload',$config);
                        if (!$this->upload->do_upload('file')){
                            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Mohon Maaf !! </strong> Data Gambar/file GAGAL Ter-UPLOAD
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                            redirect ('technical/index');
                        } else {
                            $file=$this->upload->data('file_name');
                        }
                    }

                $data = array(
                    'tanggal'           => $tanggal,
                    'judul'             => $judul,
                    'file'              => $file
                );

                $this->m_technical->input_data($data,'tb_technical');
                    $this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible fade show" role="alert">
                        <strong>Selamat !! </strong> File Berhasil Di - TAMBAHKAN
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect ('technical/index');
            }

            public function hapus($id)
                {
                    $where = array ('id' => $id) ;
                    $this->m_technical->hapus_data($where, 'tb_technical') ;
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Selamat !! </strong> File Berhasil Di - HAPUS (DELETE)
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                    redirect ('technical/index') ;
                }

            public function edit_technical($id)
                {
                    $where = array ('id' => $id) ;
                    $data['technical'] = $this->m_technical->edit_data($where, 'tb_technical')->result() ;

                    $this->load->view('templates/header');
                    $this->load->view('templates/sidebar');
                    $this->load->view('edit_technical', $data);
                    $this->load->view('templates/footer');
                }

            public function update()
                {
                    $id              = $this->input->post('id') ;
                    $tanggal         = $this->input->post('tanggal');
                    $judul           = $this->input->post('judul');       

                    $data = array (
                    'tanggal'           => $tanggal,
                    'judul'             => $judul,
                    // 'file'             => $file,
                    ) ;

                    $where = array (
                        'id' => $id 
                    ) ;
                    
                    $this->m_technical->update_data($where, $data, 'tb_technical') ;
                    $this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>Selamat !! </strong> Data Berhasil Di - PERBAHARUI (UPDATE)
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                        redirect('technical/index') ;
                }
            
            public function detail_technical($id)
                {
                    $this->load->model('m_technical') ;
                    $detail = $this->m_technical->detail_data($id) ;
                    $data['detail_technical'] = $detail ;

                    $this->load->view('templates/header');
                    $this->load->view('templates/sidebar');
                    $this->load->view('detail_technical', $data);
                    $this->load->view('templates/footer');
                }
        }