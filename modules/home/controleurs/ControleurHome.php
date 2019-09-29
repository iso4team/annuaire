<?php

class ControleurHome {

    protected $m_service_category;
    protected $m_product_category;
    protected $m_city;
    protected $m_texte;
    protected $m_service;
    protected $m_product;

    public function __construct() {
        $this->m_service_category = new ServiceCategory();
        $this->m_product_category = new ProductCategory();
        $this->m_city = new City();
        $this->m_texte = new Texte();
        $this->m_service = new Service();
        $this->m_product = new Product();
    }

    public function actionIndex() {
        $services = array();$products = array();
        $product_categories_page = array();$service_categories_page = array();
        $service_categories = $this->m_service_category->findAll();
        $service_categories_page = $this->m_service_category->findAllAndDetails();
        $product_categories = $this->m_product_category->findAll();
        $product_categories_page = $this->m_product_category->findAllAndDetails();
        
        
        $citys = $this->m_city->findAll();
        
        $result = array();
        $datas = filter_input_array(INPUT_POST);
        if (isset($datas) && !empty($datas)) {
            $result = $datas;
            $motCle = $result['keyword'];
            if($result['type']=="s"){
                 $cle = $result['keyword'];
               $sc_id = $result['category'];
            $services = $this->m_service->findSerciceResearch($cle,$sc_id);
            }
            if($result['type']=="p"){
                $cle = $result['keyword'];
               $pc_id = $result['category'];
               $products = $this->m_product->findSerciceResearch($cle,$pc_id); 
            }
            include_once 'search_result.php';
        } else {
            include_once 'home.php';
        }
    }

    public function actionNous() {
        $conditions  = "code = 'qsn'";
        $resultat = array();
        $resultat = $this->m_texte->recherche(array(), $conditions);
        $texte = $resultat[0]['texte'];
        include 'quisommesnous.php';
    }

    public function actionService() {
        $conditions = "code = 'serv'";
        $resultat = array();
        $resultat = $this->m_texte->recherche(array(), $conditions);
        $texte = $resultat[0]['texte'];
        include 'services.php';
    }

    public function actionContact() {
        $conditions = "code = 'cont'";
        $resultat = array();
        $resultat = $this->m_texte->recherche(array(), $conditions);
        $texte = $resultat[0]['texte'];
        include 'contact.php';
    }
    public function actionAllProCategory($id){
        $current_category = $id; $products = array();$cle='';
        $products =  $this->m_product->findSerciceResearch($cle, $id);
        if(count($products)>0) $current_category= $products[0]['pc_name'];
        include 'products_page.php';
    }
    public function actionAllSvCategory($id){
        $current_category = $id; $serv = array();$cle='';
        $serv =  $this->m_service->findSerciceResearch($cle, $id);
        if(count($serv)>0) $current_category= $serv[0]['sc_name'];
        include 'services_page.php';
    }
}
