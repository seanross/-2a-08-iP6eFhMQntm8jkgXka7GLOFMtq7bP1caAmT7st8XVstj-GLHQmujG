<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MisService extends GlobalService {

    public function __construct()
    {
            parent::__construct();
            //Do your magic here
    }
    
    public function getAjaxUpdateDetails($entity, $id){
        $auf = $this->getById($entity, $id);
        $data['name'] = $auf->getName();
        $data['price'] = $auf->getVirtualPrice();
        return $data;
    }
    
    public function getCalendarAttributeLength(){
        $cal['binding_placement'] = count($this->getAll('Entity\MisCalendarBindingPlacementTb'));
        $cal['binding'] = count($this->getAll('Entity\MisCalendarBindingTb'));
        $cal['cover_paper'] = count($this->getAll('Entity\MisCalendarCoverPaperTb'));
        $cal['cover'] = count($this->getAll('Entity\MisCalendarCoverTb'));
        $cal['hole_drilling'] = count($this->getAll('Entity\MisCalendarHoleDrillingTb'));
        $cal['page_size'] = count($this->getAll('Entity\MisCalendarPageSizeTb'));
        $cal['pages'] = count($this->getAll('Entity\MisCalendarPagesTb'));
        $cal['paper_inside_pages'] = count($this->getAll('Entity\MisCalendarPaperInsidePagesTb'));
        return $cal;
    }
    
    public function getBrochureAttributeLength(){
        $bal['folding'] = count($this->getAll('Entity\MisBrochureFoldingTb'));
        $bal['paper_type'] = count($this->getAll('Entity\MisBrochurePaperTypeTb'));
        $bal['printed_side'] = count($this->getAll('Entity\MisBrochurePrintedSideTb'));
        $bal['size'] = count($this->getAll('Entity\MisBrochureSizeTb'));
        return $bal;
    }
    
    public function createProduct($entity, $att){
        $prod = new $entity;
        $prod->setName($att['name']);
        $prod->setVirtualPrice($att['price']);
        $this->newStatusAdvice($prod);
        $this->em->persist($prod);
        $this->em->flush();
        return 'Success';
    }
    
    public function updateProduct($entity, $att){
        $prod = $this->getById($entity, $att['id']);
        $prod->setName($att['name']);
        $prod->setVirtualPrice($att['price']);
        $this->updateStatusAdvice($prod);
        $this->em->persist($prod);
        $this->em->flush();
        return 'Success';
    }
    
    public function deleteProduct($entity, $id){
        $prod = $this->mms->getById($entity, $id);
        $this->mms->delete($prod);
        return 'Success';
    }
}