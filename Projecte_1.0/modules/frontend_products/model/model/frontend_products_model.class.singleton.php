<?php
$path = $_SERVER['DOCUMENT_ROOT'] . '/Projecte_1.0/';
define('SITE_ROOT', $path);
require(SITE_ROOT . "modules/frontend_products/model/BLL/frontend_products_bll.class.singleton.php");


class frontend_products_model {

    private $bll;
    static $_instance;

    private function __construct() {
        $this->bll = frontend_products_bll::getInstance();
    }

    public static function getInstance() {
        if (!(self::$_instance instanceof self))
            self::$_instance = new self();
        return self::$_instance;
    }

    public function list_products() {
        return $this->bll->list_products_BLL();
    }
    
    public function details_products($id) {
        return $this->bll->details_products_BLL($id);
    }

}