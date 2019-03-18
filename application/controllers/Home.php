<?php 
	class Home extends CI_Controller
	{

		function index()
		{


			$data = array();
			$data['bang1'] = array('ten'=>'Trong Hung','tuoi'=>'19');
			$this->load->view('site/index.php',$data);
		}

		function test()
		{
			
		}
	}
 ?>