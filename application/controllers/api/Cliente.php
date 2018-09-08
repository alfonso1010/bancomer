<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'Api.php';

class Cliente extends Api {

  public $table_name = "Cliente";
  public $coulumna_id = "idCliente";

  public function __construct() {
      parent::__construct();
  }

   
}