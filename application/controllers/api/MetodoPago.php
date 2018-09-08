<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'Api.php';

class MetodoPago extends Api {

  public $table_name = "Metodo_pago";

  public function __construct() {
      parent::__construct();
  }

   
}