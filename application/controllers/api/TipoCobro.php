<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'Api.php';

class TipoCobro extends Api {

  public $table_name = "Negocio";
  public $coulumna_id = "idNegocio";

  public function index_get($id = 0){
  	$registros =  $this->generico->obtenerRegistros([
                      'select' => 'n.*,tc.TipoCobrocol',
                      'from' => "Negocio n ",
                      'join' => "join TipoCobro  tc on n.TipoCobro_idTipoCobro = tc.idTipoCobro",
                      'where' => "where n.idNegocio = ".$id
                    ]);
  	//debug($cuenta);
  	
  	$this->response($registros, 200);
  }

  public function __construct() {
      parent::__construct();
  }

   
}