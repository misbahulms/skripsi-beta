<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Desa_model extends CI_Model
{
    public function get_desa($limit, $start)
    {
        $query = $this->db->select('desa.*,nama_kecamatan')
            ->from('desa')
            ->join('kecamatan', 'kecamatan.id_kecamatan = desa.id_kecamatan')
            ->limit($limit, $start)
            ->get();
        return $query;
    }

    public function get_detail_desa($id)
    {
        $query = $this->db->select('desa.*,nama_kecamatan')
            ->from('desa')
            ->join('kecamatan', 'kecamatan.id_kecamatan = desa.id_kecamatan')
            ->where('id_desa', $id)
            ->get();
        return $query;
    }

    public function get_page_desa($limit, $start)
    {
        $query = $this->db->select('desa.*,nama_kecamatan')
            ->from('desa')
            ->join('kecamatan', 'kecamatan.id_kecamatan = desa.id_kecamatan')
            ->get($limit)->result_array();
        return $query;
    }

    public function adddesa()
    {
        $data = [
            'nama_desa' => $this->input->post('nama_desa', true),
            'id_kecamatan' => $this->input->post('nama_kecamatan', true),
        ];

        // insert ke dalam database
        $this->db->insert('desa', $data);
    }

    public function editdesa()
    {
        $data = [
            'nama_desa' => $this->input->post('nama_desa', true),
            'id_kecamatan' => $this->input->post('nama_kecamatan', true)
        ];

        // insert ke dalam database
        $this->db->where('id_desa', $this->input->post('id_desa'));
        $this->db->update('desa', $data,);
    }

    public function delete($id)
    {
        $this->db->where('id_desa', $id);
        // $this->_deleteImage($id);
        $this->db->delete('desa');
    }

    public function get_keyword($keyword)
    {
        $query = $this->db->select('desa.*,nama_kecamatan')
        ->from('desa')
        ->join('kecamatan', 'kecamatan.id_kecamatan = desa.id_kecamatan')
        ->like('nama_desa', $keyword)
        ->get();
        return $query;

       
    }
}