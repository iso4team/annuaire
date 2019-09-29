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
    
    public function findSerciceResearch($cle,$sc_id) {
        $sql = "SELECT s.id as id_sv,sc.id as id_sc, s.sv_name,sc.sc_name,u.id, u.first_name,u.last_name, u.phone, u.email,u.address, c.id, c.ct_name FROM service s "
                ."JOIN user u ON u.id = s.sv_user AND  s.sv_name LIKE '%".$cle."%'"
                ."JOIN service_category sc ON sc.id = s.sv_category AND sc.id='".$sc_id."'"
                ."JOIN city c ON c.id = u.fk_city";
        return $this->executerReq($sql);
    } 
    public function detailsService($cle,$id) {
        $sql = "SELECT s.id as id_sv,s.sv_description, sc.id as id_sc,s.sv_name,sc.sc_name,u.id, u.first_name,u.last_name, u.phone, u.email,u.address, c.id, c.ct_name FROM service s "
                ."JOIN user u ON u.id = s.sv_user AND  s.sv_name LIKE '%".$cle."%'"
                ."JOIN service_category sc ON sc.id = s.sv_category AND s.id='".$id."'"
                ."JOIN city c ON c.id = u.fk_city";
        return $this->executerReq($sql);
    } 
   
}