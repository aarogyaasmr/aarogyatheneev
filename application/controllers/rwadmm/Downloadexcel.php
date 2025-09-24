<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Downloadexcel extends CI_Controller {

	public function downloadcontactform() {

		if(isset($_GET['todate'])) {
			$todate=$_GET['todate'];  
		}
		else {
			$todate=""; 
		}
		if(isset($_GET['fromdate'])) {
			$fromdate=$_GET['fromdate'];
		}
		else {
			$fromdate=""; 
		}
		$fildata = array(
			'todate' => $todate,
			'fromdate' => $fromdate
		);
		set_time_limit( 1800 );
		$this->load->model(adminpath.'/model_download');
		$this->model_download->downloadcontactform($fildata);
	}

}