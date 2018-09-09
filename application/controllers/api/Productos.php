<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'Api.php';

class Productos extends Api {

  public $table_name = "Productos";
  public $coulumna_id = "codigo_barras";

  public function __construct() {
      parent::__construct();
  }

   
}