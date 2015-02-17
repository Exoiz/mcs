<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class _main extends MX_Controller
{

	public function _remap()
	{
	      echo 'No direct access allowed';
	}

	public function top()
	{
		$this->load->view('_top');
	}
	
	public function bottom()
	{
		$this->load->view('_bottom');
	}

}

/* End of file _main.php */
/* Location: ./application/modules/_main/controllers/_main.php */