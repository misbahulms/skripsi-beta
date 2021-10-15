<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function get_profil($nomorhp)
    {
        $this->db->select('pg.*, rl.nama_role, rl.id_role AS role_id');
        $this->db->from('users pg');
        $this->db->join('role rl', 'pg.id_role = rl.id_role');
        $this->db->where('pg.no_hp =' . $nomorhp);
        $query = $this->db->get();

        return $query->row_array();
    }

    public function get($id = null)
    {
        $this->db->from('users');
        if ($id != null) {
            $this->db->where('id_user', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function tambahuser()
    {
        $data = [
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'image' => 'default.png',
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'no_hp' => ($this->input->post('no_hp', true)),
            'alamat' => ($this->input->post('alamat', true)),
            'is_active' => 1,
            'date_created' => date('Y-m-d h:i:s'),
            'role' => $this->input->post('role', true)
        ];

        // insert ke dalam database
        $this->db->insert('users', $data);
    }

    public function edituser()
    {
        $data = [
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            // 'image' => 'default.jpg',
            // 'no_hp' => ($this->input->post('no_hp', true)),
            'alamat' => ($this->input->post('alamat', true)),
            // 'date_created' => date('Y-m-d h:i:s'),
            'role' => $this->input->post('role', true)
        ];

        // insert ke dalam database
        $this->db->where('id_user', $this->input->post('id_user'));
        $this->db->update('users', $data);
    }

    public function deleteuser($id)
    {
        $this->db->where('id_user', $id);
        $this->db->delete('users');
    }
}