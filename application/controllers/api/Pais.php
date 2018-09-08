<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'Api.php';

class Pais extends Api {

  public $table_name = "Pais";
  public $coulumna_id = "idPais";

  public function __construct() {
      parent::__construct();
  }

   
}