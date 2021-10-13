<?php

class M_rumahsakit extends CI_Model {

    public function simpan($data)
    {
        $this->db->insert('rumah_sakit', $data);
    }

    public function tampil()
    {
        $this->db->select('*');
        $this->db->from('rumah_sakit');
        $this->db->order_by('id_rs', 'desc');
        return $this->db->get()->result();
    }

    public function detail($id_rs)
    {
        $this->db->select('*');
        $this->db->from('rumah_sakit');
        $this->db->where('id_rs', $id_rs);
        return $this->db->get()->row();
    }

    public function edit($data)
    {
        $this->db->where('id_rs', $data['id_rs']);
        $this->db->update('rumah_sakit', $data);
    }

    public function hapus($data)
    {
        $this->db->where('id_rs', $data['id_rs']);
        $this->db->delete('rumah_sakit', $data);
    }


}

/* End of file ModelName.php */
