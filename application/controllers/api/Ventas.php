<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'Api.php';

class Ventas extends Api {

  public $table_name = "ventas";

  public function __construct() {
      parent::__construct();
  }

   
}