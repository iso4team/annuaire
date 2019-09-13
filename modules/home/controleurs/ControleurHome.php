<?php

class ControleurHome {
    protected  $m_domaine ;
    protected $m_texte;
    public function __construct() {
        $this->m_domaine = new Domaine();
         $this->m_texte = new Texte();
    }

    public function actionIndex() {
        $domaines = $this->m_domaine->findAll();

        include 'home.php';
    }
    public function actionNous() {
        $conditions  = "code = 'qsn'";
        $resultat = array();
        $resultat = $this->m_texte->recherche(array(), $conditions);
        $texte = $resultat[0]['texte'];
        include 'quisommesnous.php';
    }
    public function actionService() {
        $conditions  = "code = 'serv'";
        $resultat = array();
        $resultat = $this->m_texte->recherche(array(), $conditions);
        $texte = $resultat[0]['texte'];
        include 'quisommesnous.php';
    }
    public function actionContact() {
        $conditions  = "code = 'cont'";
        $resultat = array();
        $resultat = $this->m_texte->recherche(array(), $conditions);
        $texte = $resultat[0]['texte'];
        include 'quisommesnous.php';
    }
}
