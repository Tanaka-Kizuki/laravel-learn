<?php 
  namespace App\MyClasses;

  class MyService {

    private $myservice;

    public function __construct() {
    }


    public function say() {
      return $this->msg;
    }

    public function data(int $id) {
      return $this->data[$id];
    }

    public function alldata() {
      return $this->data;
    }
  }


?>