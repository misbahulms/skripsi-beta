<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SubKekerasan_model extends CI_Model
{
    public function get_sub_kekerasan()
    {
        $query = $this->db->select('sub_bentuk_kekerasan.*,jenis_kekerasan')
            ->from('sub_bentuk_kekerasan')
            ->join('bentuk_kekerasan', 'bentuk_kekerasan.id_bentuk_kekerasan = sub_bentuk_kekerasan.id_bentuk_kekerasan')
            ->get();
        return $query;
    }

    public function get_detail_kekerasan($id)
    {
        $query = $this->db->select('sub_bentuk_kekerasan.*,jenis_kekerasan')
            ->from('sub_bentuk_kekerasan')
            ->join('bentuk_kekerasan', 'bentuk_kekerasan.id_bentuk_kekerasan = sub_bentuk_kekerasan.id_bentuk_kekerasan')
            ->where('id_sub_bentuk_kekerasan', $id)
            ->get();
        return $query;
    }

    public function addSubKekerasan()
    {
        $data = [
            'sub_jenis_kekerasan' => $this->input->post('sub_jenis_kekerasan', true),
            'id_bentuk_kekerasan' => $this->input->post('jenis_kekerasan', true),
        ];

        // insert ke dalam database
        $this->db->insert('sub_bentuk_kekerasan', $data);
    }

    public function editSubKekerasan()
    {
        $data = [
            'sub_jenis_kekerasan' => $this->input->post('sub_jenis_kekerasan', true),
            'id_bentuk_kekerasan' => $this->input->post('jenis_kekerasan', true),
        ];

        // insert ke dalam database
        $this->db->where('id_sub_bentuk_kekerasan', $this->input->post('id_sub_bentuk_kekerasan'));
        $this->db->update('sub_bentuk_kekerasan', $data,);
    }

    public function delete($id)
    {
        $this->db->where('id_sub_bentuk_kekerasan', $id);
        $this->db->delete('sub_bentuk_kekerasan');
    }
}