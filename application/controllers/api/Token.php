<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'Api.php';

class Token extends Api {

  public $table_name = "Banca_movil";
  public $coulumna_id = "Cliente_idCliente";

  public function __construct() {
      parent::__construct();
  }

  public function index_get($id = 0) {
      $data = $this->get();
      $where = "";
      if($id > 0){
        $where = "where ".$this->coulumna_id." = $id";
      }
      $registros = (isset($data['registros']))?$data['registros']:10;
      $pagina = (isset($data['pagina']))?$data['pagina']:1;
      $filtros = (isset($data['filtros']))?$data['filtros']:"";
      if(isset($this->search) && $this->search != "" ){
        $where .= $this->search;
      }
      
      $registros =  $this->generico->obtenerRegistros([
                      'select' => 'token',
                      'from' => $this->table_name,
                      'where' => $where,
                    ]);
      $registros = (isset($registros[0]))?$registros:[];
      
      $this->response(
                        $registros
                      , 200);
    }

   
}