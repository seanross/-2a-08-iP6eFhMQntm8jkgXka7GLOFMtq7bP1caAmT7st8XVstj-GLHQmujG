<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends GlobalController{
    
    public function __construct(){
        parent::__construct();
        $this->load->model('cart/cartService', 'ccs');
    }
    
    public function index(){
        if(!$this->tank_auth->is_role('user')){
            redirect('auth');
        }
        $data['cart_products'] = $this->ccs->getAllCartProducts();
        $this->load->tile('base', 'cart/paginated_cart_view', $data);
    }
    
    public function edit_calendar($id){
        $data['calendar_binding_placement'] = $this->ccs->getAll('Entity\MisCalendarBindingPlacementTb');
        $data['calendar_binding'] = $this->ccs->getAll('Entity\MisCalendarBindingTb');
        $data['calendar_cover_paper'] = $this->ccs->getAll('Entity\MisCalendarCoverPaperTb');
        $data['calendar_cover'] = $this->ccs->getAll('Entity\MisCalendarCoverTb');
        $data['calendar_hole_drilling'] = $this->ccs->getAll('Entity\MisCalendarHoleDrillingTb');
        $data['calendar_page_size'] = $this->ccs->getAll('Entity\MisCalendarPageSizeTb');
        $data['calendar_pages'] = $this->ccs->getAll('Entity\MisCalendarPagesTb');
        $data['calendar_paper_inside_pages'] = $this->ccs->getAll('Entity\MisCalendarPaperInsidePagesTb');
        $data['current'] = $this->ccs->getCurrentProduct('Entity\ProductCalendarTb', $id);
        $this->load->tile('base_w_sidebar','cart/edit_calendar_view', $data);
    }
}