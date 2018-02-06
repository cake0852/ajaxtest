<?php
class Blog_model extends CI_Model
{
      function __construct() 
      {
            parent::__construct();
      }
 
      function getdata() 
      {
            $query = $this->db->get('guestbook');
            return $query;
      }
}