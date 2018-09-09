<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'Api.php';

class BancaMovil extends Api {

  public $table_name = "Banca_movil";
  public $coulumna_id = "Cliente_idCliente";

  public function __construct() {
      parent::__construct();
  }

   
}