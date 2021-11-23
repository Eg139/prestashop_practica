<?php

class AdminDeadpoolLoganController extends ModuleAdminController{
    
    
    public function init(){
        $this->bootstrap = true;
         parent::init();
    }




    public function initContent(){
         parent::initContent();

         $this->setTemplate('logan.tpl');
         

    }



}




?>