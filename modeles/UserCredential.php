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
class UserCredential extends Model {

    var $table = 'user_credential';
    var $db;

    public function __construct() {
        parent::__construct();
    }

    public function findAll() {
        $sql = "SELECT * From user_domaine where statut=1";
        return $this->executerReq($sql);
    }

}
