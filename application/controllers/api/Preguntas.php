<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'Api.php';

class Preguntas extends Api {

  public $table_name = "preguntas";
  public $name_rules = "rules/preguntas";

  public function __construct() {
      parent::__construct();
  }

   
}