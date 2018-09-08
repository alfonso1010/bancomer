<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'Api.php';

class EstadoTrans extends Api {

  public $table_name = "Estado_trans";
  public $coulumna_id = "idEstado_trans";

  public function __construct() {
      parent::__construct();
  }

   
}