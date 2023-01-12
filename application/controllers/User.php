<?php
    class User extends CI_Controller
        {

            public function __construct()
            {
                parent::__construct() ;
                if ($this->session->userdata('is_login') != true) {
                    redirect('login') ;
                }
                $this->load->model('m_user') ;
            }

            public function index()
            {

                if ($this->input->post('submit')) {
                    $data ['keyword'] = $this->input->post('keyword') ;
                    $this->session->set_userdata('keyword', $data['keyword']) ;
                } else {
                    $data['keyword'] = $this->session->userdata('keyword') ;
                }
                
                $config['base_url']     = 'http://localhost/security_ut/user/index' ;
                $this->db->like('nama_lengkap', $data['keyword']) ;
                $this->db->from('hak_akses') ;
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
                $data['user'] = $this->m_user->get_data($config["per_page"], $data['start'], $data['keyword']) ;


                $this->load->view('templates/header');
                $this->load->view('templates/sidebar');
                $this->load->view('user', $data);
                $this->load->view('templates/footer');

            }
            public function tambah_aksi(){
                $nama_lengkap   = $this->input->post('nama_lengkap');
                $username       = $this->input->post('username');
                $password       = $this->input->post('password');
                $hak_akses      = $this->input->post('hak_akses');

                $data = array(
                    'nama_lengkap'   => $nama_lengkap,
                    'username'       => $username,
                    'password'       => $password,
                    'hak_akses'      => $hak_akses,
                );

                $this->m_user->input_data($data,'hak_akses');
                    $this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible fade show" role="alert">
                        <strong>Selamat !! </strong> Data Berhasil Di - TAMBAHKAN
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect ('user/index');
            }

            public function hapus($id)
                {
                    $where = array ('id' => $id) ;
                    $this->m_user->hapus_data($where, 'hak_akses') ;
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Selamat !! </strong> Data Berhasil Di - HAPUS (DELETE)
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                    redirect ('user/index') ;
                }

            public function edit_user($id)
                {
                    $where = array ('id' => $id) ;
                    $data['user'] = $this->m_user->edit_data($where, 'hak_akses')->result() ;

                    $this->load->view('templates/header');
                    $this->load->view('templates/sidebar');
                    $this->load->view('edit_user', $data);
                    $this->load->view('templates/footer');
                }

            public function update()
                {
                    $id             = $this->input->post('id') ;
                    $nama_lengkap   = $this->input->post('nama_lengkap');
                    $username       = $this->input->post('username');
                    $password       = $this->input->post('password');
                    $hak_akses      = $this->input->post('hak_akses');

                    $data = array(
                        'nama_lengkap'   => $nama_lengkap,
                        'username'       => $username,
                        'password'       => $password,
                        'hak_akses'      => $hak_akses,
                    ) ;

                        $where = array (
                            'id' => $id 
                    ) ;
                    
                    $this->m_user->update_data($where, $data, 'hak_akses') ;
                    $this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>Selamat !! </strong> Data Berhasil Di - PERBAHARUI (UPDATE)
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                        redirect('user/index') ;
                }
        }