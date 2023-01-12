<?php
    class Cekin extends CI_Controller
        {
            public function __construct()
            {
                parent::__construct() ;
                if ($this->session->userdata('is_login') != true) {
                    redirect('login') ;
                }
                $this->load->model('m_pesan') ;
            }

            public function index()
            {
                if ($this->input->post('submit')) {
                    $data ['keyword'] = $this->input->post('keyword') ;
                    $this->session->set_userdata('keyword', $data['keyword']) ;
                } else {
                    $data['keyword'] = $this->session->userdata('keyword') ;
                }
                
                $config['base_url']     = 'http://localhost/tiket/pesan/index' ;
                $this->db->like('kode', $data['keyword']) ;
                $this->db->like('nama', $data['keyword']) ;
                $this->db->or_like('no_hp', $data['keyword']) ;
                $this->db->or_like('alamat', $data['keyword']) ;
                $this->db->from('tb_pesan') ;
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
                $data['pesan'] = $this->m_pesan->get_data($config["per_page"], $data['start'], $data['keyword']) ;

                $this->load->view('templates/header');
                $this->load->view('templates/sidebar');
                $this->load->view('cekin', $data);
                $this->load->view('templates/footer');
            }


            public function edit_pesan2($id)
                {
                    $where = array ('id' => $id) ;
                    $data['pesan'] = $this->m_pesan->edit_data($where, 'tb_pesan')->result() ;

                    $this->load->view('templates/header');
                    $this->load->view('templates/sidebar');
                    $this->load->view('edit_pesan2', $data);
                    $this->load->view('templates/footer');
                }

            public function update()
                {
                    $id          = $this->input->post('id') ;
                    $kode        = $this->input->post('kode');
                    $nama        = $this->input->post('nama');
                    $no_hp       = $this->input->post('no_hp');
                    $email       = $this->input->post('email');
                    $alamat      = $this->input->post('alamat');
                    $jumlah      = $this->input->post('jumlah');
                    $jenis_tiket = $this->input->post('jenis_tiket');
                    $status      = $this->input->post('status');
            
                    $data = array(
                        'kode'        => $kode,
                        'nama'        => $nama,
                        'no_hp'       => $no_hp,
                        'email'       => $email,
                        'alamat'      => $alamat,
                        'jumlah'      => $jumlah,
                        'jenis_tiket' => $jenis_tiket,
                        'status'      => $status,
                    ) ;

                    $where = array (
                        'id' => $id 
                    ) ;
                    
                    $this->m_pesan->update_data($where, $data, 'tb_pesan') ;
                    $this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>Selamat !! </strong> Data Berhasil Di - PERBAHARUI (UPDATE)
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                        redirect('pesan/index') ;
                }
            }