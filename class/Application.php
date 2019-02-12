<?php

class Application{

    private $db = null;
    private $view = null;
    private $config = [];

    public function __construct($db, $view, $config){
        $this->db = $db;
        $this->view = $view;
        $this->config = $config;
    }

    public function setAction($action = 'index', $params = []){
        switch ($action){
            case 'index':
                $this->view->setContent('index', $params);
                break;
            case 'registry':
                $this->registryUser();
                break;
        }
        return $this;
    }

    private function registryUser(){
        $mess = 1;
        $type = null;
        foreach($_REQUEST['type'] as $item) {
            if(!empty($item)) {
                $type = (int)$item;
            }
        }
        $pic = null;
        if(isset($_FILES['pic']['name']) && !empty($_FILES['pic']['name'])){
            $pic = $_FILES['pic']['name'];
            @mkdir("uploads", 0777);
            copy($_FILES['pic']['tmp_name'],"uploads/".basename($_FILES['pic']['name']));
        } else {
            $mess =  0;
        }
        $first_name = null;
        if(isset($_REQUEST['first_name']) && !empty($_REQUEST['first_name'])){
            $first_name = $_REQUEST['first_name'];
        } else {
            $mess =  0;
        }
        $last_name = null;
        if(isset($_REQUEST['last_name']) && !empty($_REQUEST['last_name'])){
             $last_name = $_REQUEST['last_name'];
        } else {
            $mess =  0;
        }
        $email = null;
        if(isset($_REQUEST['email']) && !empty($_REQUEST['email'])){
            $email = $_REQUEST['email'];
        } else {
            $mess =  0;
        }
        $username = null;
        if(isset($_REQUEST['name']) && !empty($_REQUEST['name'])){
            $username = $_REQUEST['name'];
        } else {
            $mess =  0;
        }
        $password = null;
        if(isset($_REQUEST['password']) && !empty($_REQUEST['password'])){
            $password = $_REQUEST['password'];
        } else {
            $mess =  0;
        }
        $address = null;
        if(isset($_REQUEST['address']) && !empty($_REQUEST['address'])){
            $address = $_REQUEST['address'];
        } else {
            $mess =  0;
        }
        $gender = null;
        if(isset($_REQUEST['gender']) && !empty($_REQUEST['gender'])){
            $gender = $_REQUEST['gender'];
        }
        $birth = null;
        if(isset($_REQUEST['birth']) && !empty($_REQUEST['birth'])){
            $birth = $_REQUEST['birth'];
        } else {
            $mess =  0;
        }
        $hobbies = serialize($_REQUEST['hobbies']);

        if($mess == 1) {
            if($this->db->execute('INSERT INTO users(user_type, pic, first_name, last_name, email, username, password, address, gender, birth, hobbies) 
            VALUES (\''.$type.'\',\''.$pic.'\',\''.$first_name.'\',\''.$last_name .'\',\''.$email.'\',\''.$username.'\',\''.$password.'\',
                \''.$address.'\',\''.$gender.'\',\''.$birth.'\',\''.$hobbies.'\')')){
                //$this->db->getLastId();
            }
        } else {
            print_r($mess);
        }
    }

}
