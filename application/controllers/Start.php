
<?php
class Start extends CI_Controller 
{
      function __construct() 
      {
            parent::__construct();
      }
 
      function index() 
      {
            $data['title'] = "頁面標題";
            $data['heading'] = "CI2測試中";
 
            //$data['query'] = $this->db->get('guestbook');  // A
           $this->load->model('blog_model'); // B
           $data['query'] = $this->blog_model->getdata(); // C
 
           $this->load->view('blog_view', $data); // D
      }
}
