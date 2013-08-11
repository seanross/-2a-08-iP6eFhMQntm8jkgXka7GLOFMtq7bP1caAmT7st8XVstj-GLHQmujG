<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

}

class GlobalController extends MY_Controller {
        
        public $em; //for testing purpose only!

	public function __construct()
	{
		parent::__construct();
		$this->em = $this->doctrine->em; //for testing purpose only!
	}

	public function generateClasses(){
		$this->load->model('mis/misService', 'mis');
		$this->util->generate_classes();
	}
}
/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */