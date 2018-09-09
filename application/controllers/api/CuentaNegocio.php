<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'Api.php';

class CuentaNegocio extends Api {

  public $table_name = "Cliente";
  public $coulumna_id = "idCliente";

  public function __construct() {
      parent::__construct();
  }

  public function index_get($id = 0){
  	$registros =  $this->generico->obtenerRegistros([
                      'select' => '*',
                      'from' => "Negocio ",
                      'where' => "where idNegocio = ".$id
                    ]);
  	
  	$datos = [];
  	if(is_array($registros)){
  		foreach ($registros as $key => $value) {
  			$datos[] = [
  				'ot' => "0001",
  				'dOp' => [
  					'alias' => "",
  					'cl' => $value['num_cuenta'],
  					'type' => isset($cuenta[0]["desc_cuenta"])?$cuenta[0]["desc_cuenta"]:"TD",
  					'refn' => "",
  					'refa' => $value['Nombre'],
  					'amount' => "",
  					'bank' => "00012",
  					'country' => "MX",
  					'currency' => "MXN"
  				]
  			];
  		}
  	}
  	$this->response($datos, 200);
  }

   
}