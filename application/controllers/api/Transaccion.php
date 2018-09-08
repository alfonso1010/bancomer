<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'Api.php';

class Transaccion extends Api {

  public $table_name = "Transaccion";
  public $coulumna_id = "idTransaccion";

  public function __construct() {
      parent::__construct();
  }

   
}