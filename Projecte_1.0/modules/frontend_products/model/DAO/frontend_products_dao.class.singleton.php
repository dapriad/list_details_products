<?php
class frontend_productsDAO {

    static $_instance;

    private function __construct() {
        
    }

    public static function getInstance() {
        if (!(self::$_instance instanceof self))
            self::$_instance = new self();
        return self::$_instance;
    }
    
    public function list_products_DAO($db) {
        $sql = "SELECT * FROM products";
        $stmt = $db->ejecutar($sql);
        //return "hola";
        return $db->listar($stmt);
        
    }
    
    public function details_products_DAO($db,$id) {
        $sql = "SELECT * FROM products WHERE id_prod=".$id;
        $stmt = $db->ejecutar($sql);
        return $db->listar($stmt);
        
    }
    
}
