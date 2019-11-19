<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
	$data['artikel'] = $this->Artikel_m->select_db('artikel');
	 $this->load->view('blog',$data);

	}
}
