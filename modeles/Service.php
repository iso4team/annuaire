<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserProfil
 *
 * @author <ahmet.thiam@uvs.edu.sn>
 */
class Service extends Model {

    var $table = 'service';
    var $db;

    public function __construct() {
        parent::__construct();
    }

    public function findAll() { 
        $sql = "SELECT s.id, u.*, c.* FROM crm_supplier s "
                . "JOIN crm_user u ON u.id = s.sup_fk_user "
                . "JOIN crm_category_supplier c ON c.id = s.sup_category";
        return $this->executerReq($sql);
    }
    
    public function findSerciceResearch($result = array()) {
         /*$sql = "SELECT s.id,s.sv_name,u.id, u.first_name,u.last_name, u.phone, u.email,u.address, c.id, c.ct_name FROM service s "
                . "JOIN user u ON u.id = s.sv_user "
                . "JOIN city c ON c.id = u.fk_city";*/
        $cle = $result['keyword'];
        $sv_id = $result['category'];
        $sql = "SELECT s.id,s.sv_name,u.id, u.first_name,u.last_name, u.phone, u.email,u.address, c.id, c.ct_name FROM service s "
                ."JOIN user u ON u.id = s.sv_user AND  s.sv_name LIKE '%".$cle."%'"
                ."JOIN service_category sc ON sc.id = s.sv_category AND sc.id='".$sv_id."'"
                ."JOIN city c ON c.id = u.fk_city";
        return $this->executerReq($sql);
    } 
     public function findSerciceResearchTest($motCle) {
        $donnees = array(); $conditions = "sv_name LIKE '%".$motCle."%'";
        return $this->recherche($donnees,$conditions);
    } 
   
}