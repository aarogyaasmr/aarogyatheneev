<?php
    class Notfound extends CI_Controller
    {
       public function __construct()
       {
           parent::__construct();
       }
       public function index()
       {
          // $this->output->set_status_header('404');
           
            
           echo '<script type="text/javascript">
           window.location = "'.base_url().'"
      </script>';
      
     
           
        //   $this->load->view('err404');  
           }
    }