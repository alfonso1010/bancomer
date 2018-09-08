<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'Api.php';

class Divisa extends Api {

  public $table_name = "Divisa";
   public $coulumna_id = "idDivisa";

  public function __construct() {
      parent::__construct();
  }

   
}