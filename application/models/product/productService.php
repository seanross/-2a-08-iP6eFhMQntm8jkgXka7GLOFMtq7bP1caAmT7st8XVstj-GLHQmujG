<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ProductService extends GlobalService {

    public function __construct()
    {
            parent::__construct();
            //Do your magic here
    }
    
    public function getAllOption($entity){
        $entities = $this->getAll($entity);
        $option = array();
        foreach($entities as $row){
        $option['id'] = $row->getId();
        $option['name'] = $row->getName();
        }
        return $option;
    }
    
    public function rushInterest($price, $days){
        if($days == 2){
            $interest = $price * .25;                                           //PLUS 25 PERCENT
            return $price += $interest;
        } else if ($days == 1){
            $interest = $price * .50;                                           //PLUS 50 PERCENT
            return $price += $interest;
        } else {
            return $price;                                                      //DO NOTHING
        }
    }
    
    public function getCalendarCalcution($calendar){
        $total = 0;
        $entity1 = $this->getById('Entity\MisCalendarBindingPlacementTb', $calendar['binding_placement']);
        $total += $entity1->getVirtualPrice();
        $entity2 = $this->getById('Entity\MisCalendarBindingTb', $calendar['binding']);
        $total += $entity2->getVirtualPrice();
        $entity3 = $this->getById('Entity\MisCalendarCoverPaperTb', $calendar['cover_paper']);
        $total += $entity3->getVirtualPrice();
        $entity4 = $this->getById('Entity\MisCalendarCoverTb', $calendar['cover']);
        $total += $entity4->getVirtualPrice();
        $entity5 = $this->getById('Entity\MisCalendarHoleDrillingTb', $calendar['hole_drilling']);
        $total += $entity5->getVirtualPrice();
        $entity6 = $this->getById('Entity\MisCalendarPageSizeTb', $calendar['page_size']);
        $total += $entity6->getVirtualPrice();
        $entity7 = $this->getById('Entity\MisCalendarPagesTb', $calendar['pages']);
        $total += $entity7->getVirtualPrice();
        $entity8 = $this->getById('Entity\MisCalendarPaperInsidePagesTb', $calendar['paper_inside_pages']);
        $total += $entity8->getVirtualPrice();
        //QUANTITY MULTIPLIER
        $total *= $calendar['quantity'];
        //RUSH INCREASE
        return $this->rushInterest($total, $calendar['turn-around']);
    }
    
    public function createCalendar($args){
        $user = $this->getById('Entity\MisUserTb', $this->user_id);
//        $user = new Entity\MisUserTb;
        $cal = new Entity\ProductCalendarTb;
        $cbp = $this->getById('Entity\MisCalendarBindingPlacementTb', $args['binding_placement']);
        $cal->setMisCalendarBindingPlacementTb($cbp);
        $cb = $this->getById('Entity\MisCalendarBindingTb', $args['binding']);
        $cal->setMisCalendarBindingTb($cb);
        $ccp = $this->getById('Entity\MisCalendarCoverPaperTb', $args['cover_paper']);
        $cal->setMisCalendarCoverPaperTb($ccp);
        $cc = $this->getById('Entity\MisCalendarCoverTb', $args['cover']);
        $cal->setMisCalendarCoverTb($cc);
        $chd = $this->getById('Entity\MisCalendarHoleDrillingTb', $args['hole_drilling']);
        $cal->setMisCalendarHoleDrillingTb($chd);
        $cps = $this->getById('Entity\MisCalendarPageSizeTb', $args['page_size']);
        $cal->setMisCalendarPageSizeTb($cps);
        $cs = $this->getById('Entity\MisCalendarPagesTb', $args['pages']);
        $cal->setMisCalendarPagesTb($cs);
        $cpip = $this->getById('Entity\MisCalendarPaperInsidePagesTb', $args['cover_paper']);
        $cal->setMisCalendarPaperInsidePagesTb($cpip);
        $cal->setQuantity($args['quantity']);
        $cal->setTurnAround($args['turn-around']);
        $calculatedPrice = $this->getCalendarCalcution($args);
        $cal->setPrice($this->rushInterest($calculatedPrice, $args['turn-around']));
        $this->newStatusAdvice($cal);
        $cal->setCashieringCartTb($user->getMisUserProfileTb()->getCashieringCartTb());
        $this->em->persist($user);
        $this->em->persist($cal);
        $this->em->flush();
        return $cal->getId();
    }
     public function createProductDetails($entity, $args){
        $cal = $this->getById($entity, $args['id']);
        $cal->setName($args['name']);
        $cal->setInstruction($args['instruction']);
        $this->updateStatusAdvice($cal);
        $this->em->persist($cal);
        $this->em->flush();
        return $cal->getId();
    }
}