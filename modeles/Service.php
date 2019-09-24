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
}