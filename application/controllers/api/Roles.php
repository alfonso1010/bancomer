<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'Api.php';

class Roles extends Api {

  public $table_name = "roles";
  public $name_rules = "rules/roles";

  public function __construct() {
      parent::__construct();
  }

   
}