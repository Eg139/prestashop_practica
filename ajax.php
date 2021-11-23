<?php
require_once('../../config/config.inc.php');
require_once('../init.php');
require_once('deadpool.php');

if (Tools::getIssset('token')&& Tools::getIssset('action')) {
    $dp = new Deadpool;

    echo $dp->getProducts();
}



?>