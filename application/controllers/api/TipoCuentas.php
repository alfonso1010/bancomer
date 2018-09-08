<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'Api.php';

class TipoCuentas extends Api {

  public $table_name = "tipo_cuentas";

  public function __construct() {
      parent::__construct();
  }

   
}