<?php
    class  M_pesan extends CI_Model 
        {
            public function tampil_data()
                {
                    return $this->db->get('tb_pesan');
                }

            public function get_data($limit, $start, $keyword = null)
                {
                    if ($keyword) {
                        $this->db->like('tanggal', $keyword) ;
                        $this->db->or_like('judul', $keyword) ;
                    }
                    return $this->db->get('tb_pesan', $limit, $start)->result_array() ;
                }

            function input_data($data, $table)
                {
                    $this->db->insert($table, $data);
                }

            public function hapus_data($where, $table)
                {
                    $this->db->where($where);
                    $this->db->delete($table);
                }
            
            public function edit_data($where, $table)
                {
                    return $this->db->get_where($table, $where) ;
                }
            
            public function update_data($where, $data, $table)
                {
                    $this->db->where($where) ;
                    $this->db->update($table, $data) ;
                }

            public function detail_data($id = NULL)
                {
                    $query = $this->db->get_where('tb_pesan', array('id' => $id))->row();
                    return $query ;
                }

            public function get_keyword($keyword)
                {
                    $this->db->select('*') ;
                    $this->db->from('tb_pesan') ;
                    
                    $this->db->or_like('tanggal', $keyword) ;
                    $this->db->or_like('judul', $keyword) ;

                    return $this->db->get()->result() ;
                }
        }