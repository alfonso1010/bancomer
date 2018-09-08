<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'Api.php';

class BancaMovil extends Api {

  public $table_name = "banca_movil";

  public function __construct() {
      parent::__construct();
  }

   
}