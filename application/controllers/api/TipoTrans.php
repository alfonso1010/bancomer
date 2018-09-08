<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'Api.php';

class TipoTrans extends Api {

  public $table_name = "Tipo_trans";

  public function __construct() {
      parent::__construct();
  }

   
}