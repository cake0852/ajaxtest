<?php
class Account extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('account_model');
        $this->load->library('table');
    }

    public function index()
    {
        $this->load->helper('form');
        $query = $this->account_model->apply_list()->result_array ();
        $data = array ( // 存入列陣
            'data' => $query
        );
        $this->load->view('account/list',$data);
    }
    public function list()
    {
        $this->account_model->apply_list();
    }
    public function show()
    {
        $data = $this->account_model->getOne($this->input->get('id') );
        echo json_encode($data);
    }    
    public function insert()
    {
        $validator = new GUMP();
        $_POST = array(
            'account' => $this->input->post("account"),
            'Country' => $this->input->post("Country")
        );

        $_POST = $validator->sanitize($_POST); 
        $validated = $validator->validate($_POST, array(
            'account' => 'required|alpha_numeric|max_len,12|min_len,6',
            'Country' => 'required|max_len,15|min_len,6'
        ));

        if($validated === true) {
            $result = $this->account_model->apply_account($_POST);
            if ($result) {
                 echo json_encode(['status'=>'ok']);
            } else {
                 echo json_encode(['status'=>'failed']);
            }
        } else {
            echo json_encode($validated);
            echo json_encode(['status'=>'failed']);
        } 
    }
    function testAJAX(){
        echo "Message :".$_POST['Message'];
	}
    public function insertpage()
    {
        $this->load->view('account/apply');       
        $this->account_model->apply_list();
    }
    public function updatepage()
    {
        $this->load->view('account/update');       
    }
    public function update()
    {
        $id=$this->input->get('id');
        $temp = array(
            'account'=> $this->input->post('account'), 
            'country'=> $this->input->post('country'),
        );                            
         $this->account_model->updateByAccount($id,$temp);
    }
    public function delete()
    {  
        $this->account_model->apply_delete();
    }
} 