<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'Api.php';

class CuentaCliente extends Api {

  public $table_name = "Cliente";
  public $coulumna_id = "idCliente";

  public function __construct() {
      parent::__construct();
  }

  public function index_get($id = 0){
  	$registros =  $this->generico->obtenerRegistros([
                      'select' => 'concat (cl.nombre," ",cl.apellido_paterno," ",cl.apellido_materno) AS nombre, cta.numero_cuenta',
                      'from' => "Cuenta cta ",
                      'join' => "join Cliente cl on cl.idCliente = cta.Cliente_idCliente",
                      'where' => "where cl.idCliente = ".$id
                    ]);
  	$datos = [];
  	if(is_array($registros)){
  		foreach ($registros as $key => $value) {
  			$datos[] = [
  				'ot' => "0001",
  				'dOp' => [
  					'alias' => "",
  					'cl' => $value['numero_cuenta'],
  					'type' => "CL",
  					'refn' => "",
  					'refa' => $value['nombre'],
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