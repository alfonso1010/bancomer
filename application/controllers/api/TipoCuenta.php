<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'Api.php';

class TipoCuenta extends Api {

  public $table_name = "Tipo_cuenta";

  public function __construct() {
      parent::__construct();
  }

   
}