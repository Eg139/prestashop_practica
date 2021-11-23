<?php
if (!defined('_PS_VERSION_')) {
    exit;}

class Deadpool extends Module{

public function __construct(){
    $this->name = 'deadpool';
    $this->version = '1.00.0';
    $this->author = 'Eric';
    $this->tab = 'Administration';
    $this->secure_key = Tools::encrypt($this->name);
    $this->need_instance = 0;
    $this->bootstrap = 1;
    $this->controllers = array('logan');
    parent::__construct();

    $this->displayName = $this->l('Deadpool');
    $this->description = $this->l('Just another module to implement Admin Controller demo');
    $this->confirmUninstall = $this->l('Seguro que desea borrar este modulo?');
    $this->ps_version_compliancy = array('min'=> '1.6.0.0', 'max' =>_PS_VERSION_);
    

}

public function install(){

    Db::getInstance()->execute('
    CREATE TABLE IF NOT EXISTS
    `'._DB_PREFIX_.'heroes` (
        `id_hero` int(11) unsigned NOT NULL AUTO_INCREMENT,
        `name` varchar(255) NOT NULL,
        `sage` varchar(255) NOT NULL,
        `superpower` varchar(255) NOT NULL,
        `alt` varchar(255) NOT NULL,
        `image` varchar(255) NOT NULL,
        PRIMARY KEY (`id_hero`)
        )ENGINE = '._MYSQL_ENGINE_.' CHARACTER SET utf8;');

    return $this->installModuleTab() && parent::install();
}

public function uninstall(){

    Db::getInstance()->execute('DROP TABLE IF EXISTS`'._DB_PREFIX_.'heroes`');

    return $this->uninstallModuleTab() && parent::uninstall();
}


public function installModuleTab(){
    $tab = new Tab;

    $tab->name[$this->context->language->id] = $this->l('Deadpool');
    $tab->class_name = 'AdminDeadpoolLogan';
    $tab->module = $this->name;
    //$tab->active = 1;
    $tab->id_parent = 0;
    //$tab->add();

    return $tab->save();
}

public function uninstallModuleTab(){
    $idTab=Tab::getIdFromClassName('AdminDeadpoolLogan');
    if($idTab)
    {
        $tab = new Tab($idTab);
        return $tab->delete();
    }
    return true;
}



}




?>

