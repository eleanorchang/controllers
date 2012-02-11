<?php

class Blog extends CI_Controller {
	
	function __construct()
	{
		//load model
		parent::__construct();
		//$this->load->model('talk_model');
	}

	//主頁面
    function index()
    {
    	$data=array('title'=>'TITLE', 'head'=>'HEAD', 'message'=>'MESSAGE');
		$data['name']='ABC';
		$data['topic']='123';
		$data['detail']='abcdefg';
        $this->load->view('index',$data);
    }
    
    //新增主題
 	function insert()
    {
    	//判斷是否有post動作，>0 有post
    	if(count($_POST)>0){
	    	$data = array(
			    'name' => $this->input->post("name"), 
			    'topic' => $this->input->post("topic"),
	    		'detail' => $this->input->post("detail"),
	     		'createdate' => date("Y-m-d H:i:s")
			);
    		//$this->talk_model->insert_t($data);
    		redirect('index');
    	}else{
    		$this->load->view('index');
    	}
    }
    
  
   
}

?>
