<?php

class ControleurUser {

    protected $m_user;
    protected $m_cred;

    public function __construct() {
        $this->m_user = new User();
        $this->m_cred = new UserCredential();
    }

    public function actionLogin() {
        include_once 'login.php';
    }

    public function actionLogout() {
        include_once 'logout.php';
    }

    public function actionSubscribe() {
        $resul = array();
        $datas = filter_input_array(INPUT_POST);
        if (isset($datas) && !empty($datas)) {
            if ($datas['password'] != $datas['confirm_password']) {
                $resul = array("code" => "111", "message" => "Les mots de passe ne concordent pas.");
            } else {
                $infos_user = array();
                $infos_user['first_name'] = $datas['prenom'];
                $infos_user['last_name'] = $datas['nom'];
                $infos_user['phone'] = $datas['telephone'];
                $infos_user['email'] = $datas['email'];
                $infos_user['address'] = $datas['adresse'];

                $user_id = $this->m_user->ajouter($infos_user, TRUE);
                if ($user_id > 0) {
                    $salt = uniqid();
                    $infos_cred = array();
                    $infos_cred['crd_login'] = $datas['email'];
                    $infos_cred['crd_salt'] = $salt;
                    $infos_cred['crd_password'] = md5($datas['password'].$salt);
                    $infos_cred['crd_user'] = $user_id;
                    if($this->m_cred->ajouter($infos_cred)){
                        $resul = array("code" => "000", "message" => "Felicitation! Votre compte est cree. Un mail est envoye pour valider votre mail.");
                    } else {
                        $resul = array("code" => "111", "message" => "Desole. Nous n'avons pas creer votre compte.");
                    }
                } else {
                    $resul = array("code" => "111", "message" => "Desole. Nous n'avons pas creer votre compte.");
                }
            }
        }
        include_once 'subscribe.php';
    }

    public function actionConfirm() {
        include_once 'confirm.php';
    }

}
