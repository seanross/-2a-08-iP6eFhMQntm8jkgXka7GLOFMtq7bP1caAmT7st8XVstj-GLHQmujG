<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends GlobalController{
    
    public function __construct(){
        parent::__construct();
    }
    
    public function index(){
        if($this->tank_auth->is_role('admin')){
            redirect('mis');
        }
        $this->load->tile('base_w_sidebar', 'home/welcome');
    }
    
    public function gen_classes() {
        $this->generateClasses();
    }   
}