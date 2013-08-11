<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CartService extends GlobalService {

    public function __construct()
    {
            parent::__construct();
            //Do your magic here
    }
    
    public function getAllCartProducts(){
        $user = $this->getById('Entity\MisUserTb', $this->user_id);
        return $user->getMisUserProfileTb()->getCashieringCartTb();
    }
   
    public function getCurrentProduct($entity, $id){
        $prod = $this->getById($entity, $id);
//        if($prod->getCashieringCartTb()->getMisUserProfileTb()->getMisUserTb->getId() == $this->user_id)
        return $prod; 
//        else show_404 ();
    }
}