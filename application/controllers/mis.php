<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mis extends GlobalController{
    
    public function __construct(){
        parent::__construct();
        $this->load->model('mis/misService', 'mms');
    }
    
    public function index(){
        if(!$this->tank_auth->is_role('admin')){
            show_404();
        }
        $data['calendar_att_length'] = $this->mms->getCalendarAttributeLength();
        $data['brochure_att_length'] = $this->mms->getBrochureAttributeLength();
        $this->load->tile('mis', 'mis/products_view', $data);
    }
    
//CALENDAR BINDING PLACEMENT CRUD
    public function calendar_binding_placement(){
        if(!$this->tank_auth->is_role('admin')){
            show_404();
        }
        $data['product'] = 'Calendar ';
        $data['name'] = 'Binding Placement';
        $data['product_attribute'] = $this->mms->getPaginated('Entity\MisCalendarBindingPlacementTb',6,10);
        $this->load->tile('mis', 'mis/paginated_product_view', $data);
    }
    public function create_calendar_binding_placement(){
        if(!$this->tank_auth->is_role('admin')){
            show_404();
        }
        $att['name'] = $this->input->post('attName');
        $att['price'] = $this->input->post('virName');
        $this->mms->createProduct('Entity\MisCalendarBindingPlacementTb', $att);
        redirect(base_url().'mis');
    }
    public function update_calendar_binding_placement(){
        if(!$this->tank_auth->is_role('admin')){
            show_404();
        }
        $att['id'] = $this->input->post('u_id');
        $att['name'] = $this->input->post('u_attName');
        $att['price'] = $this->input->post('u_virName');
        $this->mms->updateProduct('Entity\MisCalendarBindingPlacementTb', $att);
        redirect(base_url().'mis');
    }
    public function delete_calendar_binding_placement($id){
        if(!$this->tank_auth->is_role('admin')){
            show_404();
        }
        $this->mms->deleteProduct('Entity\MisCalendarBindingPlacementTb', $id);
        redirect(base_url().'mis');
    }
    
//CALENDAR BINDING CRUD    
    public function calendar_binding(){
        if(!$this->tank_auth->is_role('admin')){
            show_404();
        }
        $data['product'] = 'Calendar ';
        $data['name'] = 'Binding';
        $data['product_attribute'] = $this->mms->getPaginated('Entity\MisCalendarBindingTb',6,10);
        $this->load->tile('mis', 'mis/paginated_product_view', $data);
    }
    public function create_calendar_binding(){
        if(!$this->tank_auth->is_role('admin')){
            show_404();
        }
        $att['name'] = $this->input->post('attName');
        $att['price'] = $this->input->post('virName');
        $this->mms->createProduct('Entity\MisCalendarBindingTb', $att);
        redirect(base_url().'mis');
    }
    public function update_calendar_binding(){
        if(!$this->tank_auth->is_role('admin')){
            show_404();
        }
        $att['id'] = $this->input->post('u_id');
        $att['name'] = $this->input->post('u_attName');
        $att['price'] = $this->input->post('u_virName');
        $this->mms->updateProduct('Entity\MisCalendarBindingTb', $att);
        redirect(base_url().'mis');
    }
    public function delete_calendar_binding($id){
        if(!$this->tank_auth->is_role('admin')){
            show_404();
        }
        $this->mms->deleteProduct('Entity\MisCalendarBindingTb', $id);
        redirect(base_url().'mis');
    }

//CALENDAR COVER PAPER CRUD
    public function calendar_cover_paper(){
        if(!$this->tank_auth->is_role('admin')){
            show_404();
        }
        $data['product'] = 'Calendar ';
        $data['name'] = 'Cover Paper';
        $data['product_attribute'] = $this->mms->getPaginated('Entity\MisCalendarCoverPaperTb',6,10);
        $this->load->tile('mis', 'mis/paginated_product_view', $data);
    }
    public function create_calendar_cover_paper(){
        if(!$this->tank_auth->is_role('admin')){
            show_404();
        }
        $att['name'] = $this->input->post('attName');
        $att['price'] = $this->input->post('virName');
        $this->mms->createProduct('Entity\MisCalendarCoverPaperTb', $att);
        redirect(base_url().'mis');
    }
    public function update_calendar_cover_paper(){
        if(!$this->tank_auth->is_role('admin')){
            show_404();
        }
        $att['id'] = $this->input->post('u_id');
        $att['name'] = $this->input->post('u_attName');
        $att['price'] = $this->input->post('u_virName');
        $this->mms->updateProduct('Entity\MisCalendarCoverPaperTb', $att);
        redirect(base_url().'mis');
    }
    public function delete_calendar_cover_paper($id){
        if(!$this->tank_auth->is_role('admin')){
            show_404();
        }
        $this->mms->deleteProduct('Entity\MisCalendarCoverPaperTb', $id);
        redirect(base_url().'mis');
    }

//CALENDAR COVER CRUD
    public function calendar_cover(){
        if(!$this->tank_auth->is_role('admin')){
            show_404();
        }
        $data['product'] = 'Calendar ';
        $data['name'] = 'Cover';
        $data['product_attribute'] = $this->mms->getPaginated('Entity\MisCalendarCoverTb',6,10);
        $this->load->tile('mis', 'mis/paginated_product_view', $data);
    }
    public function create_calendar_cover(){
        if(!$this->tank_auth->is_role('admin')){
            show_404();
        }
        $att['name'] = $this->input->post('attName');
        $att['price'] = $this->input->post('virName');
        $this->mms->createProduct('Entity\MisCalendarCoverTb', $att);
        redirect(base_url().'mis');
    }
    public function update_calendar_cover(){
        if(!$this->tank_auth->is_role('admin')){
            show_404();
        }
        $att['id'] = $this->input->post('u_id');
        $att['name'] = $this->input->post('u_attName');
        $att['price'] = $this->input->post('u_virName');
        $this->mms->updateProduct('Entity\MisCalendarCoverTb', $att);
        redirect(base_url().'mis');
    }
    public function delete_calendar_cover($id){
        if(!$this->tank_auth->is_role('admin')){
            show_404();
        }
        $this->mms->deleteProduct('Entity\MisCalendarCoverTb', $id);
        redirect(base_url().'mis');
    }
    
 
//CALENDAR HOLE DRILLING CRUD
    public function calendar_hole_drilling(){
        if(!$this->tank_auth->is_role('admin')){
            show_404();
        }
        $data['product'] = 'Calendar ';
        $data['name'] = 'Hole Drilling';
        $data['product_attribute'] = $this->mms->getPaginated('Entity\MisCalendarHoleDrillingTb',6,10);
        $this->load->tile('mis', 'mis/paginated_product_view', $data);
    }
    public function create_calendar_hole_drilling(){
        if(!$this->tank_auth->is_role('admin')){
            show_404();
        }
        $att['name'] = $this->input->post('attName');
        $att['price'] = $this->input->post('virName');
        $this->mms->createProduct('Entity\MisCalendarHoleDrillingTb', $att);
        redirect(base_url().'mis');
    }
    public function update_calendar_hole_drilling(){
        if(!$this->tank_auth->is_role('admin')){
            show_404();
        }
        $att['id'] = $this->input->post('u_id');
        $att['name'] = $this->input->post('u_attName');
        $att['price'] = $this->input->post('u_virName');
        $this->mms->updateProduct('Entity\MisCalendarHoleDrillingTb', $att);
        redirect(base_url().'mis');
    }
    public function delete_calendar_hole_drilling($id){
        if(!$this->tank_auth->is_role('admin')){
            show_404();
        }
        $this->mms->deleteProduct('Entity\MisCalendarHoleDrillingTb', $id);
        redirect(base_url().'mis');
    }

//CALENDAR PAGE SIZE CRUD
    public function calendar_page_size(){
        if(!$this->tank_auth->is_role('admin')){
            show_404();
        }
        $data['product'] = 'Calendar ';
        $data['name'] = 'Page Size';
        $data['product_attribute'] = $this->mms->getPaginated('Entity\MisCalendarPageSizeTb',6,10);
        $this->load->tile('mis', 'mis/paginated_product_view', $data);
    }
    public function create_calendar_page_size(){
        if(!$this->tank_auth->is_role('admin')){
            show_404();
        }
        $att['name'] = $this->input->post('attName');
        $att['price'] = $this->input->post('virName');
        $this->mms->createProduct('Entity\MisCalendarPageSizeTb', $att);
        redirect(base_url().'mis');
    }
    public function update_calendar_page_size(){
        if(!$this->tank_auth->is_role('admin')){
            show_404();
        }
        $att['id'] = $this->input->post('u_id');
        $att['name'] = $this->input->post('u_attName');
        $att['price'] = $this->input->post('u_virName');
        $this->mms->updateProduct('Entity\MisCalendarPageSizeTb', $att);
        redirect(base_url().'mis');
    }
    public function delete_calendar_page_size($id){
        if(!$this->tank_auth->is_role('admin')){
            show_404();
        }
        $this->mms->deleteProduct('Entity\MisCalendarPageSizeTb', $id);
        redirect(base_url().'mis');
    }

//CALENDAR PAGES CRUD
    public function calendar_pages(){
        if(!$this->tank_auth->is_role('admin')){
            show_404();
        }
        $data['product'] = 'Calendar ';
        $data['name'] = 'Pages';
        $data['product_attribute'] = $this->mms->getPaginated('Entity\MisCalendarPagesTb',6,10);
        $this->load->tile('mis', 'mis/paginated_product_view', $data);
    }
    public function create_calendar_pages(){
        if(!$this->tank_auth->is_role('admin')){
            show_404();
        }
        $att['name'] = $this->input->post('attName');
        $att['price'] = $this->input->post('virName');
        $this->mms->createProduct('Entity\MisCalendarPagesTb', $att);
        redirect(base_url().'mis');
    }
    public function update_calendar_pages(){
        if(!$this->tank_auth->is_role('admin')){
            show_404();
        }
        $att['id'] = $this->input->post('u_id');
        $att['name'] = $this->input->post('u_attName');
        $att['price'] = $this->input->post('u_virName');
        $this->mms->updateProduct('Entity\MisCalendarPagesTb', $att);
        redirect(base_url().'mis');
    }
    public function delete_calendar_pages($id){
        if(!$this->tank_auth->is_role('admin')){
            show_404();
        }
        $this->mms->deleteProduct('Entity\MisCalendarPagesTb', $id);
        redirect(base_url().'mis');
    }
  
//CALENDAR PAPER INSIDE PAGES CRUD
    public function calendar_paper_inside_pages(){
        if(!$this->tank_auth->is_role('admin')){
            show_404();
        }
        $data['product'] = 'Calendar ';
        $data['name'] = 'Paper Inside Pages';
        $data['product_attribute'] = $this->mms->getPaginated('Entity\MisCalendarPaperInsidePagesTb',6,10);
        $this->load->tile('mis', 'mis/paginated_product_view', $data);
    }
    public function create_calendar_paper_inside_pages(){
        if(!$this->tank_auth->is_role('admin')){
            show_404();
        }
        $att['name'] = $this->input->post('attName');
        $att['price'] = $this->input->post('virName');
        $this->mms->createProduct('Entity\MisCalendarPaperInsidePagesTb', $att);
        redirect(base_url().'mis');
    }
    public function update_calendar_paper_inside_pages(){
        if(!$this->tank_auth->is_role('admin')){
            show_404();
        }
        $att['id'] = $this->input->post('u_id');
        $att['name'] = $this->input->post('u_attName');
        $att['price'] = $this->input->post('u_virName');
        $this->mms->updateProduct('Entity\MisCalendarPaperInsidePagesTb', $att);
        redirect(base_url().'mis');
    }
    public function delete_calendar_paper_inside_pags($id){
        if(!$this->tank_auth->is_role('admin')){
            show_404();
        }
        $this->mms->deleteProduct('Entity\MisCalendarPaperInsidePagesTb', $id);
        redirect(base_url().'mis');
    }
    
//BROCHURE FOLDING CRUD
    public function brochure_folding(){
        if(!$this->tank_auth->is_role('admin')){
            show_404();
        }
        $data['product'] = 'Brochure ';
        $data['name'] = 'Folding';
        $data['product_attribute'] = $this->mms->getPaginated('Entity\MisBrochureFoldingTb',6,10);
        $this->load->tile('mis', 'mis/paginated_product_view', $data);
    }
    public function create_brochure_folding(){
        if(!$this->tank_auth->is_role('admin')){
            show_404();
        }
        $att['name'] = $this->input->post('attName');
        $att['price'] = $this->input->post('virName');
        $this->mms->createProduct('Entity\MisBrochureFoldingTb', $att);
        redirect(base_url().'mis');
    }
    public function update_brochure_folding(){
        if(!$this->tank_auth->is_role('admin')){
            show_404();
        }
        $att['id'] = $this->input->post('u_id');
        $att['name'] = $this->input->post('u_attName');
        $att['price'] = $this->input->post('u_virName');
        $this->mms->updateProduct('Entity\MisBrochureFoldingTb', $att);
        redirect(base_url().'mis');
    }
    public function delete_brochure_folding($id){
        if(!$this->tank_auth->is_role('admin')){
            show_404();
        }
        $this->mms->deleteProduct('Entity\MisBrochureFoldingTb', $id);
        redirect(base_url().'mis');
    }

//BROCHURE PAPER TYPE CRUD
    public function brochure_paper_type(){
        if(!$this->tank_auth->is_role('admin')){
            show_404();
        }
        $data['product'] = 'Brochure ';
        $data['name'] = 'Paper Type';
        $data['product_attribute'] = $this->mms->getPaginated('Entity\MisBrochurePaperTypeTb',6,10);
        $this->load->tile('mis', 'mis/paginated_product_view', $data);
    }
    public function create_brochure_paper_type(){
        if(!$this->tank_auth->is_role('admin')){
            show_404();
        }
        $att['name'] = $this->input->post('attName');
        $att['price'] = $this->input->post('virName');
        $this->mms->createProduct('Entity\MisBrochurePaperTypeTb', $att);
        redirect(base_url().'mis');
    }
    public function update_brochure_paper_type(){
        if(!$this->tank_auth->is_role('admin')){
            show_404();
        }
        $att['id'] = $this->input->post('u_id');
        $att['name'] = $this->input->post('u_attName');
        $att['price'] = $this->input->post('u_virName');
        $this->mms->updateProduct('Entity\MisBrochurePaperTypeTb', $att);
        redirect(base_url().'mis');
    }
    public function delete_brochure_paper_type($id){
        if(!$this->tank_auth->is_role('admin')){
            show_404();
        }
        $this->mms->deleteProduct('Entity\MisBrochurePaperTypeTb', $id);
        redirect(base_url().'mis');
    }

//BROCHURE PRINTED SIDE CRUD
    public function brochure_printed_side(){
        if(!$this->tank_auth->is_role('admin')){
            show_404();
        }
        $data['product'] = 'Brochure ';
        $data['name'] = 'Printed Side';
        $data['product_attribute'] = $this->mms->getPaginated('Entity\MisBrochurePrintedSideTb',6,10);
        $this->load->tile('mis', 'mis/paginated_product_view', $data);
    }
    public function create_brochure_printed_side(){
        if(!$this->tank_auth->is_role('admin')){
            show_404();
        }
        $att['name'] = $this->input->post('attName');
        $att['price'] = $this->input->post('virName');
        $this->mms->createProduct('Entity\MisBrochurePrintedSideTb', $att);
        redirect(base_url().'mis');
    }
    public function update_brochure_printed_side(){
        if(!$this->tank_auth->is_role('admin')){
            show_404();
        }
        $att['id'] = $this->input->post('u_id');
        $att['name'] = $this->input->post('u_attName');
        $att['price'] = $this->input->post('u_virName');
        $this->mms->updateProduct('Entity\MisBrochurePrintedSideTb', $att);
        redirect(base_url().'mis');
    }
    public function delete_brochure_printed_side($id){
        if(!$this->tank_auth->is_role('admin')){
            show_404();
        }
        $this->mms->deleteProduct('Entity\MisBrochurePrintedSideTb', $id);
        redirect(base_url().'mis');
    }

//BROCHURE SIZE CRUD
    public function brochure_size(){
        if(!$this->tank_auth->is_role('admin')){
            show_404();
        }
        $data['product'] = 'Brochure ';
        $data['name'] = 'Size';
        $data['product_attribute'] = $this->mms->getPaginated('Entity\MisBrochureSizeTb',6,10);
        $this->load->tile('mis', 'mis/paginated_product_view', $data);
    }
    public function create_brochure_size(){
        if(!$this->tank_auth->is_role('admin')){
            show_404();
        }
        $att['name'] = $this->input->post('attName');
        $att['price'] = $this->input->post('virName');
        $this->mms->createProduct('Entity\MisBrochureSizeTb', $att);
        redirect(base_url().'mis');
    }
    public function update_brochure_size(){
        if(!$this->tank_auth->is_role('admin')){
            show_404();
        }
        $att['id'] = $this->input->post('u_id');
        $att['name'] = $this->input->post('u_attName');
        $att['price'] = $this->input->post('u_virName');
        $this->mms->updateProduct('Entity\MisBrochureSizeTb', $att);
        redirect(base_url().'mis');
    }
    public function delete_brochure_size($id){
        if(!$this->tank_auth->is_role('admin')){
            show_404();
        }
        $this->mms->deleteProduct('Entity\MisBrochureSizeTb', $id);
        redirect(base_url().'mis');
    }
    
    //AJAX REQUESTS
    public function edit_calendar_binding_placement_form_ajax(){
        $ajax = $this->mms->getAjaxUpdateDetails('Entity\MisCalendarBindingPlacementTb', $this->input->post('id'));
        echo json_encode($ajax);
    }
    public function edit_calendar_binding_form_ajax(){
        $je = $this->mms->getAjaxUpdateDetails('Entity\MisCalendarBindingTb', $this->input->post('id'));
        echo json_encode($je);
    }
    public function edit_calendar_cover_paper_form_ajax(){
        $ajax = $this->mms->getAjaxUpdateDetails('Entity\MisCalendarCoverPaperTb', $this->input->post('id'));
        echo json_encode($ajax);
    }
    public function edit_calendar_cover_form_ajax(){
        $ajax = $this->mms->getAjaxUpdateDetails('Entity\MisCalendarCoverTb', $this->input->post('id'));
        echo json_encode($ajax);
    }
    public function edit_calendar_hole_drilling_form_ajax(){
        $ajax = $this->mms->getAjaxUpdateDetails('Entity\MisCalendarHoleDrillingTb', $this->input->post('id'));
        echo json_encode($ajax);
    }
    public function edit_calendar_page_size_form_ajax(){
        $ajax = $this->mms->getAjaxUpdateDetails('Entity\MisCalendarPageSizeTb', $this->input->post('id'));
        echo json_encode($ajax);
    }
    public function edit_calendar_pages_form_ajax(){
        $ajax = $this->mms->getAjaxUpdateDetails('Entity\MisCalendarPagesTb', $this->input->post('id'));
        echo json_encode($ajax);
    }
    public function edit_calendar_paper_inside_pages_form_ajax(){
        $ajax = $this->mms->getAjaxUpdateDetails('Entity\MisCalendarPaperInsidePagesTb', $this->input->post('id'));
        echo json_encode($ajax);
    }
    
    public function edit_brochure_folding_form_ajax(){
        $ajax = $this->mms->getAjaxUpdateDetails('Entity\MisBrochureFoldingTb', $this->input->post('id'));
        echo json_encode($ajax);
    }
    public function edit_brochure_paper_type_form_ajax(){
        $ajax = $this->mms->getAjaxUpdateDetails('Entity\MisBrochurePaperTypeTb', $this->input->post('id'));
        echo json_encode($ajax);
    }
    public function edit_brochure_printed_side_form_ajax(){
        $ajax = $this->mms->getAjaxUpdateDetails('Entity\MisBrochurePrintedSideTb', $this->input->post('id'));
        echo json_encode($ajax);
    }
    public function edit_brochure_size_form_ajax(){
        $ajax = $this->mms->getAjaxUpdateDetails('Entity\MisBrochureSizeTb', $this->input->post('id'));
        echo json_encode($ajax);
    }
}

//KULANG PA NG CALENDAR TYPE TB!!