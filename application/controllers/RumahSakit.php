<?php

class RumahSakit extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_rumahsakit');
    }
    

    public function index()
    {
        $data = array(
            'title' => 'Data Rumah Sakit',
            'rumahsakit' => $this->m_rumahsakit->tampil(),
            'isi'    => 'v_datarumahsakit'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function input()
    {
        $this->user_login->cek_login();
        $this->form_validation->set_rules('nama_rs', 'Nama Rumah Sakit', 'required', array(
            'required' => '%s Harus Diisi !!'
        ));
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', array(
            'required' => '%s Harus Diisi !!'
        ));
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required', array(
            'required' => '%s Harus Diisi !!'
        ));
        $this->form_validation->set_rules('latitude', 'Latitude', 'required', array(
            'required' => '%s Harus Diisi !!'
        ));
        $this->form_validation->set_rules('longitude', 'Longitude', 'required', array(
            'required' => '%s Harus Diisi !!'
        ));
        
        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Input Data Rumah Sakit',
                'isi'    => 'v_input_datars'
            );
            $this->load->view('layout/v_wrapper', $data, FALSE);
        } else {
            $data = array(
                'nama_rs'    => $this->input->post('nama_rs'),
                'alamat'     => $this->input->post('alamat'),
                'kecamatan'  => $this->input->post('kecamatan'),
                'latitude'   => $this->input->post('latitude'),
                'longitude'  => $this->input->post('longitude'),
                'keterangan' => $this->input->post('keterangan'),
            );
            $this->m_rumahsakit->simpan($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan');
            redirect('rumahsakit/input');
        }
        
        
    }

    public function edit($id_rs)
    {
        $this->user_login->cek_login();
        $this->form_validation->set_rules('nama_rs', 'Nama Rumah Sakit', 'required', array(
            'required' => '%s Harus Diisi !!'
        ));
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', array(
            'required' => '%s Harus Diisi !!'
        ));
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required', array(
            'required' => '%s Harus Diisi !!'
        ));
        $this->form_validation->set_rules('latitude', 'Latitude', 'required', array(
            'required' => '%s Harus Diisi !!'
        ));
        $this->form_validation->set_rules('longitude', 'Longitude', 'required', array(
            'required' => '%s Harus Diisi !!'
        ));

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Edit Data Rumah Sakit',
                'rumah_sakit' => $this->m_rumahsakit->detail($id_rs),
                'isi'    => 'v_edit_datars'
            );
            $this->load->view('layout/v_wrapper', $data, FALSE);
        } else {
            $data = array(
                'id_rs'      => $id_rs,
                'nama_rs'    => $this->input->post('nama_rs'),
                'alamat'     => $this->input->post('alamat'),
                'kecamatan'  => $this->input->post('kecamatan'),
                'latitude'   => $this->input->post('latitude'),
                'longitude'  => $this->input->post('longitude'),
                'keterangan' => $this->input->post('keterangan'),
            );
            $this->m_rumahsakit->edit($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
            redirect('rumahsakit');
        }
    }

    public function hapus($id_rs)
    {
        $this->user_login->cek_login();
        $data = array('id_rs'=>$id_rs);
        $this->m_rumahsakit->hapus($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus !!');
        redirect('rumahsakit');
    }

}

/* End of file Controllername.php */
