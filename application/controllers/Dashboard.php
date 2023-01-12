<?php

class Dashboard extends CI_Controller {
    public function index () 
        {
            $this->load->view('dashboard');
        }

    public function tambah_aksi()
    {
        $kode        = $this->input->post('kode');
        $nama        = $this->input->post('nama');
        $no_hp       = $this->input->post('no_hp');
        $email       = $this->input->post('email');
        $alamat      = $this->input->post('alamat');
        $jumlah      = $this->input->post('jumlah');
        $jenis_tiket = $this->input->post('jenis_tiket');
        $status      = $this->input->post('status'    );

        $data = array(
            'kode'        => $kode,
            'nama'        => $nama,
            'no_hp'       => $no_hp,
            'email'       => $email,
            'alamat'      => $alamat,
            'jumlah'      => $jumlah,
            'jenis_tiket' => $jenis_tiket,
            'status'      => $status,
        );

        $this->m_pesan->input_data($data, 'tb_pesan');
        $this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>Selamat !! </strong> File Berhasil Di - TAMBAHKAN
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('dashboard');
    }
}

?>
