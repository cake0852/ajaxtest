<?php
class Account_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
    public function apply_account($data)
    {
        $this->load->helper('url');
        return $this->db->insert('user', $data);
    }
    public function updateByAccount($account, $attributes)
    {
        $this->db->where('account', $account);
        return $this->db->update('user', $attributes);
    }
    public function apply_update()
    {     
        $temp = $this->input->post('account');       
        $data=array(
            'Country'=> $this->input->post('Country')
        );
       $this->db->where('account', $temp);
       $this->db->update('user', $data);
    }
    public function apply_list()
    {
        return  $this->db->get ( 'user' ); // 抓取資料庫指令
       
    }
    public function apply_delete()
    {   $this->load->helper('url');
        $temp = $this->input->post('account');   
        $this->db->where('account',$temp);
        $this->db->delete('user');
    }
    public function getOne($id)
    {
       return $this->db
            ->where('id', $id)
            ->get( 'user' )
            ->row_array(); // 抓取資料庫指令
    }
}