<?php

class ControleurHome {

    protected $m_service_category;
    protected $m_product_category;
    protected $m_texte;

    public function __construct() {
        $this->m_service_category = new ServiceCategory();
        $this->m_product_category = new ProductCategory();
        $this->m_texte = new Texte();
    }

    public function actionIndex() {
        $service_categories = $this->m_service_category->findAll();
        $product_categories = $this->m_product_category->findAll();
        
        $result = array();
        $datas = filter_input_array(INPUT_POST);
        if (isset($datas) && !empty($datas)) {
            $result = $datas;
            include_once 'search_result.php';
        } else {
            include_once 'home.php';
        }
    }

    public function actionNous() {
//        $conditions  = "code = 'qsn'";
//        $resultat = array();
//        $resultat = $this->m_texte->recherche(array(), $conditions);
//        $texte = $resultat[0]['texte'];
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

}
