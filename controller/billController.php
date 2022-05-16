<?php 

class billController extends billModel{
    public function makeBill($i,$q){
        $this->insertBill($i,$q);
    }
}
?>