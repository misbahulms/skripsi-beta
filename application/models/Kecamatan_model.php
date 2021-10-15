<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kecamatan_model extends CI_Model
{
    public function get_kecamatan()
    {
        return $this->db->get('kecamatan');
    }

    public function get_detail($id)
    {
        $query = $this->db->select('kecamatan.*')
            ->where('id_kecamatan', $id)
            ->get('kecamatan');
        return $query;
    }

    public function addkecamatan()
    {
        $data = [
            'nama_kecamatan' => $this->input->post('nama_kecamatan', true),
            'geojson_kecamatan' => $this->_uploadGeoJson(),
            'warna_kecamatan' => $this->input->post('warna_kecamatan', true)
        ];

        // insert ke dalam database
        $this->db->insert('kecamatan', $data);
    }
    public function editkecamatan()
    {
        $data = [
            'nama_kecamatan' => $this->input->post('nama_kecamatan', true),
            // 'geojson_kecamatan' => $this->_uploadGeoJson(),
            'warna_kecamatan' => $this->input->post('warna_kecamatan', true)
        ];

        // insert ke dalam database
        $this->db->where('id_kecamatan', $this->input->post('id_kecamatan'));
        $this->db->update('kecamatan', $data,);
    }


    public function delete($id)
    {
        $this->db->where('id_kecamatan', $id);
        // $this->_deleteImage($id);
        $this->db->delete('kecamatan');
    }
    // public function do_upload()
    // {
    //     if($types=='images') {
    //         $allowed_types= 'gif|jpg|png';
    //         $config['max_width']            = 1024;
    //         $config['max_height']           = 768;
    //     } 
    //     elseif($types=='geojson'){
    //         $allowed_types= 'geojson';
    //     }



    //     $config['upload_path']          = './assets/geojson/';
    //     $config['allowed_types']        = 'geojson';
    //     $config['max_size']             = 1000;


    //     $this->load->library('upload', $config);

    //     if (!$this->upload->do_upload('geojson_kecamatan')) {
    //         $response['info'] = false;
    //         $response['message'] = $this->upload->display_errors();
    //     } else {

    //         $response['info'] = true;
    //         $response['message'] = "Data berhasil di upload";
    //         $response['upload_data'] = $this->upload->data();;
    //     }
    //     return $response;
    // }
    private function _uploadGeoJson()
    {
        $config['upload_path']    = './assets/geojson/';
        $config['allowed_types']  = '*';
        // $config['file_name']      = $this->id_pelapor;
        $config['overwrite']      = true;
        $config['max_size']       = 1024;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('geojson_kecamatan')) {
            return $this->upload->data("file_name");
        }

        // return "default.jpg";
    }
}