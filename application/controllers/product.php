<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Product extends GlobalController{
    
    public function __construct(){
        parent::__construct();
        $this->load->model('product/productService', 'pps');
    }
    
    public function index(){
        if($this->tank_auth->is_role('admin')){
            redirect('mis');
        }
        $this->load->tile('base_w_sidebar', 'product/all_products_view');
    }
    
    public function calendar_calculator(){
        $data['calendar_binding_placement'] = $this->pps->getAll('Entity\MisCalendarBindingPlacementTb');
        $data['calendar_binding'] = $this->pps->getAll('Entity\MisCalendarBindingTb');
        $data['calendar_cover_paper'] = $this->pps->getAll('Entity\MisCalendarCoverPaperTb');
        $data['calendar_cover'] = $this->pps->getAll('Entity\MisCalendarCoverTb');
        $data['calendar_hole_drilling'] = $this->pps->getAll('Entity\MisCalendarHoleDrillingTb');
        $data['calendar_page_size'] = $this->pps->getAll('Entity\MisCalendarPageSizeTb');
        $data['calendar_pages'] = $this->pps->getAll('Entity\MisCalendarPagesTb');
        $data['calendar_paper_inside_pages'] = $this->pps->getAll('Entity\MisCalendarPaperInsidePagesTb');
        
        $this->load->tile('base_w_sidebar', 'product/calendar_calculator_view' ,$data);
    }
    
    public function create_calendar(){
        if(!$this->tank_auth->is_role('user')){
            redirect('auth');
        }
        $calendar['binding_placement'] = $this->input->post('calendar_binding_placement');
        $calendar['binding'] = $this->input->post('calendar_binding');
        $calendar['cover_paper'] = $this->input->post('calendar_cover_paper');
        $calendar['cover'] = $this->input->post('calendar_cover');
        $calendar['hole_drilling'] = $this->input->post('calendar_hole_drilling');
        $calendar['page_size'] = $this->input->post('calendar_page_size');
        $calendar['pages'] = $this->input->post('calendar_pages');
        $calendar['paper_inside_pages'] = $this->input->post('calendar_paper_inside_pages');
        $calendar['quantity'] = $this->input->post('quantity');
        $calendar['turn-around'] = $this->input->post('turn-around');
        $data['product_name'] = 'Calendar';
        $data['productid'] =$this->pps->createCalendar($calendar);
        $data['message'] = '';
        $data['error'] = "";
        $this->load->tile('base', 'product/upload_picture_form', $data);
    }
    
    public function create_calendar_upload(){
        if(!$this->tank_auth->is_role('user')){
            redirect('auth');
        }
        $productid = $this->input->post('productid');
        $status = $this->pps->uploadPhoto('Entity\ProductCalendarTb', $productid);

        if ($status['status'] == 'fail'){
                $this->load->tile('base', 'product/upload_form_picture', $status['error']);
        } else {
                $data['product_id'] = $productid;
                $data['upload_data'] = $status['upload_data'];
                $data['upload_id'] = $status['upload_id'];
                $this->load->tile('base_w_sidebar', 'product/success_form_picture', $data);
        }
    }
    
    public function create_calendar_upload_details(){
        $calendar['id'] = $this->input->post('product_id');
        $calendar['name'] = $this->input->post('product_name');
        $calendar['instruction'] = $this->input->post('product_instruction');
        $this->pps->createProductDetails('Entity\ProductCalendarTb', $calendar);
        redirect('cart');
    }
    
    public function brochure_calculator(){
        $data['brochure_folding'] = $this->pps->getAll('Entity\MisBrochureFoldingTb');
        $data['brochure_paper_type'] = $this->pps->getAll('Entity\MisBrochurePaperTypeTb');
        $data['brochure_printed_side'] = $this->pps->getAll('Entity\MisBrochurePrintedSideTb');
        $data['brochure_size'] = $this->pps->getAll('Entity\MisBrochureSizeTb');
        
        $this->load->tile('base_w_sidebar', 'product/brochure_calculator_view' ,$data);
    }
    
    //AJAX REQUESTS
    public function calendar_calculation_ajax(){
        $calendar['binding_placement'] = $this->input->post('id1');
        $calendar['binding'] = $this->input->post('id2');
        $calendar['cover_paper'] = $this->input->post('id3');
        $calendar['cover'] = $this->input->post('id4');
        $calendar['hole_drilling'] = $this->input->post('id5');
        $calendar['page_size'] = $this->input->post('id6');
        $calendar['pages'] = $this->input->post('id7');
        $calendar['paper_inside_pages'] = $this->input->post('id8');
        $calendar['quantity'] = $this->input->post('id9');
        $calendar['turn-around'] = $this->input->post('id10');
        $ajax = $this->pps->getCalendarCalcution($calendar);
        echo $ajax;
    }
}